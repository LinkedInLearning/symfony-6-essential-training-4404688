# Symfony 6 Essential Training
This is the repository for the LinkedIn Learning course Symfony 6 Essential Training. The full course is available from [LinkedIn Learning][lil-course-url].

![Symfony 6 Essential Training][lil-thumbnail-url] 

The free website-building framework Symfony is constantly evolving to meet the needs of developers. If you’re looking to stay apace with the latest version, this course was designed for you. Join instructor and software engineer Gary Kovar to learn all about the most recent iteration of your favorite tool, Symfony 6.3, which was first released in May 2023.

Explore the key differences between Symfony Components and Symfony Framework to get up and running with both like a pro. Learn how to develop applications, use the Symfony Framework, and utilize specific implementations of common architectural concepts. Discover tools such as the Twig template engine, UX components, Stimulus, and Turbo, as well as how to take advantage of more advanced features like automated tests, console commands, messaging and queues, notifications, and more.



_See the readme file in the main branch for updated instructions and information._
## Instructions
This repository has branches for each of the videos in the course. You can use the branch pop up menu in github to switch to a specific branch and take a look at the course at that stage, or you can add `/tree/BRANCH_NAME` to the URL to go to the branch you want to access.

## Branches
The branches are structured to correspond to the videos in the course. The naming convention is `CHAPTER#_MOVIE#`. As an example, the branch named `02_03` corresponds to the second chapter and the third video in that chapter. 
Some branches will have a beginning and an end state. These are marked with the letters `b` for "beginning" and `e` for "end". The `b` branch contains the code as it is at the beginning of the movie. The `e` branch contains the code as it is at the end of the movie. The `main` branch holds the final state of the code when in the course.

When switching from one exercise files branch to the next after making changes to the files, you may get a message like this:

    error: Your local changes to the following files would be overwritten by checkout:        [files]
    Please commit your changes or stash them before you switch branches.
    Aborting

To resolve this issue:
	
    Add changes to git using this command: git add .
	Commit changes using this command: git commit -m "some message"

## Installing
1. To use these exercise files, you must have the following installed:
	- [Composer](https://getcomposer.org/)
2. Clone this repository into your local machine using the terminal (Mac), CMD (Windows), or a GUI tool like SourceTree.
3. Some chapters will continue in the same project, while others may be in a distinct directory. You will want to `composer install` each time you switch to a new chapter.

### Instructor

Gary Kovar 
                            


                            

Check out my other courses on [LinkedIn Learning](https://www.linkedin.com/learning/instructors/gary-kovar).

[lil-course-url]: https://www.linkedin.com/learning/symfony-6-essential-training?dApp=59033956&leis=LAA
[lil-thumbnail-url]: https://media.licdn.com/dms/image/D4D0DAQE9TG9cfvCb6g/learning-public-crop_288_512/0/1691427081657?e=2147483647&v=beta&t=9_YV1_cqWxGy3VnKCIC6XRzGEwfEb_4eh4HPFxki8iM
