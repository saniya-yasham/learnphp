# Day 3

2. Marks 90 and above → Grade: A
   Marks 75 to 89 → Grade: B
   Marks 60 to 74 → Grade: C
   Marks 40 to 59 → Grade: D
   Marks below 40 → Grade: Fail

3. There are teachers also in the db so first check if $student = true then calculate the marks otherwise just show "You are not a student".

# DAY 13

## Task 1 – Everyone must do this:

1. Create a class called Student with the following 4 properties:

name
email
course
adhaarNumber

2.  You need to decide which access modifier (public, private, or protected) is best for each property.

3.  Use a constructor method to automatically set the values when the object is created.

4.  Add a method to display the student’s profile in this format:
    $student1 = new Student("John", "john.doe@gmail.com", "Laravel");
    OUTPUT: Name: John, Course: Laravel, Email: john@gmail.com

## Task 2 – Optional (if Task 1 is done):

1. Don’t show the full email or adhaar number. Instead, mask them before showing the info.

For example: `Email: j***@gmail.com`

Adhaar: `****1234`

$student1 = new Student("John", "john.doe@gmail.com", "Laravel", "123456781234");
OUTPUT: Name: John, Course: Laravel, Email: j**\*@gmail.com, Adhaar: \*\***1234

✅ You can take help from ChatGPT or Google to learn how to mask values.
