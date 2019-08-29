<title>Mobile wallpaper search</title>
<link rel="shortcut icon" type="image/png" href="/4K.png"/>
<!-- This is a search form that will take us to
     https://www.google.com/search?tbm=isch&tbs=isz:ex,iszw:7680,iszh:4320&q=example
     when we search for 𝚎𝚡𝚊𝚖𝚙𝚕𝚎. This search will show us only images, and
     those images will all be 7680 pixels wide and 4320 pixels tall.

     First we enclose everything in a <𝚏𝚘𝚛𝚖> whose 𝚊𝚌𝚝𝚒𝚘𝚗 is everything that
     the search engine results page’s URI to the left of the question mark (?)
     in it -->
<form action="https://www.google.com/search" method="get">

   <!-- Next, we add the arguments that are added to the Google URI. For each
        part of the URI we want to build, we need an <𝚒𝚗𝚙𝚞𝚝> element with a
        𝚟𝚊𝚕𝚞𝚎 attribute. -->

   <!-- build 𝚝𝚋𝚖=𝚒𝚜𝚌𝚑 -->
   <!-- 𝚝𝚋𝚖 needs to be set to 𝚒𝚜𝚌𝚑, which tells Google we want only
        image search results. We add 𝚝𝚢𝚙𝚎="𝚑𝚒𝚍𝚍𝚎𝚗" to the input element
        because we don’t want the end user to have to choose that
        themself -->
   <input name="tbm" value="isch" type="hidden">

   <!-- build 𝚝𝚋𝚜=𝚒𝚜𝚣:𝚎𝚡,𝚒𝚜𝚣𝚠:𝟽𝟼𝟾𝟶,𝚒𝚜𝚣𝚑:𝟺𝟹𝟸𝟶 -->
   <!-- 𝚝𝚋𝚜 needs to be set to a three-part parameter that tells Google
        we’re doing a search for images of a certain size and what the
        dimensions we’re looking for are -->
   <input name="tbs" value="isz:ex,iszw:1241,iszh:2686" type="hidden">

   <!-- build 𝚚=𝚎𝚡𝚊𝚖𝚙𝚕𝚎 (but ours won’t specify "example" — the user
        will decide what to search for). This parameter’s 𝚝𝚢𝚙𝚎 is
        not 𝚑𝚒𝚍𝚍𝚎𝚗 but rather 𝚝𝚎𝚡𝚝, which is what we’ll ask the user to
        enter. -->
   <!-- If we don’t want to prompt our users’ imaginations,
        we could remove 𝚙𝚕𝚊𝚌𝚎𝚑𝚘𝚕𝚍𝚎𝚛="𝚙𝚞𝚙𝚙𝚒𝚎𝚜" -->
   <!-- 𝚜𝚒𝚣𝚎="𝟹𝟻" means that the field where the user will input their
        query is about 35 characters wide on page load -->
   <input name="q" size="35" type="text" placeholder="zelda">

   <!-- Finally, we add the button the user can tap to enter their query,
        so our 𝚝𝚢𝚙𝚎 is 𝚜𝚞𝚋𝚖𝚒𝚝. We can set our value to whatever we want
        our button to say -->
   <input type="submit" value="Find mobile wallpapers">

 <!-- <𝚏𝚘𝚛𝚖> is the only element we have used that we must close -->
 </form>
 <p>If you want a <b>4K</b> image instead go <a href="/4k">here</a></p>
 <p>If you want a <b>8K</b> image instead go <a href="/">here</a></p>
 <p>If you want a <b>10K</b> image instead go <a href="/10k">here</a></p>
 <p>If you want a <b>16K</b> image instead go <a href="/16k">here</a></p>