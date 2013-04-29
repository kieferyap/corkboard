API Guide:

Database schema can be found here: https://fbcdn-sphotos-a-a.akamaihd.net/hphotos-ak-ash4/480743_565975360089154_434674261_n.jpg

1. user
  a. GET
    - GET /user/1 returns user with id = 1
  b. POST
    - POST /user PARAMS {email, surname, first_name} or {user JSON object}
  c. PUT
    - PUT /user/1 updates user #1
  d. DELETE
    - DELETE /user/1 deletes user with id = 1
2. course
  a. GET
    - GET /course/1 returns course with id = 1
    - GET /course/1/instructor returns instructor(s) of course #1 (I'll leave it up to you to decide whether or not to make the system robust enough to make a course have more than 1 instructor... if a course has more than 1 instructor, simply return a list of users as JSON)
  b. POST
    - POST /course/ PARAMS {instructor_id, name, description} (description is optional)
  c. PUT
    - PUT /course/1 updates course #1
  d. DELETE
3. student
  a. GET
    - GET /course/1/students returns all the students of the course #1
    - GET /course/1/students/1 returns student #1
  b. POST
    - POST /course/1/students/ PARAMS {user}
      -> pass a User object, read user.id, and use those to make the references
        -> alternatively, just do {user_id}... I leave the decision to you
  c. PUT
    - PUT /course/1/students/1 PARAMS {user}
  d. DELETE
4. badges
  a. GET
    - GET /badge/1 returns badge #1
  b. POST
    - POST /badge PARAMS {name, image_url}
      - just use dummy image_urls for now... get a random image from google or something if you need sample data :))
  c. PUT
    - PUT /badge/1
  d. DELETE
5. student_badges
  a. GET
    - GET /course/1/students/1/badges returns badges of student #1 in course #1
    - GET /course/1/students/1/badges/1 returns badge #1 of student #1 in course #1
  b. POST
    - POST /course/1/students/1/badges PARAMS {badge}
  c. PUT
    - same as POST
  d. DELETE
    - same as GET

*when doing a PUT/POST request, you usually pass a JSON in the form of {param_name1: param1, param_name2: param2, ..., param_namen: paramn}
*you’re free to redesign this, as long as you follow the general pattern; if something doesn’t make sense, let’s discuss it-- some stuff here might’ve broken a pattern or two
*up to you whether to use plural forms or not; it can either be /users/1 or /user/1; but for collections, it’s usually plural... so maybe use plural na lang pala =))