<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
    
        body {
            background-color: #f4f6f9;
            color: #333;
        }
    
        header {
            background-color: #1f2937;
            padding: 1.5rem 2rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
    
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    
        .left,
        .right {
            display: flex;
            align-items: center;
        }
    
        .logo {
            font-size: 1.5rem;
            color: #fff;
            margin-right: 2rem;
        }
    
        .links a {
            margin-right: 1.5rem;
            text-decoration: none;
            color: #cbd5e1;
            font-weight: 500;
            transition: color 0.3s;
        }
    
        .links a:hover {
            background-color: #6b6969;
            color: black;
            border-radius: 5px;
        }

        .active {
            background-color: #6b6969;
            color: black;
            border-radius: 5px;
        }
    
        .noti,
        .profile {
            color: #cbd5e1;
            font-size: 1.2rem;
            margin-left: 1.5rem;
            cursor: pointer;
            transition: color 0.3s;
        }
    
        .noti:hover,
        .profile:hover {
            color: #fff;
        }
    
        .main {
            padding: 2rem;
            background-color: white;
        }
    
        .main h1 {
            font-size: 2rem;
            font-weight: bold;
        }

        .content {
            padding: 2rem;
        }
        
        .content p {
            font-size: 1.7rem;
        }
    </style>
</head>