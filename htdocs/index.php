<?php include "includes/head.php"; ?>

<h2>About Arden2ByteCode</h2>

<p>The
<a href="http://en.wikipedia.org/wiki/Arden_syntax">Arden Syntax</a> as a
standardized language to represent medical knowledge
can be used to express medical knowledge.<br>
Arden2ByteCode is a newly developed open source compiler
for the Arden Syntax.
Arden2ByteCode runs on Java Virtual Machines (JVM) and
translates Arden Syntax directly to Java bytecode (JBC)
executable on JVMs. 
It also serves as runtime environment for execution of the compiled bytecode.</p>

<p>Arden2ByteCode was initially developed at the
<a href="http://www.tu-braunschweig.de/">Technische Universit&auml;t Braunschweig</a>
in collaboration between the 
<a href="http://www.plri.de/index.php?id=Arden2ByteCode">Peter L. Reichertz Institute for Medical Informatics</a>
and the 
<a href="http://www.ips.cs.tu-bs.de/">Institute for Programming and Reactive Systems</a>.
</p> 
<p>Most programming work was done in 2010 by <a href="https://github.com/dgrunwald">Daniel Grunwald</a>.</p>

<h2>Arden2ByteCode Paper</h2>

<p>To cite Arden2ByteCode in publications, use:</p>
<p>
Gietzelt M, Goltz U, Grunwald D, Lochau M, Marschollek M, Song B, Wolf KH.<br>
<strong>Arden2ByteCode: A one-pass Arden Syntax compiler 
for service-oriented decision support systems based on the 
OSGi platform.</strong><br>
Comput Methods Programs Biomed. 2011 Dec 27. [Epub ahead of print]<br>
PMID: 22206864 
DOI: <a href="http://dx.doi.org/10.1016/j.cmpb.2011.11.003">10.1016/j.cmpb.2011.11.003</a></p>

<p>A BibTeX file is available <a href="/downloads/arden2bytecode.bib">here</a>.</p>

<h2>Getting Started</h2>

<p>If you want to get started quickly, 
<a href="<?php echo $GIT_REPO_PREFIX; ?>/arden2bytecode/archives/master">download</a>
a binary package for your platform and read the wiki page
<a href="http://arden2bytecode.sourceforge.net/docs/getting-started-with-arden2bytecode"
>Getting started with arden2bytecode</a></p>

<p>Do you have problems to get started or ideas how to improve Arden2ByteCode?
Then, <a href="/contact">please contact us!</a><br>
You might wish to submit your issues, ideas or proposals via the
<a href="<?php echo $GIT_REPO_PREFIX; ?>/arden2bytecode/issues/new">Arden2ByteCode issue tracker</a>.</p>

<?php include "includes/foot.php"; ?>
