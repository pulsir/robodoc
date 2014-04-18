<h3>Understanding how Robodoc works</h3>
<p>Robodoc uses folders and files to store data. All data is stored in the <code class="inline">storage/</code> subfolder, and each subfolder there is a <b>category</b>. A category can be accessed via <code class="inline">index.php?file=CATEGORY_NAME_HERE</code>, and it lists all articles in that category.</p>
<p>An article is a <code class="inline">.php</code> file stored in the category subfolder. You can use any sort of HTML, JavaScript, CSS or PHP code there. All PHP files in the subfolder are regarded as articles, althought we may implement exclusion features in a future version.</p>
<p>If you need to store something and don't want it to show up as an article, just avoid using <code class="inline">php</code> in the file name or extension.</p>
<p>Every category also needs a <code class="inline">metadata.robodoc</code> file, containing various information about it. It follows a pretty simple syntax: <code class="inline">property: value;</code>. <br>Every metadata file <b>must</b> contain two properties: <code class="inline">title</code> and <code class="inline">status</code>. Otherwise, it may not work or produce errors.</p>
<p>This category's <code class="inline">metadata.robodoc</code> file looks like this: 
<code>
title: Using Robodoc;
status: public;
generator: Robodoc;
version: 0.1;
</code>
</p>
