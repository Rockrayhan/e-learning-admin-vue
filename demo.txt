======= database tables ========

1. Course/Product Manage
id  name   description   price   image      instructor_id      student_id     status     



2. Instructors
id  name    email   password    instructor_id    product_id     category_id


3. Students
id  name    email   password    product_id   


4. category
 id name 


5. Topics
id name 



 6. Lessons
id     name     product_id       instructor_id


 7. Orders
id  Student_name  email   phone      product_name    product_id      student_id   status    


 8. Payments
 id     student_id     product_id    type    t_id


 9. Blogs/Catalogue
 id     title       description     category        status      instructor_id       student_id



10. review
id     name     occupation    description       student_id     rating


11. Quiz
id      product_id      Question       option1      option2     option3     option4     marks  


12. Quiz Answer
id      student_id       question_number     selected_option 


13. message
id      student_id      instructor_id       msg


 7. Cart Items
 8. Discount


 

 ### product == courses
 ### lessons == topic