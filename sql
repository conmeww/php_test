SELECT name FROM users
JOIN objects 
WHERE users.object_id= objects.id
