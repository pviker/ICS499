select instructor.first_name, instructor.last_name, courses.course_name
from courses, instructor
where instructor.instructor_id=courses.instructor_id;
