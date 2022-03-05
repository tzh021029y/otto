import shutil

import jsonpath
import os
from urllib.request import urlretrieve
import requests
import time
#包装成函数
def url_list(id):
    #目标url
    url = 'https://api.bilibili.com/pgc/season/index/result?season_version=-1&area=-1&is_finish=-1&copyright=-1&season_status=-1&season_month=-1&year=-1&style_id=-1&order=3&st=1&sort=0&page={}&season_type=1&pagesize=20&type=1'.format(id)

    #模拟浏览器
    headers = {
        'user-agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.69 Safari/537.36'}
    #发送请求+解析数据
    response=requests.get(url,headers=headers).json()
    name_list = jsonpath.jsonpath(response, '$..title')
    link_list=jsonpath.jsonpath(response,'$..cover')

    return (name_list,link_list)
#shutil.rmtree("D:\\xampp\\htdocs\\b站最高追番榜")
#文件名
text='b站最高追番榜'
if not os.path.exists(text):
    os.mkdir(text)
n=1
with open('mindan.txt', 'w') as file:
    file.writelines("")
#保存100页，有需要的可以增多
for i in range(1,101):
    name_list, link_list = url_list(i)
    for name, link in zip(name_list, link_list):
        try:
            urlretrieve(link, text + '/' + (str(n) + "") + '.jpg')

            n += 1
            #print(name + '100%')
            print(name)


        except:
            #以数字命名
            urlretrieve(link, text + '/' + str(n) + '.jpg')
            n+=1

    print('第%d页爬取完毕,正在加载下一页...' % i)
    #等待第二页
    time.sleep(2)



