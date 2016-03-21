select student.first_name, student.last_name, student.email 
from student, user
where student.user_id = user.user_id and user.instructor_flag = '0';
