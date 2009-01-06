<p>Code size measurements are misleading for Smalltalk because source files are usually only used to archive or transfer code. Smalltalk code is created, stored and run in a Smalltalk <em>image</em>. We show Smalltalk source code in a verbose <em>chunk file</em> format used to archive or transfer source code between Smalltalk <em>images</em>.</p>
<p><a href="http://users.ipa.net/~dwighth/smalltalk/byte_aug81/design_principles_behind_smalltalk.html">"Design Principles Behind Smalltalk" by Daniel Ingalls</a></p>
<?=$Version;?>
<p>Home Page: <a href="http://smalltalk.cincom.com/prodinformation/index.ssp?content=vwfactsheet">Cincom Smalltalk&#8482; VisualWorksl&#174; Environment Data Sheet</a></p>
<p>Download: <a href="http://www.cincomsmalltalk.com/userblogs/cincom/blogView?content=smalltalk">VisualWorksl&#174; Non-Commercial</a></p>
<p></br>We've made the Smalltalk code a little more generic by abstracting out these implementation specific details:</p>
<pre>
Object subclass<span class="sym">: #</span>Tests


<span class="sym">!</span>Tests class methodsFor<span class="sym">:</span> <span class="str">'platform'</span><span class="sym">!</span>

<span class="sym">!</span>Tests class methodsFor<span class="sym">:</span> <span class="str">'platform'</span><span class="sym">!</span>


<span class="sym">!</span>Tests class methodsFor<span class="sym">:</span> <span class="str">'platform'</span><span class="sym">!</span>
      <span class="sym">(</span>ExternalConnection ioAccessor<span class="sym">: (</span>UnixDiskFileAccessor new handle<span class="sym">:</span> <span class="num">0</span><span class="sym">))! !</span>




<span class="sym">!</span>Tests class methodsFor<span class="sym">:</span> <span class="str">'platform'</span><span class="sym">!</span>
      <span class="sym">(</span>ExternalConnection ioAccessor<span class="sym">: (</span>UnixDiskFileAccessor new handle<span class="sym">:</span> <span class="num">1</span><span class="sym">))! !</span>


<span class="sym">!</span>Stream methodsFor<span class="sym">:</span> <span class="str">'platform'</span><span class="sym">!</span>


<span class="sym">!</span>Stream methodsFor<span class="sym">:</span> <span class="str">'platform'</span><span class="sym">!</span>
      <span class="sym">((</span>number asFixedPoint<span class="sym">:</span> decimalPlaces<span class="sym">)</span> printString copyWithout<span class="sym">: $</span>s<span class="sym">)! !</span>


<span class="sym">!</span>Stream methodsFor<span class="sym">:</span> <span class="str">'platform'</span><span class="sym">!</span>


<span class="sym">!</span>Integer methodsFor<span class="sym">:</span> <span class="str">'platform'</span><span class="sym">!</span>
</pre>