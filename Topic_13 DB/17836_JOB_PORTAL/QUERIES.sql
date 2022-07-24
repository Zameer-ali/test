SELECT * FROM  candidate CD INNER JOIN academic_info AI ON CD.`condidate_id`=AI.`candidate_id`
 INNER JOIN pro_skills PS ON CD.`condidate_id`=PS.`candidate_id` 
 INNER JOIN work_experiece WX ON CD.`condidate_id`=WX.`candidate_id` 
 INNER JOIN candidate_jobs CJ ON CD.`condidate_id`=CJ.`condidate_id` 
 INNER JOIN jobs J ON CJ.`job_id`=J.`job_id` 
 INNER JOIN company C ON J.`company_id`=C.`company_id` 
 INNER JOIN contact_numbers CN ON C.`company_id`=CN.`company_id`
 INNER JOIN job_applications JA ON J.`job_id`=JA.`job_id` 
 INNER JOIN application_status A ON JA.`j_app_id`=A.`j_app_id` WHERE CD.`name`='MASOOMA' GROUP BY J.`job_name`;

SELECT C.`company_id`,C.`company_name`,J.`job_id`,J.`job_name`,CJ.`condidate_id`,A.`app_s_id`,A.`status`
 FROM candidate_jobs CJ 
 INNER JOIN jobs J ON CJ.`job_id`=J.`job_id` 
 INNER JOIN company C ON J.`company_id`=C.`company_id`
 INNER JOIN job_applications JA ON J.`job_id`=JA.`job_id` 
 INNER JOIN application_status A ON JA.`j_app_id`=A.`j_app_id` GROUP BY J.`job_id`;