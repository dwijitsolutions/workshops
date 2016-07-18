			<section>
				<h1>Python</h1>
				<h3>Introduction to Python Programming Language</h3>
				<p>
					<small>Created by <a target="_blank" href="https://twitter.com/gdbhosale">Ganesh Bhosale</a> in <a target="_blank" href="http://dwijitsolutions.com">Dwij IT Solutions</a></small><br>
					<a href="http://dwijitsolutions.com" target="_blank">
						<img src="{{ asset('reveal-assets/images/dwij-it-solutions.png') }}" alt="Dwij IT Solutions Logo">
					</a>
				</p>
			</section>
			
			<section>
				<h2>Your support</h2>
				<p>
					Like this <a class="cred">Python</a> tutorial, our tutorials are always open-source for learners. Like our facebook page to get more free tutorial updates.
				</p>
				<p>
					<div class="fb-page" data-href="https://www.facebook.com/dwijitsolutions" data-width="330" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/dwijitsolutions"><a href="https://www.facebook.com/dwijitsolutions">Dwij IT Solutions</a></blockquote></div></div>
					<br><br><br>
				</p>
			</section>

			<section>
				<h2>Python</h2>
				<p>
					<a class="cred">Python</a> is a widely used general-purpose, high-level programming language that lets you work more quickly and integrate your systems more effectively.
				</p>
				<p>
					Its design philosophy emphasises <a target="_blank" href="http://code.tutsplus.com/tutorials/top-15-best-practices-for-writing-super-readable-code--net-8118">code readability</a>, and its syntax allows programmers to express concepts in fewer lines of code
				</p>
			</section>
			
			<section>
				<h2>History of Python</h2>
				<p>Python was conceived in the late 1980’s and its implementation was started in December 1989 by <a target="_blank" href="https://en.wikipedia.org/wiki/Guido_van_Rossum">Guido van Rossum</a> in the Netherlands.</p>
				<br>
				<a target="_blank" href="https://en.wikipedia.org/wiki/Guido_van_Rossum">
					<img src="{{ asset('reveal-assets/images/Guido_van_Rossum.jpg') }}" alt="Guido van Rossum">
				</a>
			</section>

			<section>
				<h2>Features of Python Language</h2>
				<ul class="left-align">
					<li>Very clear, readable syntax</li>
					<li>Object orientation</li>
					<li>Natural expression of procedural code</li>
					<li>Full modularity, supporting hierarchical packages</li>
					<li>Exception-based error handling</li>
					<li>Very high level dynamic data types</li>
					<li>Extensive standard libraries and third party modules for virtually every task</li>
					<li>Extensions and modules easily written in C, C++, Java</li>
				</ul>
			</section>

			<section>
				<h2>Core Philosophy</h2>
				<ul class="left-align">
					<li><a class="cgreen">Beautiful</a> is better than ugly</li>
					<li><a class="cgreen">Explicit</a> is better than implicit</li>
					<li><a class="cgreen">Simple</a> is better than complex</li>
					<li><a class="cgreen">Complex</a> is better than complicated</li>
					<li><a class="cgreen">Readability</a> counts</li>
				</ul>
			</section>

			<section>
				<h2>Python facts !!!</h2>
				<ul class="left-align">
					<li>Open Source</li>
					<li>Easy to Learn & excel.</li>
					<li>No need of compilation of code.</li>
					<li>Error handling in runtime.</li>
					<li>Take very less time for up & running.</li>
					<li>Object Oriented Programming + Procedural + Functional</li>
					<li>Pre-installed with Linux, Unix & Mac OSX</li>
				</ul>
			</section>
			
			<section data-background="#F56767" data-background-transition="zoom" data-transition="zoom">
				<h2>Up & running with Python</h2>
				<img src="{{ asset('reveal-assets/images/python-snake-1.png') }}" width="300">
			</section>
			
			<section>
				<h2>Python Installation on Ubuntu</h2>
				<p>By default python comes pre-installed in Ubuntu distribution. Check simply by command:</p>
				<pre><code>python --version</code></pre>
			</section>
			
			<section>
				<h2>Python Installation on Windows</h2>
				<ol class="left-align">
					<li>Donwload Python Installer from <a href="https://www.python.org/downloads/windows/" target="_blank">https://www.python.org/downloads/windows</a>.</li>
					<li>Or use direct Donwload link for <a target="_blank" href="https://www.python.org/ftp/python/2.7.5/python-2.7.5.msi"> python-2.7.5</a></li>
					<li>
						If python get installed in <a class="cred">C:\python27</a> directory, use command to set path:
						<pre><code>set path=%path%;C:\python27</code></pre>
					</li>
					<li>You will see <a class="cred">Python (command line)</a> in Windows Menu.</li>
					<li>Make sure it runs and opens Python Shell Window</li>
				</ol>
			</section>
			
			<section>
				<h2>Python Installation on Macintosh</h2>
				<p class="left-align">The latest version of Mac OS X, Yosemite, comes with Python 2.7 out of the box. Check simply by command: </p>
				<pre><code>python --version</code></pre>
				<p class="left-align">If not you can install it from <a target="_blank" href="https://www.python.org/downloads/mac-osx/">https://www.python.org/downloads/mac-osx</a></p>
			</section>
			
			<section>
				<h2>Python Interpreter</h2>
				<p class="left-align">Simply by putting command <a class="cred">python</a> in terminal you can start python interpretor for Ubuntu/Mac. For windows open <a class="cred">Python (command line)</a> from Windows Menu.</p>
				<p class="left-align">The interpreter’s line-editing features include interactive editing, history substitution and code completion on systems that support readline.</p>
				<p class="left-align">The interpreter operates somewhat like the Unix shell: when called with standard input connected to a tty device, it reads and executes commands interactively.</p>
			</section>
			
			<section>
				<h2>Using Interpreter</h2>
				<p class="left-align">
					Press <i class="fa fa-arrow-up cred"></i> to get command history.<br><br>
					
					When commands are read from a tty, the interpreter is said to be in <a class="cred">interactive mode</a>. In this mode it prompts for the next command with the secondary prompt which has three dots representation (<a class="cred">...</a>), instead of (<a class="cred">>>></a>) which is primary prompt.<br>
					<br>
					To exit interpreter:<br>
					Use <a class="cred">Ctrl+D</a> in Linux & Mac<br>
					Use <a class="cred">Ctrl+Z</a> and then Enter in Windows
				</p>
			</section>
			
			<section>
				<h2>Using Interpreter</h2>
				<pre><code>>>>(7+2)*10
90
>>>print “Hello World”
Hello World
>>>i=90
>>>i
90
>>>print i*(i+10)
9000</code></pre>
			</section>
			
			<section>
				<h2>Running Python Files (.py)</h2>
				<ul class="left-align">
					<li>Off course you are not going to write all your python codes on interpreter.</li>
					<li>We use extension <a class="cred">.py</a> for saving python files.</li>
					<li>Command to execute python file:</li>
						<pre><code>python SimpleProgram.py</code></pre>
					<li>Let’s see How to write programs in Python !!!</li>
				</ul>
			</section>
			
			<section>
				<h2>SimpleProgram.py</h2>
				<pre><code>x = 34 - 23 # Acomment.
y = "Hello" # Another one.
z = 3.45
if z == 3.45 or y == "Hello":
	x = x + 1
	y = y + "World" # String concat.
print x
print y</code></pre>
			</section>
			
			<section data-background="#F56767" data-background-transition="zoom" data-transition="zoom">
				<h2>Basics of Python</h2>
				<img src="{{ asset('reveal-assets/images/python-snake-2.png') }}" width="300">
			</section>
			
			<section>
				<h2>Python Identifiers</h2>
				<ul class="left-align">
					<li>A Python identifier is a name used to identify a variable, function, class, module or other object.</li>
					<li>An identifier starts with a letter <a class="cred">A to Z</a> or <a class="cred">a to z</a> or an underscore (<a class="cred">_</a>) followed by zero or more letters, underscores
					and digits (<a class="cred">0 to 9</a>)</li>
					<li>Characters not allowed: @, $ and % & other symbols</li>
					<li>Python is a <a class="cred">case sensitive</a>. Thus, Manpower and manpower are two different identifiers.</li>
				</ul>
			</section>
			
			<section>
				<h2>Comments</h2>
				<ul class="left-align">
					<li>Comments follow a <a class="cred">#</a> Hash</li>
					<li>No multi-line comments</li>
				</ul>
				<pre><code data-trim class="python">
a = 20 # Single line comment

# This is multiline comment using hash
# and it goes to another line as well
				</code></pre>
			</section>
			
			<section>
				<h2>Coding Style</h2>
				<ul class="left-align">
					<li>No braces <a class="cred">{}</a> for block of code. We use indentation instead.</li>
					<li>Indentation with similar number of <a class="cred">spaces / tabs</a>.</li>
				</ul>
				<pre><code>if True:
	print "Answer"
	print "True"
else:
	print "Answer"
	 print "False" # This line will give Error</code></pre>
			</section>
			
			<section>
				<h2>Python 2 or 3 ?</h2>
				<ul class="left-align">
					<li>For beginners there is no real difference.</li>
					<li>Python 2.x is legacy, Python 3.x is the present and future of the language</li>
					<li>Python 3.0 was released in 2008. The final 2.x version 2.7 release came out in mid-2010, with a statement of extended support for this end-of-life release.</li>
					<li>The 2.x branch will see no new major releases after that. 3.x is under active development and has already seen over five years of stable releases, including version 3.3 in 2012 and 3.4 in 2014.</li>
				</ul>
			</section>
			
			<section>
				<h2>Data</h2>
			</section>
			
			<section>
				<h2>Objects</h2>
				<ul class="left-align">
					<li>Everything in Python is an object that has:</li>
					<li>an identity (<a class="cred">id</a>)</li>
					<li>a <a class="cred">type</a></li>
					<li>a <a class="cred">value</a> (mutable or immutable)</li>
				</ul>
			</section>
			
			<section>
				<h2>Object id</h2>
				<pre><code data-trim>
>>> a = 4
>>> id(a)
140542751073952
>>> a = "Hello"
>>> id(a)
4370401824
				</code></pre>
			</section>
			
			<section>
				<h2>Type</h2>
				<pre><code data-trim>
>>> a = 4
>>> type(a)
&lt;type 'int'&gt;
>>> a = "Hello"
>>> type(a)
&lt;type 'str'&gt;
				</code></pre>
			</section>
			
			<section>
				<h2>Value</h2>
				<pre><code data-trim>
>>> a = 4
>>> a
4
>>> print a
4
>>> a = "Hello"
>>> a
'Hello'
				</code></pre>
			</section>
			
			<section>
				<h2>Two Types of Objects</h2>
				<ul class="left-align">
					<li><a class="cred">Mutable</a>: When you alter the item, the <u>id</u> is still the same.<br><a class="cgreen">e.g.</a> Dictionary, List</li>
					<li><a class="cred">Immutable</a>: When you alter the item, the <u>id</u> changes.<br><a class="cgreen">e.g.</a> String, Integer, Tuple</li>
				</ul>
			</section>
			
			<section>
				<h2>Mutable (Changable)</h2>
				<ul class="left-align">
					<li>When you alter the item, the <u>id</u> is still the same.<br><a class="cgreen">e.g.</a> Dictionary, List</li>
				</ul>
				<pre><code data-trim>
>>> b = []
>>> id(b)
140675605442000 # Object ID
>>> b.append(3)
>>> b
[3]
>>> id(b)
140675605442000 # Object ID SAME !
				</code></pre>
				
			</section>
			
			<section>
				<h2>Immutable</h2>
				<ul class="left-align">
					<li>When you alter the item, the <u>id</u> changes.<br><a class="cgreen">e.g.</a> String, Integer, Tuple</li>
				</ul>
				<pre><code data-trim>
>>> a = 4
>>> id(a)
6406896
>>> a = a + 1
>>> id(a)
6406872 # DIFFERENT!
				</code></pre>
			</section>
			
			<section>
				<h2>Variables</h2>
				<pre><code data-trim>
a = 4 		# Integer
b = 5.6 	# Float
c = "hello"	# String
a = "4" 	# rebound to String
				</code></pre>
			</section>
			
			<section>
				<h2>Naming Conventions for variables</h2>
				<ul class="left-align">
					<li>lowercase</li>
					<li>underscore_between_words</li>
					<li>don't start with numbers</li>
					<li>See PEP on <a target="_blank" href="http://legacy.python.org/dev/peps/pep-0008">http://legacy.python.org/dev/peps/pep-0008</a>
					</li>
				</ul>
			</section>
			
			<section>
				<h2>PEP</h2>
				<ul class="left-align">
					<li>Python Enhancement Proposal</li>
					<li>Similar to JSR(Java Specification Requests) in Java </li>
					<li>The formal documents that describe proposed specifications and technologies for adding to the platform.</li>
					<li>In short <i class="fa fa-arrow-right"></i> <a class="cgreen">Standardization</a></li>
				</ul>
			</section>
			
			<section data-background="#F56767" data-background-transition="zoom" data-transition="zoom">
				<h2>Maths & Variables</h2>
				<img src="{{ asset('reveal-assets/images/maths.png') }}" width="350">
			</section>
			
			<section>
				<h2>Basic Operations</h2>
				<ul class="left-align">
					<li><a class="cred">+</a> (Addition) <a class="cred">-</a> (Substraction) <a class="cred">*</a> (Multiplication) <a class="cred">/</a> (Division)</li>
					<li><a class="cred">**</a> (power) &nbsp;&nbsp;&nbsp; 2<sup>10</sup> = 1024
						<pre><code data-trim>
>>> 2 ** 10
1024
						</code></pre>
					</li>
					<li><a class="cred">%</a> (modulo) - this operation finds the remainder after division of one number by another.
						<pre><code data-trim>
>>> 11 % 2
1
						</code></pre>
					</li>
				</ul>
			</section>
			
			<section>
				<h2>Maths</h2>
				<pre><code data-trim class="python">
>>> print round(3.14159265, 2) # round number for 2 decimal places
3.14
>>> abs(-45) 	# absolute value of number
45
>>> 11 // 2 	# floor division
5
>>> int(34.67) 	# parse float to int
34
>>> int("89")	# parse string to int
89
>>> float(89)	# parse int to float
89.0
>>> long(67829) # parse to long
67829L
				</code></pre>
			</section>
			
			<section>
				<h2>Maths Module</h2>
				<pre><code data-trim class="python">
>>> import math 	# Import Math Module
>>> math.sqrt(10) 	# Find Square root of 10
3.1622776601683795
>>> math.factorial(5) 	# Factorial of 5
120
>>> math.log10(20) 	# Return the base-10 logarithm of 20
1.3010299956639813
>>> math.sin(4) 	# Return the sine of 4 radians
-0.7568024953079282
>>> math.pi 		# The mathematical constant π
3.141592653589793


				</code></pre>
				<ul class="left-align">
					<li>Check more on <a target="_blank" href="https://docs.python.org/2/library/math.html" >https://docs.python.org</a>.</li>
				</ul>
			</section>
			
			<section>
				<h2>Order of Operations</h2>
				<table>
					<thead>
						<tr>
							<th>Order</th>
							<th>Syntax</th>
							<th>Operation</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>( ... )</td>
							<td>Parentheses</td>
						<tr>
						<tr>
							<td>2</td>
							<td>**</td>
							<td>Exponents</td>
						<tr>
						<tr>
							<td>3</td>
							<td>* / % //</td>
							<td>Multiplication and Division</td>
						<tr>
						<tr>
							<td>4</td>
							<td>+ -</td>
							<td>Addition and Subtraction</td>
						<tr>
					</tbody>
				</table>
			</section>
			
			<section>
				<h2>Careful with integer division</h2>
				<pre><code data-trim class="python">
>>> 3/4
0
>>> 3/4. 	# Either number should be float
0.75
>>> 3./4
0.75
				</code></pre>
			</section>
			
			<section>
				<h2>Long</h2>
				<pre><code data-trim class="python">
>>> import sys
>>> sys.maxint 		# Value differs from PC to PC
9223372036854775807
>>> sys.maxint + 1
9223372036854775808L 	# Long variable
				</code></pre>
			</section>
			
			<section>
				<h2>New way of defining variables</h2>
				<pre><code data-trim class="python">a, b = 0, 1</code></pre>
				<p>is same as</p>
				<pre><code data-trim class="python">
a = 0
b = 1
				</code></pre>
			</section>
			
			<section>
				<h2>Booleans</h2>
				<ul class="left-align">
					<li>Values: <a class="cred">True</a> / <a class="cgreen">False</a>.</li>
					<li>First letters should be capital.</li>
				</ul>
				<pre><code data-trim class="python">
a = True
b = False

if False:
	print "Its true"	# This will not get printed
if a:
	print a 		# Prints True
				</code></pre>
			</section>
			
			<section>
				<h2>None</h2>
				<ul class="left-align">
					<li>Pythonic way of saying <a class="cred">NULL</a>.</li>
					<li>Evaluates to boolean <a class="cred">False</a>.</li>
				</ul>
				<pre><code data-trim class="python">
c = None
				</code></pre>
			</section>
			
			<section>
				<h2>Conditionals</h2>
				<ul class="left-align">
					<li><a class="cred">if</a> and <a class="cred">else</a> are same as that of any other language</li>
					<li><a class="cred">elif</a> == <a class="cred">else if</a></li>
					<li>Colon is used for block. Indentaion matters !!!</li>
				</ul>
				<pre><code data-trim class="python">
if grade > 90:
	print "A"
elif grade > 80:
	print "B"
elif grade > 70:
	print "C"
else:
	print "D"
				</code></pre>
			</section>
			
			<section>
				<h2>Comparison Operators</h2>
				<table class="shrink">
					<thead>
						<tr>
							<th>Syntax</th>
							<th>Operation</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>></td>
							<td>Greater than</td>
						</tr>
						<tr>
							<td>>=</td>
							<td>Greater than or equal to</td>
						</tr>
						<tr>
							<td><</td>
							<td>Less than</td>
						</tr>
						<tr>
							<td><=</td>
							<td>Less than equal to</td>
						</tr>
						<tr>
							<td>==</td>
							<td>Is equal to</td>
						</tr>
						<tr>
							<td>!=</td>
							<td>Is not equal to</td>
						</tr>
					</tbody>
				</table>
				
				<pre><code data-trim class="python">
>>> 5 > 9
False
>>> 'matt' != 'fred'
True
>>> isinstance('matt', basestring)
True
				</code></pre>
			</section>
			
			<section>
				<h2>Boolean Operators</h2>
				<ul class="left-align">
					<li>Logical: <a class="cred">and</a>, <a class="cred">or</a>, <a class="cred">not</a></li>
					<li>Bitwise: <a class="cred">&</a>, <a class="cred">|</a>, <a class="cred">^</a></li>
				</ul>
				<pre><code data-trim class="python">
>>> x = 5
>>> x < -4 or x > 4
True
>>> if 4 < x < 10: 	# Chained comparisons ( x > 3 and x < 5 )
...	print "Four!"
Four!
>>>
				</code></pre>
			</section>
			
			<section data-background="#F56767" data-background-transition="zoom" data-transition="zoom">
				<h2>String Manipulation</h2>
				<img src="{{ asset('reveal-assets/images/string-python.png') }}" width="400">
			</section>
			
			<section>
				<h2>String Definations</h2>
				<ul class="left-align">
					<li>Either by double ( <a class="cred">"</a> ) or single ( <a class="cred">'</a> ) quotes.</li>
					<li>You can insert single quote ( <a class="cred">'</a> ) within string created by double quotes ( <a class="cred">"</a> ) & vice versa.</li>
					<li>Multiline string need three time single ( <a class="cred">'''</a> ) or double quotes ( <a class="cred">"""</a> ).</li>
				</ul>
				<pre><code data-trim class="python">
>>> name = 'matt'
>>> with_double_quote = "I ain't gonna"
>>> longer = """This string has
... multiple lines
... in it"""
				</code></pre>
			</section>
			
			<section>
				<h2>How to print complex Strings</h2>
				<p>Using String Escaping</p>
				<pre><code data-trim class="python">
>>> print 'He said, "I\'m sorry"'
He said, "I'm sorry"
>>> print '''He said, "I'm sorry"'''
He said, "I'm sorry"
>>> print """He said, "I'm sorry\""""
He said, "I'm sorry"
				</code></pre>
			</section>
			
			<section>
				<h2>String Escaping</h2>
				<table class="shrink">
					<thead>
						<tr>
							<th>Escape Sequence</th>
							<th>Output</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>\\</td>
							<td>Backslash</td>
						<tr>
						<tr>
							<td>\'</td>
							<td>Single Quote</td>
						<tr>
						<tr>
							<td>\"</td>
							<td>Double quote</td>
						<tr>
						<tr>
							<td>\b</td>
							<td>ASCII Backspace</td>
						<tr>
						<tr>
							<td>\n</td>
							<td>Newline</td>
						<tr>
						<tr>
							<td>\t</td>
							<td>Tab</td>
						<tr>
						<tr>
							<td>\u<a class="cblue">12af</a></td>
							<td>Unicode 16 bit</td>
						<tr>
						<tr>
							<td>\U<a class="cblue">12af89bc</a></td>
							<td>Unicode 32 bit</td>
						<tr>
						<tr>
							<td>\o<a class="cblue">84</a></td>
							<td>Octal character</td>
						<tr>
						<tr>
							<td>\x<a class="cblue">FF</a></td>
							<td>Hex character</td>
						<tr>
					</tbody>
				</table>
			</section>
			
			<section>
				<h2>String formatting</h2>
				<p>c-like</p>
				<pre><code data-trim class="python">
>>> "%s %s" %('hello', 'world')
'hello world'
				</code></pre>
				<p>PEP 3101 style</p>
				<pre><code data-trim class="python">
>>> "{0} {1}".format('hello', 'world')
'hello world'
>>> print "Hello" , " " , "World"
Hello   World
				</code></pre>
			</section>
			
			<section>
				<h2>String manipulation</h2>
				<p>Strings can be concatenated (glued together) with the <a class="cred">+</a> operator, and repeated with <a class="cred">*</a></p>
				<pre><code data-trim class="python">
>>> 3 * 'un' + 'ium' 	# 3 times 'un', followed by 'ium'
'unununium'
>>> 'Py' 'thon'
'Python'
				</code></pre>
			</section>
			
			<section>
				<h2>String as a List / Array</h2>
				<pre><code data-trim class="python">
>>> text = ('Put several strings within ' 'to have them.')
>>> text
'Put several strings within to have them.'
>>> text[0] # character in position 0
'P'
>>> text[-1] # last character
'.'
				</code></pre>
			</section>
			
			<section>
				<h2>Conversion to String</h2>
				<p>To convert any Object to String</p>
				<pre><code data-trim class="python">
>>> s = str(12345)
>>> s
'12345'
>>> s = str(45.89)
>>> s
'45.89'
				</code></pre>
			</section>
			
			<section>
				<h2>String Methods</h2>
				<table class="shrink">
					<thead>
						<tr>
							<th>Method</th>
							<th>Description</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th>s.endswith(sub)</th>
							<th>Returns True if ends with sub</th>
						</tr>
						<tr>
							<th>s.find(sub)</th>
							<th>Returns index of sub or -1 (If not found)</th>
						<tr>
						<tr>
							<td>s.format(*args)</td>
							<td>Places arguments in string. Arguments repalce numbers enclosed with curly brackets.</td>
						<tr>
						<tr>
							<td>s.index(sub)</td>
							<td>Returns index of sub or exception</td>
						<tr>
						<tr>
							<td>s.join(list)</td>
							<td>Returns list items separated by string</td>
						<tr>
						<tr>
							<td>s.strip()</td>
							<td>Removes/Trims whitespace from start/end</td>
						<tr>
						<tr>
							<td>s.strip("*")</td>
							<td>Removes/Trims astrericks from start/end</td>
						<tr>
					</tbody>
				</table>
			</section>
			
			<section data-background="#F56767" data-background-transition="zoom" data-transition="zoom">
				<h2>Input and Output of Data</h2>
			</section>
			
			<section>
				<h2>To take input from keyboard</h2>
				<p>In String format</p>
				<pre><code data-trim class="python">
>>> a = raw_input() 	# raw string input
12
>>> a
'12'
				</code></pre>
			</section>
			
			<section>
				<h2>To take input from keyboard</h2>
				<p>In Specific format</p>
				<pre><code data-trim class="python">
>>> num = input() 		# input of correct data type
12
>>> num
12
>>> num = input() 		# input of correct data type
12d
Traceback (most recent call last):
  File "&lt;stdin&gt;", line 1, in &lt;module&gt;
  File "&lt;string&gt;", line 1
    12d
      ^
SyntaxError: unexpected EOF while parsing
				</code></pre>
			</section>
			
			<section>
				<h2>Print</h2>
				<table>
					<tr><th>Code</th><th>Output</th></tr>
					<tbody>
						<tr><td colspan="2" style="font-size:20px;text-align:center;">Normal print with newline</td></tr>
						<tr>
							<td>
								<pre><code data-trim class="python" style="padding-right:10px;">
print "Hello"
print "World"
								</code></pre>
							</td>
							<td>
								<pre><code data-trim class="python" style="padding-right:20px;">
Hello
World
								</code></pre>
							</td>
						</tr>
						<tr><td colspan="2" style="font-size:20px;text-align:center;">Without newline</td></tr>
						<tr>
							<td>
								<pre><code data-trim class="python" style="padding-right:25px;">
print "Hello",
print "World",
								</code></pre>
							</td>
							<td>
								<pre><code data-trim class="python" style="padding-right:25px;">
Hello World
								</code></pre>
							</td>
						</tr>
					</tbody>
				</table>
				
			</section>
			
			
			
			<section data-background="#F56767" data-background-transition="zoom" data-transition="zoom">
				<h2>Help in python</h2>
			</section>
			
			<section>
				<h2>dir() Method</h2>
				<ul class="left-align">
					<li>Without arguments, dir() lists the variables, methods & modules you have loaded currently</li>
				</ul>
				<pre><code data-trim class="python" style="font-size:19px;">
>>> a = 12
>>> str = "Hello"
>>> import sys
>>> dir()
['__builtins__', '__doc__', '__name__', '__package__', 'a', 'str', 'sys']
>>> 
				</code></pre>
			</section>
			
			<section>
				<h2>dir() Method over Object</h2>
				<ul class="left-align">
					<li>Used to list down attributes & methods of Object</li>
					<li>built-in function dir() is used to find out which names/methods a module defines. It returns a sorted list of strings</li>
				</ul>
				<pre><code data-trim class="python">
>>> str = "Hello"
>>> dir(str)
['__add__', '__class__', '__contains__', '__delattr__', '__doc__', '__eq__', '__format__', '__ge__', '__getattribute__', '__getitem__', '__getnewargs__', '__getslice__', '__gt__', '__hash__', '__init__', '__le__', '__len__', '__lt__', '__mod__', '__mul__', '__ne__', '__new__', '__reduce__', '__reduce_ex__', '__repr__', '__rmod__', '__rmul__', '__setattr__', '__sizeof__', '__str__', '__subclasshook__', '_formatter_field_name_split', '_formatter_parser', 'capitalize', 'center', 'count', 'decode', 'encode', 'endswith', 'expandtabs', 'find', 'format', 'index', 'isalnum', 'isalpha', 'isdigit', 'islower', 'isspace', 'istitle', 'isupper', 'join', 'ljust', 'lower', 'lstrip', 'partition', 'replace', 'rfind', 'rindex', 'rjust', 'rpartition', 'rsplit', 'rstrip', 'split', 'splitlines', 'startswith', 'strip', 'swapcase', 'title', 'translate', 'upper', 'zfill']
>>> 
				</code></pre>
			</section>
			
			<section>
				<h2>Dunder methods</h2>
				<ul class="left-align">
					<li>dunder (double underscore) or "special/magic" Methods</li>
					<li>Python way of operator overloading</li>
					<li>Addition <span class="cgreen">+</span> == <span class="cred">__add__</span></li>
					<li>Subtraction <span class="cgreen">-</span> == <span class="cred">__sub__</span></li>
					<li>Division <span class="cgreen">/</span> == <span class="cred">__div__</span></li>
				</ul>
			</section>
			
			<section>
				<h2>help() method</h2>
				<pre><code data-trim class="python">
>>> str = "Hello"
>>> help(str.startswith)

Help on built-in function startswith:

startswith(...)
    S.startswith(prefix[, start[, end]]) -> bool
    
    Return True if S starts with the specified prefix, False otherwise.
    With optional start, test S beginning at that position.
    With optional end, stop comparing S at that position.
    prefix can also be a tuple of strings to try.
				</code></pre>
			</section>
			
			<section>
				<h2>Closing help / documentation</h2>
				<ul class="left-align">
					<li>Shows full screen documentation</li>
					<li>Use page-up / page-down to scroll</li>
					<li>Press <span class="cred">q</span> to quit</li>
					<li>Press <span class="cred">h</span> for help</li>
				</ul>
			</section>
			
			<section data-background="#F56767" data-background-transition="zoom" data-transition="zoom">
				<h2>Practice Sessions Basics</h2>
			</section>
			
			<section>
				<h2>Practice Problem 1</h2>
				<ul class="left-align">
					<li>Take two numbers from command prompt.</li>
					<li>Do addition.</li>
					<li>Show result like below:</li>
				</ul>
				<pre><code data-trim>
The sum of 120 and 30 is 150
				</code></pre>
			</section>
			
			<section>
				<h2>Solution to Problem 1</h2>
				<pre><code data-trim class="python">
# This program adds two numbers provided by user

# Store input numbers
num1 = input('Enter number 1: ')
num2 = input('Enter number 2: ')

# Add two numbers
sum = int(num1) + int(num2)

# Display the sum
print('The sum of {0} and {1} is {2}'.format(num1, num2, sum))
				</code></pre>
			</section>
			
			<section>
				<h2>Practice Problem 2</h2>
				<h5>Calculate area of a triangle</h5>
				<ul class="left-align">
					<li>Take length of three sides from user</li>
					<li>calculate the area</li>
					<li>Show result like below:</li>
				</ul>
				<pre><code data-trim>
The area of your triangle is 20.90
				</code></pre>
			</section>
			
			<section>
				<h2>Solution to Problem 2</h2>
				<img src="{{ asset('reveal-assets/images/problem-triangle-area.jpg') }}" alt="Area of triangle in Python">
			</section>
			
			<section>
				<h2>Solution to Problem 2</h2>
				<pre><code data-trim class="python">
# Program to find area of triangle

a = float(input('First side: '))
b = float(input('Second side: '))
c = float(input('Third side: '))

# calculate the semi-perimeter
peri = (a + b + c) / 2

# calculate the area
area = (peri * (peri-a) * (peri-b) * (peri-c)) ** 0.5
print('The area of the triangle is %0.2f' %area)
				</code></pre>
			</section>
			
			<section data-background="#F56767" data-background-transition="zoom" data-transition="zoom">
				<h2>Data Structures</h2>
			</section>
			
			<section>
				<h2>Sequences</h2>
				<ul class="left-align">
					<li>lists</li>
					<li>dictionaries</li>
					<li>tuples</li>
					<li>sets</li>
				</ul>
			</section>
			
			<section>
				<h2>1. Lists</h2>
				<ul class="left-align">
					<li>Hold ordered sequence</li>
					<li>Use <span class="cred">dir([])</span> to find out the attributes & methods of a list</li>
					<li>Find method documentation by <span class="cred">help([].append)</span></li>
				</ul>
				<pre><code data-trim class="python">
>>> a = []
>>> a.append(4)
>>> a.append('hello')
>>> a.append(1)
>>> print a
[4, 'hello', 1]
>>> a.sort() 	# Alphabetical Array Sorting
>>> print a
[1, 4, 'hello']
				</code></pre>
			</section>
			
			<section>
				<h2>List Methods</h2>
				<table class="shrink noborder">
					<thead>
						<tr>
							<th>Syntax</th>
							<th>Operation</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>l.<span class="cred">append</span>(x)</td>
							<td>Insert x at end of list</td>
						</tr>
						<tr>
							<td>l.<span class="cred">insert</span>(i, x)</td>
							<td>Insert an item at a given position/index</td>
						</tr>
						<tr>
							<td>l.<span class="cred">extend</span>(list2)</td>
							<td>Add list2 items to list</td>
						</tr>
						<tr>
							<td>l.<span class="cred">sort</span>()</td>
							<td>In place sort (Alphabetical)</td>
						</tr>
						<tr>
							<td>l.<span class="cred">sort</span>(cmp=None, key=None, reverse=False)</td>
							<td>Sort the items of the list in place</td>
						</tr>
						<tr>
							<td>l.<span class="cred">reverse</span>()</td>
							<td>Reverse list in place</td>
						</tr>
						<tr>
							<td>l.<span class="cred">remove</span>(item)</td>
							<td>Remove first item value found</td>
						</tr>
						<tr>
							<td>l.<span class="cred">pop</span>()</td>
							<td>Remove & return item at end of list</td>
						</tr>
						
						<tr>
							<td>l.<span class="cred">index</span>(x)</td>
							<td>Return the index of first occurance of x value</td>
						</tr>
						<tr>
							<td>l.<span class="cred">count</span>(x)</td>
							<td>number of times x appears in the list</td>
						</tr>
						
					</tbody>
				</table>
			</section>
			
			<section>
				<h2>Using Lists as Stacks</h2>
				<pre><code data-trim class="python">
>>> stack = [3, 4, 5]
>>> stack.append(6)
>>> stack.append(7)
>>> stack
[3, 4, 5, 6, 7]
>>> stack.pop()
7
>>> stack
[3, 4, 5, 6]
>>> stack.pop()
6
>>> stack.pop()
5
>>> stack
[3, 4]
				</code></pre>
			</section>
			
			<section>
				<h2>Nested Lists</h2>
				<pre><code data-trim class="python">
>>> matrix = [
...     [1, 2, 3, 4],
...     [5, 6, 7, 8],
...     [9, 10, 11, 12]]
>>> matrix
[[1, 2, 3, 4], [5, 6, 7, 8], [9, 10, 11, 12]]
				</code></pre>
			</section>
			
			<section>
				<h2>range method</h2>
				<ul class="left-align">
					<li>To create number list immediately</li>
					<li>(start, end) parameters</li>
					<li>length = end – start</li>
				</ul>
				<pre><code data-trim class="python">
>>> range(0, 10)
[0, 1, 2, 3, 4, 5, 6, 7, 8, 9]
>>> range(10)
[0, 1, 2, 3, 4, 5, 6, 7, 8, 9]
>>> a = [1, 5]
>>> range(*a) 	# Unpacking Argument List
[1, 2, 3, 4]
				</code></pre>
			</section>
			
			<section>
				<h2>Array Negative Indexing </h2>
				<ul class="left-align">
					<li>reinterpret <span class="cred">a[ -x ]</span> as <span class="cgreen">a[ len( a ) - x ]</span></li>
				</ul>
				<pre><code data-trim class="python">
>>> colors = ["red", "blue", "purple", "maroon"]
>>> colors[0]
'red'
>>> colors[-1] 	# Negative Indexing
'maroon'
>>> colors[-4]
'red'
>>> colors[-5] 	# Won't work beyond this
Traceback (most recent call last):
  File "&lt;stdin&gt;", line 1, in &lt;module&gt;
IndexError: list index out of range
				</code></pre>
			</section>
			
			<section>
				<h2>Array Slicing</h2>
				<ul class="left-align">
					<li>arr[ start : end ]</li>
				</ul>
				<pre><code data-trim class="python">
>>> colors = ["red", "blue", "purple", "maroon"]
>>> colors[0:1]
['red']
>>> colors[0:3]
['red', 'blue', 'purple']
>>> colors[:2]
['red', 'blue']
>>> colors[2:]
['purple', 'maroon']
				</code></pre>
			</section>
			
			<section>
				<h2>Array Stride</h2>
				<ul class="left-align">
					<li>arr[ start : end : step ]</li>
				</ul>
				<pre><code data-trim class="python">
>>> range(0,10)[0:5:2]
[0, 2, 4]
>>> range(0,10)[2:5:2]
[2, 4]
>>> range(0,10)[:5:2]
[0, 2, 4]
>>> range(0,10)[::3]
[0, 3, 6, 9]
				</code></pre>
			</section>
			
			<section>
				<h2>Array Slicing 2</h2>
				<pre><code data-trim class="python">
>>> a = "Tiger"
>>> a[:-1]
'Tige'
>>> a[::2]
'Tgr'
>>> a[::-1]
'regiT'
				</code></pre>
			</section>
			
			<section>
				<h2>in keyword</h2>
				<ul class="left-align">
					<li>Checks if value present in sequence</li>
					<li>Works on all data structures</li>
				</ul>
				<pre><code data-trim class="python">
>>> a = [10, 20, 30]
>>> 10 in a
True
>>> 25 in a
False
				</code></pre>
			</section>
			
			<section>
				<h2>2. Dictionaries</h2>
				<ul class="left-align">
					<li>Also called hashmap or associative array elsewhere</li>
				</ul>
				<pre><code data-trim class="python">
>>> age = {}
>>> age['george'] = 10
>>> age['fred'] = 12
>>> age['henry'] = 10
>>> print age['george']
10
>>> age
{'henry': 10, 'george': 10, 'fred': 12}
>>>
>>> 'henry' in age 	# in == __contains__ (dunder method)
True
				</code></pre>
			</section>
			
			<section>
				<h2>.get Method</h2>
				<pre><code data-trim class="python">
>>> print age['ford']
Traceback (most recent call last):
  File "&lt;stdin&gt;", line 1, in &lt;module&gt;
KeyError: 'ford'
>>> print age.get('ford', '0')
0
				</code></pre>
			</section>
			
			<section>
				<h2>Delete Dictionary Key</h2>
				<pre><code data-trim class="python">
>>> del age['fred'] 	# removing fred from age
>>> age
{'henry': 10, 'george': 10}
>>> age.pop('henry')	# removing henry from age
10
>>> age
{'george': 10}
>>> 
				</code></pre>
				<p>Note: del() methods is not in dir(age). Its external method</p>
			</section>
			
			<section>
				<h2>3. Tuples</h2>
				<p style="font-size:25px;">Unordered, Immutable, Nestable</p>
				<pre><code data-trim class="python">
>>> t = 12345, 54321, 'hello!'
>>> t[0]
12345
>>> t
(12345, 54321, 'hello!')
>>> u = t, (1, 2, 3, 4, 5)      # Tuples may be nested
>>> u
((12345, 54321, 'hello!'), (1, 2, 3, 4, 5))
>>> t[0] = 88888 		# Tuples are immutable
Traceback (most recent call last):
  File "&lt;stdin&gt;", line 1, in &lt;module&gt;
TypeError: 'tuple' object does not support item assignment
>>> v = ([1, 2, 3], [3, 2, 1]) 	# can contain mutable objects
>>> v
([1, 2, 3], [3, 2, 1])
				</code></pre>
			</section>
			
			<section>
				<h2>Tuples</h2>
				<pre><code data-trim class="python">
>>> empty = () 			# Empty tuple with length 0
>>> singleton = 'hello', 	# Note trailing comma
>>> len(singleton) 		# Length check
1
>>> singleton
('hello',)
>>> singleton = singleton + ('Aditya',) # append to tuple
>>> singleton
('hello', 'Aditya')
>>> singleton = singleton + ('Mahesh') 	# append to tuple failed !
Traceback (most recent call last):
  File "&lt;stdin&gt;", line 1, in &lt;module&gt;
TypeError: can only concatenate tuple (not "str") to tuple
				</code></pre>
			</section>
			
			<section>
				<h2>4. Set</h2>
				<ul class="left-align">
					<li>Set is an <span class="cred">unordered</span> collection with <span class="cred">unique</span> elements</li>
					<li>Supports mathematical operations like union, intersection, difference, and symmetric difference</li>
				</ul>
				<pre><code data-trim class="python">
>>> basket = ['apple', 'orange', 'apple', 'pear', 'orange', 'banana']
>>> fruit = set(basket) 	# create a set without duplicates
>>> fruit
set(['orange', 'pear', 'apple', 'banana'])
>>> 'orange' in fruit
True
				</code></pre>
			</section>
			
			<section>
				<h2>Set Operations</h2>
				<pre><code data-trim class="python">
>>> a = set('abracadabra')
>>> b = set('alacazam')
>>> a 		# unique letters in a
set(['a', 'r', 'b', 'c', 'd'])
>>> a - b 		# letters in a but not in b. relative complement
set(['r', 'b', 'd'])
>>> a | b 		# letters in either a or b. union
set(['a', 'c', 'b', 'd', 'm', 'l', 'r', 'z'])
>>> a & b 		# letters in both a and b intersection
set(['a', 'c'])
>>> a ^ b 		# letters in a or b but not both (union- intersection)
set(['b', 'd', 'm', 'l', 'r', 'z'])
				</code></pre>
			</section>
			
			
			<section>
				<h3>In Short</h3>
				<table class="shrink" style="font-size:19px;margin:0px -50px;">
					<thead>
						<tr>
							<th>Type</th>
							<th>Defination</th>
							<th>Append</th>
							<th>Access</th>
							<th>Deletion</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>List</td>
							<td class="code">
								list = []<br>
								list = [1, 2, 3]
							</td>
							<td class="code">
								list.append(123)<br>
								list.insert(0, 456)<br>
								list.extend([789])
							</td>
							<td class="code">
								list[0]
							</td>
							<td class="code">
								list.pop()<br>
								list.remove(789)<br>
								del list[0]
							</td>
						</tr>
						<tr>
							<td>Dictionary</td>
							<td class="code">
								d = {}<br>
								d = {'a':10,'b':20}
							</td>
							<td class="code">
								d['elem'] = 123
							</td>
							<td class="code">
								d['elem']<br>
								d.get('elem',0)
							</td>
							<td class="code">
								d.pop('elem')<br>
								d.popitem()<br>
								del d['elem']
							</td>
						</tr>
						<tr>
							<td>Tuple</td>
							<td class="code">
								t = ()<br>
								t = (1, 2, 3)<br>
								s = (1,)<br>
								s = 'hello',
							</td>
							<td class="code">
								t = t + (123,)
							</td>
							<td class="code">
								t[0]
							</td>
							<td class="code">
								Cannot be done
							</td>
						</tr>
						<tr>
							<td>Set</td>
							<td class="code">
								s = set(['a', 'b'])<br>
								s = set('abcd')<br>
							</td>
							<td class="code">
								s.add('elem')
							</td>
							<td class="code">
								next(iter(s))<br>
								s.pop()
							</td>
							<td class="code">
								s.remove(x)<br>
								s.discard(x)<br>
								s.pop()<br>
								s.clear()
							</td>
						</tr>
					</tbody>
				</table>
			</section>
			
			<section>
				<h2>Comparing Sequences</h2>
				<table class="shrink noborder centeredtd">
					<tbody>
						<tr>
							<td class="code">(1, 2, 3)</td>
							<td> < </td>
							<td class="code">(1, 2, 4)</td>
						</tr>
						<tr>
							<td class="code">[1, 2, 3]</td>
							<td> < </td>
							<td class="code">[1, 2, 4]</td>
						</tr>
						<tr>
							<td class="code" colspan="3">
								'ABC' <span class="cwhite"><</span> 'C' <span class="cwhite"><</span> 'Pascal' <span class="cwhite"><</span> 'Python'
							</td>
						</tr>
						<tr>
							<td class="code">(1, 2, 3, 4)</td>
							<td> < </td>
							<td class="code">(1, 2, 4)</td>
						</tr>
						<tr>
							<td class="code">(1, 2)</td>
							<td> < </td>
							<td class="code">(1, 2, -1)</td>
						</tr>
						<tr>
							<td class="code">(1, 2, 3)</td>
							<td> == </td>
							<td class="code">(1.0, 2.0, 3.0)</td>
						</tr>
						<tr>
							<td class="code">(1, 2, ('aa', 'ab'))</td>
							<td> < </td>
							<td class="code">(1, 2, ('abc', 'a'), 4)</td>
						</tr>
						
					</tbody>
				</table>
			</section>
			
			
			
			
			
			
			
			<section data-background="#F56767" data-background-transition="zoom" data-transition="zoom">
				<h2>Iterations / Loops / Traversing</h2>
			</section>
			
			<section>
				<h2>Simple Iteration</h2>
				<table style="width:100%;">
					<tr>
						<td>
							<pre><code data-trim class="python">
arr = [1,2,3,4,5]
for i in arr:
    print i
							</code></pre>
							<center>is same as</center>
							<pre><code data-trim class="python">
for i in [1,2,3,4,5]:
    print i
							</code></pre>
							<center>is same as</center>
							<pre><code data-trim class="python">
for i in range(1, 6):
    print i
							</code></pre>
						</td>
						<td>
							Output:<br>
							<pre><code data-trim class="python">
1
2
3
4
5
							</code></pre>
						</td>
					</tr>
				</table>
			</section>
			
			<section>
				<h2>Iteration without index</h2>
				<pre><code data-trim class="python">
>>> arr = ["str1", "str2", "str3"]
>>> for i in arr:
...     print i
... 
str1
str2
str3
>>> 
				</code></pre>
			</section>
			
			<section>
				<h2>Iteration with index</h2>
				<pre><code data-trim class="python">
>>> arr = ["str1", "str2", "str3"]
>>> for i in range(len(arr)):
...     print i, arr[i]
... 
0 str1
1 str2
2 str3
>>> 
				</code></pre>
			</section>
			
			<section>
				<h2>Iteration using enumerate</h2>
				<pre><code data-trim class="python">
>>> for index, value in enumerate(arr):
...     print index, value
... 
0 str1
1 str2
2 str3
>>> 
				</code></pre>
			</section>
			
			<section>
				<h2>Using Zip Method</h2>
				<pre><code data-trim class="python">
>>> arr1 = ['a', 'b', 'c']
>>> arr2 = [20, 45, 78]
>>> for i, v in zip(arr1, arr2):
...     print "Value of {0} is {1}.".format(i, v)
... 
Value of a is 20.
Value of b is 45.
Value of c is 78.
>>> 
				</code></pre>
			</section>
			
			<section>
				<h2>Reverse Iteration</h2>
				<pre><code data-trim class="python">
>>> for i in reversed(range(1,10,2)):
...     print i
... 
9
7
5
3
1
>>>
				</code></pre>
			</section>
			
			<section>
				<h2>Iteration of sorted set</h2>
				<pre><code data-trim class="python">
>>> basket = ['apple', 'orange', 'apple', 'pear']
>>> for f in sorted(set(basket)):
...     print f
... 
apple
orange
pear
>>> 
				</code></pre>
			</section>
			
			<section>
				<h2>Iterating dictionary 1</h2>
				<pre><code data-trim class="python">
>>> knights = {'gallahad':'the pure','robin':'the brave'}
>>> for k, v in knights.iteritems():
...     print k, v
... 
gallahad the pure
robin the brave
				</code></pre>
			</section>
			
			<section>
				<h2>Iterating dictionary 2</h2>
				<pre><code data-trim class="python">
d1 = { "john": 66, "mike": 81, "rock": 77}
print "-----Key list-----"
for key in d1.keys():
	print key

print "-----Value list-----"
for value in d1.values():
	print value

print "-----Key Value pairs-----"
for key, value in d1.items():
	print "[",key," : ",value,"]"

				</code></pre>
			</section>
			
			<section>
				<h2>A Fibonacci Series</h2>
				Using while
				<pre><code data-trim class="python">
>>> a, b = 0, 1
>>> while b < 10:
...     print b,
...     a,b=b,a+b
... 
1 1 2 3 5 8
				</code></pre>
			</section>
			
			<section>
				<h2>continue</h2>
				<pre><code data-trim class="python">
list1 = [12, 50, 34, 78, 33, 99]
for item in list1:
	if item < 50:
		continue
	print item
				</code></pre>
				Output:
				<pre><code data-trim class="python">
50
78
99
				</code></pre>
			</section>
			
			<section>
				<h2>break</h2>
				<pre><code data-trim class="python">
list1 = [12, 34, 78, 99]
for item in list1:
	print item
	if item > 70:
		break
				</code></pre>
				Output:
				<pre><code data-trim class="python">
12
34
78
				</code></pre>
			</section>
			
			<section>
				<h2>Finding Even & Odd numbers</h2>
				Using continue
				<pre><code data-trim class="python">
for num in range(2, 10):
	if num % 2 == 0:
		print num, "Even"
		continue
	print num, "Odd"
				</code></pre>
				Output:
				<pre><code data-trim class="python">
2 Even
3 Odd
4 Even
5 Odd
6 Even
7 Odd
8 Even
9 Odd
				</code></pre>
			</section>
			
			<section>
				<h2>Finding Prime numbers</h2>
				<p style="font-size:20px;">A prime or prime number is a natural number that has exactly two distinct natural number divisors: 1 and itself</p>
				<pre><code data-trim class="python">
for n in range(2, 10): 		# total range of numbers
	isDiv = False
	for x in range(2, n): 	# get numbers less than n
		if n % x == 0: 	# check modulo
			print n, '=', x, '*', n/x
			isDiv = True
			break
	# Check whether isDiv is True or False
	if not isDiv:
		print n, 'Prime number'
				</code></pre>
				<p style="font-size:18px;">Output:</p>
				
				<pre><code data-trim class="python" style="font-size:18px;">
2 Prime number
3 Prime number
4 = 2 * 2
5 Prime number
6 = 2 * 3
7 Prime number
8 = 2 * 4
9 = 3 * 3
				</code></pre>
			</section>
			
			<section>
				<h2>pass keyword</h2>
				<ul class="left-align">
					<li>Pass is null operation</li>
					<li>Used as placeholder for syntactical needs</li>
				</ul>
				<pre><code data-trim class="python">
for i in range(10):
	pass

def fun(arg):
	pass

class c:
	pass
				</code></pre>
			</section>
			
			<section>
				<h2>A suggestion</h2>
				<ul class="left-align">
					<li>Do not modify list or dictionary contents while looping them.</li>
			</section>
			
			<section>
				<h2>Practice Problem</h2>
				<h5>Program to Display the multiplication Table</h5>
				<ul class="left-align">
					<li>Ask which multiplication table of : </li>
					<li>Print Multiplication table.</li>
				</ul>
			</section>
			
			<section>
				<h2>Solution to Problem</h2>
				<pre><code data-trim class="python">
# take input from user
num = int(input("Display multiplication table of : "))

# iterate 10 times
for i in range(1,11):
   print num, 'x' , i, '=', num * i
				</code></pre>
			</section>
			
			
			
			
			
			
			<section data-background="#F56767" data-background-transition="zoom" data-transition="zoom">
				<h2>Methods / Functions</h2>
			</section>
			
			<section>
				<h2>Method</h2>
				<ul class="left-align">
					<li>Keyword <span class="cred">def</span> is used</li>
					<li>Documnetation is on first line of method block</li>
					<li>No return type required</li>
				</ul>
				<pre><code data-trim class="python">
def add_2(num):
	"""return num by adding
	2 into it"""	# Function Documentation
	return num + 2

b = add_2(3)

print b
				</code></pre>
				Output = 5
			</section>
			
			<section>
				<h2>Method</h2>
				<ul class="left-align">
					<li>def</li>
					<li>function name</li>
					<li>(parameters)</li>
					<li>:</li>
					<li>indent</li>
					<li>optional documentation</li>
					<li>body</li>
					<li>return</li>
				</ul>
			</section>
			
			<section>
				<h2>Default parameter values</h2>
				<ul class="left-align">
					<li>In case if we dont have any value to pass</li>
					<li>Also called Named parameter</li>
				</ul>
				<pre><code data-trim class="python">
def add_n(num, n = 3):
	￼return num + n
five = add_n(2)
ten  = add_n(15, -5)
				</code></pre>
			</section>
			
			<section>
				<h2>Default parameters can be mutable</h2>
				<ul class="left-align">
					<li>When the default parameter is a mutable object such as list, dictionary, or instances of most classes</li>
				</ul>
				<pre><code data-trim class="python">
def f(a, L=[]):
	L.append(a)
	return L
print f(1)
print f(2)
print f(3)
------------------------
[1]
[1, 2]
[1, 2, 3]
				</code></pre>
			</section>
			
			<section>
				<h2>To change to default behavior</h2>
				<ul class="left-align">
					<li>If you don’t want the default to be shared between subsequent calls</li>
				</ul>
				<pre><code data-trim class="python">
def f(a, L=None):
	if L is None:
		L = []
	L.append(a)
	return L
print f(1)
print f(2)
print f(3)
------------------------
[1]
[2]
[3]
				</code></pre>
			</section>
			
			<section>
				<h2>__doc__</h2>
				<ul class="left-align">
					<li>Functions have docstrings. Accessible via .__doc__ or help</li>
				</ul>
				<pre><code data-trim class="python">
>>> def echo(txt):
...     "echo back txt" # Function/Method Documentation
...     return txt
... 
>>> help(echo)

Help on function echo in module __main__:

echo(txt)
    echo back txt

(END)
				</code></pre>
			</section>
			
			<section>
				<h2>Method Naming</h2>
				<ul class="left-align">
					<li>lowercase</li>
					<li>underscore_between_words</li>
					<li>don't start with numbers</li>
					<li>verb</li>
					<li>See PEP 8 for more info</li>
				</ul>
			</section>
			
			<section>
				<h2>Function Properties</h2>
				<ul class="left-align">
					<li>Function refers to another function variable</li>
				</ul>
				<pre><code data-trim class="python">
>>> def addition(a, b=0):
...     "This method adds two numbers"
...     return a+b
... 
>>> addition(10,20)
30
>>> addition(10)
10
>>> addition
&lt;function addition at 0x10aa55c80&gt;
>>> add = addition # Function refers to another function variable
>>> add(10, 30)
40
>>> 
				</code></pre>
			</section>
			
			<section>
				<h2>Global Variable</h2>
				<ul class="left-align">
					<li>Need to define <a class="cred">global</a> in order to use inside functions.</li>
				</ul>
				<pre><code data-trim class="python">
# declare global variable
n = 0
def setup():
    global n
    n = 100
				</code></pre>
			</section>
			
			<section data-background="#F56767" data-background-transition="zoom" data-transition="zoom">
				<h2>Classes / OOPS</h2>
			</section>
			
			<section>
				<h2>Classes</h2>
				<pre><code data-trim class="python">
class Student(object):
    def __init__(self, name):
        self.name = name
    def study(self):
        print self.name,"studying..."

stud = Student("Mark Watson")
stud.study()
				</code></pre>
			</section>
			
			<section>
				<h2>Classes</h2>
				<ul class="left-align">
					<li><a class="cred">object</a> (as base class)</li>
					<li>dunder <a class="cred">__init__</a> (constructor)</li>
					<li>all methods take <a class="cred">self</a> as first parameter</li>
				</ul>
			</section>
			
			<section>
				<h2>self</h2>
				<ul class="left-align">
					<li>Always represent current object</li>
				</ul>
			</section>
			
			<section>
				<h2>Subclass</h2>
				<pre><code data-trim class="python">
class Student(object):
    def __init__(self, name):
        self.name = name
    def study(self):
        print self.name,"studying..."

class Geek(Student):
    "classes can have documentation"
    def study(self):
        print "%s Programming..." % self.name

g = Geek("Mark Watson")
g.study()
				</code></pre>
			</section>
			
			<section>
				<h2>Class Naming</h2>
				<ul class="left-align">
					<li>Cannot start with numbers</li>
					<li>Nouns</li>
					<li><a class="cred">CamelCase</a> – first the letter in a word within name should be written in capitals</li>
				</ul>
			</section>
			
			<section data-background="#F56767" data-background-transition="zoom" data-transition="zoom">
				<h2>Modules / Libraries</h2>
			</section>
			
			<section>
				<h2>Modules</h2>
				<ul class="left-align">
					<li>Put definitions in a file and use them in a script or in an the interpreter. Such a file is called a <a class="cred">module</a></li>
					<li>A module is a file containing Python definitions and statements.</li>
					<li>Extension is <a class="cred">.py</a> only</li>
				</ul>
			</section>
			
			<section>
				<h2>Craeting Module: fibo.py</h2>
				<pre><code data-trim class="python">
# Fibonacci numbers module

def fib(n):    # write Fibonacci series up to n
    a, b = 0, 1
    while b < n:
        print b,
        a, b = b, a+b

def fib2(n): # return Fibonacci series up to n
    result = []
    a, b = 0, 1
    while b < n:
        result.append(b)
        a, b = b, a+b
    return result
				</code></pre>
			</section>
			
			<section>
				<h2>Using Module</h2>
				<pre><code data-trim class="python">
>>> import fibo
>>> fibo.fib(1000)
1 1 2 3 5 8 13 21 34 55 89 144 233 377 610 987
>>> fibo.fib2(100)
[1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89]
>>> fibo.__name__
'fibo'
>>> fib = fibo.fib
>>> fib(500)
1 1 2 3 5 8 13 21 34 55 89 144 233 377
				</code></pre>
			</section>
			
			<section>
				<h2>Using Module 2</h2>
				<pre><code data-trim class="python">
>>> from fibo import fib, fib2
>>> fib(500)
1 1 2 3 5 8 13 21 34 55 89 144 233 377

>>> from fibo import *
>>> fib(500)
1 1 2 3 5 8 13 21 34 55 89 144 233 377

>>> import fibo as f
>>> f.fib(500)
1 1 2 3 5 8 13 21 34 55 89 144 233 377

				</code></pre>
			</section>
			
			<section>
				<h2>Executing module as script</h2>
				<pre><code data-trim class="python">
# Add this code in fibo.py

if __name__ == "__main__":
    import sys
    fib(int(sys.argv[1])) # Accessing arguments via system library
--------------------------------------------------------------------
$ python fibo.py &lt;arguments&gt;

$ python fibo.py 50
1 1 2 3 5 8 13 21 34

				</code></pre>
			</section>
			
			<section>
				<h2>Time Module</h2>
				<ul class="left-align">
					<li>Sleep function pauses the execution for given number of seconds</li>
				</ul>
				<pre><code data-trim class="python">
from time import sleep

while True:
	print "Hi"
	sleep(1)
				</code></pre>
			</section>
			
			<section data-background="#F56767" data-background-transition="zoom" data-transition="zoom">
				<h2>File I/O</h2>
			</section>
			
			<section>
				<h2>File Reading</h2>
				<ul class="left-align">
					<li>Open a file to read from it.</li>
				</ul>
				<pre><code data-trim class="python">
fin = open("sample.txt")
for line in fin:
    print line
fin.close()
				</code></pre>
			</section>
			
			<section>
				<h2>File Writing</h2>
				<ul class="left-align">
					<li>Open a file using 'w' to write to a file:</li>
				</ul>
				<pre><code data-trim class="python">
fout = open("sample2.txt", "w")
fout.write("hello world")
fout.flush()
fout.close()
				</code></pre>
			</section>
			
			<section>
				<h2>A suggestion</h2>
				<ul class="left-align">
					<li>Don’t forget to close file after use.</li>
			</section>
			
			<section>
				<h2>Closing files using with</h2>
				<ul class="left-align">
					<li>Also called as implicit close (Only ver. 2.5+)</li>
				</ul>
				<pre><code data-trim class="python">
>>> with open('sample2.txt') as fin:
...     for line in fin:
...             print line
... 
hello world
>>>
				</code></pre>
			</section>
			
			<section>
				<h2>Practice Problem</h2>
				<p>Student Management Program</p>
				<pre class="fullw"><code data-trim>
Menu for system:
1. Display List of students
2. Add Student
3. Delete Student
4. Exit
Choise: [Take input from user]

Take following information from students:
1. roll_num
2. name
3. class_name
				</code></pre>
				
			</section>
			
			<section>
				<h2>References</h2>
				<ul>
					<li><a target="_blank" href="https://www.python.org">python.org</a></li>
					<li><a target="_blank" href="https://dwij.co.in">dwij.co.in</a></li>
				</ul>
			</section>

			<section style="text-align: left;">
				<h1>Thank you</h1>
				<p>
					- <a target="_blank" href="https://ganeshbhosale.com">Ganesh Bhosale</a> <br>
					- <a target="_blank" href="http://dwijitsolutions.com">Dwij IT Solutions</a>
				</p>
				<p>Did you liked this tutorial ?</p>
				<p>
					<div class="fb-like" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
				</p>
				<p>Checkout more such tutorials on: <a href="http://dwij.net/tuts">http://dwij.net/tuts</a></p>
				<!--<div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>-->
			</section>