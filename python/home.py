#!/home/bin/python
# -*- coding:utf-8 -*-

import cgi
import cgitb

# 웹에서 에러를 보고자 할때
cgitb.enable()

# 이 페이지로 넘어오는 parameter를 받고자 할때 사용.
form = cgi.FieldStorage()

if __name__=="__main__":
        html_head = """
        <html>
                <head>
                        <title>안뇽</title>
                </head>
        """

        html_body = """
                <body>
                        <b>Hello world</b>
                </body>
        </html>
        """

        print "Content-type: text/html; charset=utf-8\n\n"
        print html_head
        print html_body