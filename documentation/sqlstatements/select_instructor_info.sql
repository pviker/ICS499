select instructor.first_name, instructor.last_name, instructor.email 
from instructor, user
where instructor.user_id = user.user_id and user.instructor_flag = '1';
