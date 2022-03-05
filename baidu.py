#!/usr/bin/python3
import time
import urllib.request, re

with urllib.request.urlopen('https://top.baidu.com/') as file:
    print(":", file.status, file.reason)
    data = file.read().decode('utf-8')

    reg = '<title>(.*?)</title>'
    title = re.findall(reg, data, re.S | re.M)
    print("title:", title)

    reg = '<div class="c-single-text-ellipsis">(.*?)</div>'
    content = re.findall(reg, data, re.S | re.M)
    i = 0
    print(":\n")
    localtime = time.strftime("%Y-%m-%d %X")
    with open('baidu.html', 'w',encoding='utf-8') as file:
        file.writelines(
            '<!DOCTYPE html>\n<html>\n<head>\n<meta charset="utf-8">\n<title>url</title>\n</head>\n<body>\n<h1>最近一次更新于:' + localtime+'</h1>\n<ul>')
    while i < 20:
        print(content[i])

        with open('baidu.html', 'a',encoding='utf-8') as file:
            file.writelines('<li class="size">' + content[i] + "</li>" + "\n")
        i = i + 2
    with open('baidu.html', 'a') as file:
        file.writelines("</ul>\n<style>\n.size{\nfont-size: 30px;\n}\n</style>\n</body>\n</html>")
