<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        html{
            background-size: cover;
            background: linear-gradient(135deg,white,whitesmoke, lightblue,lightgreen, yellow, orange);

        }
        .comp{
            background-color: crimson;
            color: white;
            padding:12px;
        }
        .dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: orange;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
}
.video {
    text-align: center;
}

.dropdown:hover .dropdown-content {
  display: block;
}
        .chal{
            text-align: center;
        }
        body {
            background-size: cover;
            background: linear-gradient(135deg,white,whitesmoke, lightblue,lightgreen, yellow, orange);

        }

nav a{
            margin: 25px;
            text-decoration: none;
            color: crimson;
            padding: 10px;
            font-size: 30px;
            width: 300px;
            background-color: transparent;
            transition: ease-out .4s;
            box-shadow: inset 0 0 0 0 yellow;
        }
        nav  a:hover{
            box-shadow: inset 300px 0 0 0 green;
            color: white;
            border-radius: 8px;
        }
        .play{
            text-align: center;
        }
        h2{
            text-align: center;
        }
        #frme{
            display: block;  
            margin-left: auto;  
            margin-right: auto;   
            padding: 5px;  
        }
        #img {
            display: block;  
            margin-left: auto;  
            margin-right: auto;    
            padding: 5px;  
        }
        pre {
            display: inline-block; 
            padding: 10px !important;
            margin: 0 0 10px;
            font-size: 16px !important;
            color: #fff !important;
            background-color: #2c2c2c !important;
            border: 1px solid #d8d8d8 !important;
            border-radius: 8px !important;
        }
        .face {
            textdecoration: none;
            background-color: lightyellow !important;
            padding: 4px;
            border-radius: 8px !important;
            color: crimson;
        }
        .intro-img {
			display: block;
			margin: 20px auto;
			max-width: 100%;
			height: auto;
            border-radius: 8px;
		}
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav><a href="home.php">Home</a>
    <a href="tests.php">Games</a>
    <a href="advance.html">Advanced Level</a>
    </nav>
    <!DOCTYPE html>
<html>
<head>
  <title>Learn Python</title>
</head>
<body>
  <header>
    <h1>Welcome to the Python Learning Page</h1>
  </header>

  <nav>
    <ul>
      <li><a href="#introduction">Introduction</a></li>
      <li><a href="#basics">Python Basics</a></li>
      <li><a href="#control">Control Structures</a></li>
      <li><a href="#functions">Functions</a></li>
      <li><a href="#resources">Additional Resources</a></li>
    </ul>
  </nav>

  <main>
    <section id="introduction">
    <header>
		<h1>Introduction to Learning Python</h1>
	</header>
<main>
	<p>Python is a popular, versatile, and easy-to-learn programming language that is used in a wide range of fields, including web development, data analysis, artificial intelligence, scientific computing, and more. Its clear and concise syntax, coupled with its broad range of libraries and frameworks, makes Python a favorite among developers of all levels.</p>
	
	<img src="download.jpg" alt="Python Logo" class="intro-img">
	
	<p>Whether you're a beginner or an experienced programmer, learning Python can open up a world of possibilities. It's a great language to start with if you're new to programming because it's easy to read and write, and its dynamic nature makes it well-suited for prototyping and experimenting. Plus, Python's popularity means that there are plenty of resources available to help you learn, including online tutorials, books, and courses.</p>
	
	<p>So why not dive in and start learning Python today? Whether you're interested in building web applications, automating repetitive tasks, analyzing data, or exploring artificial intelligence, Python has something to offer.</p>
</main>
    </section>

    <section id="basics">
    <h1>Python Basics</h1>
    <p>Python is a powerful programming language that is easy to learn and widely used for a variety of applications. Here are some of the key concepts you'll need to understand to get started with Python:</p>
    <ul>
      <li>Variables and data types</li>
      <li>Operators</li>
      <li>Conditional statements</li>
      <li>Loops</li>
      <li>Functions</li>
      <li>Modules and packages</li>
      <li>Input and output</li>
      <li>Exception handling</li>
      <li>File handling</li>
      <li>Object-oriented programming</li>
    </ul>
    <p>Learning Python basics is a great way to get started with programming and set yourself up for success in a variety of fields.</p>
 
    </section>

    <section id="control">
    <h2>Control Structures in Python</h2>

<h3>Conditional statements:</h3>
<ul>
  <li><code>if</code> statement</li>
  <li><code>if...else</code> statement</li>
  <li><code>if...elif...else</code> statement</li>
  <li>Ternary operator</li>
</ul>

<h3>Looping statements:</h3>
<ul>
  <li><code>while</code> loop</li>
  <li><code>for</code> loop</li>
  <li><code>range()</code> function</li>
  <li><code>break</code> statement</li>
  <li><code>continue</code> statement</li>
</ul>

<h3>Exception handling:</h3>
<ul>
  <li><code>try...except</code> statement</li>
  <li><code>try...except...else</code> statement</li>
  <li><code>try...except...finally</code> statement</li>
  <li><code>raise</code> statement</li>
  <li>Custom exceptions</li>
</ul>

<h3>Function calls:</h3>
<ul>
  <li>Defining functions with <code>def</code></li>
  <li>Calling functions with arguments</li>
  <li>Default arguments</li>
  <li>Variable-length arguments (<code>*args</code> and <code>**kwargs</code>)</li>
  <li>Lambda functions</li>
</ul>

<h3>Other control structures:</h3>
<ul>
  <li><code>with</code> statement for working with context managers</li>
  <li><code>assert</code> statement for debugging and testing</li>
  <li><code>pass</code> statement to create empty blocks</li>
  <li><code>yield</code> statement for creating generators</li>
</ul>

    </section>

    <section id="functions">
    <h1>Types of Python Functions</h1>
	<p>In Python, there are four types of functions:</p>
	<ol>
		<li><strong>Built-in Functions:</strong> These functions are pre-defined in Python and can be used directly in any Python program without the need for any import statement or external module. Examples of built-in functions in Python include <code>print()</code>, <code>len()</code>, and <code>range()</code>.</li>
		<li><strong>User-defined Functions:</strong> These functions are created by the programmer to perform a specific task or set of tasks within a program. They are defined using the <code>def</code> keyword followed by the function name, parentheses, and a colon. The code for the function is then indented and written on the following lines.</li>
		<li><strong>Anonymous Functions (Lambda Functions):</strong> These are small, one-line functions that do not have a name. They are defined using the <code>lambda</code> keyword, followed by the function's input parameters and a colon, and then the expression that the function will return.</li>
		<li><strong>Recursive Functions:</strong> These are functions that call themselves to solve a problem. They have a base case that stops the recursion and a recursive case that calls the function with a smaller problem. Recursive functions are useful for solving problems that have a recursive structure, such as traversing a tree or calculating factorials.</li>
	</ol>
    </section>

    <section id="resources">
      <h2>Additional Resources</h2>
      <p>Insert additional resources for learning Python here.</p>
    </section>
  </main>

  <footer>
    <p>© 2023 TechRepublic</p>
  </footer>
</body>
</html>

</body>
</html>