# Simple Blog

A lightweight, minimalist blogging platform built in PHP and MySQL.

## Description

This is a simple blogging platform that allows users to create and view posts. It is built using PHP for server-side logic, MySQL for data persistence, and basic HTML/CSS for the frontend.

## Technologies Used

- PHP: Server-side logic
- MySQL: Data persistence
- Docker: Containerization and local development
- HTML/CSS: Frontend display and styling

## Setup

To run this project locally with Docker:

```bash
$ cd ../project_directory
$ docker-compose up -d
```

Then access the application at `http://localhost:8080` and PHPMyAdmin at `http://localhost:8081`.

## Future Improvements

1. **User Authentication**: Allow users to register and log in, so that only authenticated users can create posts.
2. **Comments**: Allow users to comment on posts.
3. **Rich Text Editor**: Implement a rich text editor for post creation, to allow formatting, links, images, etc.
4. **Post Categories/Tags**: Allow posts to be categorized or tagged, to make it easier for users to find the content they're interested in.

