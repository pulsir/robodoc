<h3>Metadata properties and values</h3>
<p>This article talks about the <code class="inline">metadata.robodoc</code> file and the properties (and the property values) you can use there.</p>
<p><b>title</b> stores the category title and is a mandatory property. For instance, if your category is titled <i>Using Robodoc</i>, you'd use this: <code class="inline">title: Using Robodoc;</code>. <br>
<b>status</b> stores the category status and is a mandatory property. If you want your category to be public and accessible, you should use: <code class="inline">status: public;</code>. If the property value isn't <code class="inline">public</code>, but something else (like 'draft' or 'hidden' or something), it won't be accessible via Robodoc.<br>
<b>generator</b> stores the content generator, which doesn't really matter. It allows you to track which version of Robodoc it was created for.<br>
<b>version</b> stores the Robodoc version used, which, again, doesn't really matter, but can be useful for tracking Robodoc version internally.<br>
<b>exclude</b> <i>will allow you</i> to exclude a file, and it can be used multiple times per file without overriding. To exclude a filer, you will be able to use <code class="inline">exclude: script.php</code>, and for multiple files:
<code>
exclude: script1.php;
exclude: script2.php;
exclude: script3.php;
</code>
</p>
<p>Those are pretty much all the property values in Robodoc. Feel free to let us know about any ideas you may have.</p>
