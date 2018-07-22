from flask import Flask, request, render_template
from flask_restful import Resource, Api, reqparse
from flaskext.mysql import MySQL
from flask_restful.utils import cors

app = Flask(__name__)
api = Api(app)
api.decorators = [cors.crossdomain(origin='*')]

mysql = MySQL()

# MySQL configurations
app.config['MYSQL_DATABASE_USER'] = 'root'
app.config['MYSQL_DATABASE_PASSWORD'] = '2453'
app.config['MYSQL_DATABASE_DB'] = 'ntust_course'
app.config['MYSQL_DATABASE_HOST'] = 'localhost'

mysql.init_app(app)


class Course(Resource):

    def get(self, course_id):
        try:
            cur = mysql.connect().cursor()
            cur.execute("SELECT * FROM courses WHERE course_id = %s", course_id)

            data = cur.fetchall()
            item = {
                'course_id': data[0][0],
                'title': data[0][1],
                'credit': data[0][2],
                'type': data[0][3],
                'teacher': data[0][4],
                'time': data[0][5],
                'classroom': data[0][6],
                'remark': data[0][7]
            }

            return {'StatusCode': '200', 'Courses': item}
        except Exception as e:
            return {'error': str(e)}


class Courses(Resource):

    def get(self):
        try:
            cur = mysql.connect().cursor()
            cur.execute("SELECT * FROM courses")

            data = cur.fetchall()
            items_list = []
            for item in data:
                i = {
                    'course_id': item[0],
                    'title': item[1],
                    'credit': item[2],
                    'type': item[3],
                    'teacher': item[4],
                    'time': item[5],
                    'classroom': item[6],
                    'remark': item[7]
                }
                items_list.append(i)

            return {'StatusCode': '200', 'Courses': items_list}
        except Exception as e:
            return {'error': str(e)}


# 擷取args
parser = reqparse.RequestParser()
parser.add_argument('account')
parser.add_argument('password')
parser.add_argument('name')
parser.add_argument('department')


class User(Resource):

    def get(self, account):
        try:
            cur = mysql.connect().cursor()
            cur.execute("SELECT * FROM users WHERE account = %s", account)

            data = cur.fetchall()
            item = {
                'account': data[0][0],
                'password': data[0][1],
                'name': data[0][2],
                'department': data[0][3],
            }

            return {'StatusCode': '200', 'Users': item}
        except Exception as e:
            return {'error': str(e)}

    def put(self, account):
        args = parser.parse_args()

        try:
            cur = mysql.connect().cursor()
            cur.execute("UPDATE users SET password=%s,name=%s,department=%s WHERE account =%s",
                        (args['password'], args['name'], args['department'], account))
            cur.connection.commit()

            return args, 201

        except Exception as e:
            return {'error': str(e)}

    def delete(self, account):
        try:
            cur = mysql.connect().cursor()
            cur.execute("DELETE FROM users WHERE account =%s",
                        (account))
            cur.connection.commit()

            return '', 204

        except Exception as e:
            return {'error': str(e)}


class Users(Resource):

    def get(self):
        try:
            cur = mysql.connect().cursor()
            cur.execute("SELECT * FROM users")

            data = cur.fetchall()
            items_list = []
            for item in data:
                i = {
                    'account': item[0],
                    'password': item[1],
                    'name': item[2],
                    'department': item[3],
                }
                items_list.append(i)

            return {'StatusCode': '200', 'Users': items_list}
        except Exception as e:
            return {'error': str(e)}

    def post(self):
        args = parser.parse_args()
        try:
            cur = mysql.connect().cursor()
            cur.execute("INSERT INTO users(account,password,name,department) VALUE (%s,%s,%s,%s)",
                        (args['account'], args['password'], args['name'], args['department']))
            cur.connection.commit()

            return args, 201

        except Exception as e:
            return {'error': str(e)}, 202


# 擷取args
parser_course = reqparse.RequestParser()
parser_course.add_argument('course_id')


class User_Courses(Resource):

    def get(self, account):
        try:
            cur = mysql.connect().cursor()
            cur.execute("SELECT course_id FROM users_chosen WHERE account =%s ",
                        account)
            data = cur.fetchall()
            course_ids = []

            for item in data:
                course_ids.append(item[0])

            # 存放最後輸出課程
            course_list = []
            for id in course_ids:
                cur.execute("SELECT * FROM courses WHERE course_id = %s", id)
                course_data = cur.fetchall()
                course = {
                    'course_id': course_data[0][0],
                    'title': course_data[0][1],
                    'credit': course_data[0][2],
                    'type': course_data[0][3],
                    'teacher': course_data[0][4],
                    'time': course_data[0][5],
                    'classroom': course_data[0][6],
                    'remark': course_data[0][7],
                }
                course_list.append(course)
            return {'StatusCode': '200', 'account': account, 'courses': course_list}

        except Exception as e:
            return {'error': str(e)}

    def delete(self, account):
        args = parser_course.parse_args()
        try:
            cur = mysql.connect().cursor()
            cur.execute("DELETE FROM users_chosen WHERE course_id =%s AND account =%s",
                        (args['course_id'], account))
            cur.connection.commit()

            return '', 204

        except Exception as e:
            return {'error': str(e)}

    def post(self, account):
        args = parser_course.parse_args()
        print(args['course_id'])
        try:
            cur = mysql.connect().cursor()
            cur.execute("INSERT INTO users_chosen(account,course_id) VALUE (%s,%s)",
                        (account, args['course_id']))
            cur.connection.commit()

            return args, 201
        except Exception as e:
            code = e.args[0]
            if code == 1062:
                return {'error': 'course repeat'}
            else:
                return {'error': str(e)}


class User_Courses_Delete(Resource):
    def post(self, account, course_id):

        try:
            cur = mysql.connect().cursor()
            cur.execute("DELETE FROM users_chosen WHERE course_id =%s AND account =%s",
                        (course_id, account))
            cur.connection.commit()

            return '', 204

        except Exception as e:
            return {'error': str(e)}


api.add_resource(Courses, '/courses')
api.add_resource(Course, '/courses/<string:course_id>')
api.add_resource(Users, '/users')
api.add_resource(User, '/users/<string:account>')
api.add_resource(User_Courses, '/user_courses/<string:account>')
api.add_resource(User_Courses_Delete, '/user_courses/<string:account>/<course_id>')




if __name__ == '__main__':
    app.run(host='0.0.0.0', threaded=True)
