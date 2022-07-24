SELECT * FROM student s INNER JOIN department d ON s.`dept_id`=d.`dept_id` WHERE d.`dept_name`='BS-SW';
SELECT * FROM student s INNER JOIN department d ON s.`dept_id`=d.`dept_id` WHERE d.`dept_name`='BS-CS';
SELECT * FROM student s INNER JOIN department d ON s.`dept_id`=d.`dept_id` WHERE s.`stu_name`='AHMED';

SELECT s.`stu_id`,s.`stu_name`,d.`dept_id`,d.`dept_name`,b.`batch_id`,b.`name` FROM student s 
INNER JOIN department d ON s.`dept_id`=d.`dept_id` 
INNER JOIN batch b ON d.`dept_id`=b.`dept_id` 
INNER JOIN course_batch cb ON b.`batch_id`=cb.`batch_id` 
INNER JOIN courses c ON cb.`course_id`=c.`course_id` 
WHERE s.`stu_name`='NADIA' AND b.`name`='13TL';

SELECT * FROM courses c INNER JOIN teacher_course tc ON c.`course_id`=tc.`course_id` INNER JOIN teacher t ON t.`teacher_id`=tc.`teacher_id` 
WHERE c.`course_name`='JAVA';

SELECT b.`batch_id`,b.`name`,C.`course_id`,C.`course_name` FROM 
 batch b INNER JOIN course_batch cb ON b.`batch_id`=cb.`batch_id` 
INNER JOIN courses c ON cb.`course_id`=c.`course_id` WHERE b.`name`='14SW';

SELECT * FROM courses c INNER JOIN teacher_course tc ON c.`course_id`=tc.`course_id` INNER JOIN teacher t ON t.`teacher_id`=tc.`teacher_id` 
WHERE T.`teacher_name`='ALI';


SELECT * FROM student s INNER JOIN department d ON s.`dept_id`=d.`dept_id` WHERE S.`gender`='FEMALE' AND D.`dept_name`='BS-SW';

	SELECT * FROM teacher t NATURAL JOIN department d;

