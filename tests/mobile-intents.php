<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<title></title>
</head>
<body>

<h1>Mobile Intents</h1>

<a href="mailto:admin@ahmed-badawy.com?subject=this is the subject">
  أرسل رسالة ميل
</a>
<hr>

<a href="tel:01028999810">Make a Phone Call to: 01028999810</a>
<hr>

<a href="callto://01111988246">Make a SkyBe Call to: 01028999810</a>
<br>
<a href="skype:abdullah.motawa?call">Make a SkyBe Call to: 01028999810</a>
<hr>

<a href="whatsapp://send?text=The text to share!" data-action="share/whatsapp/share">Share a text via Whatsapp</a>
<hr>

<a href="geo:30,31">Open Location on Google Maps</a>
<hr>

<label>take img & upload</label>
<input type="file" accept="image/*;capture=camera">
<hr>

<label>take a video & upload</label>
<input type="file" accept="video/*;capture=camcorder">
<hr>

<label>take a Sound & upload</label>
<input type="file" accept="audio/*;capture=microphone">
<hr>


    autocorrect<input type="text" placeholder="Star's name"/>
    <br>
    no autocorrect<input type="text" autocorrect="off" placeholder="Star's name"/>
<hr>
    autocapitalize<input type="text" placeholder="Tag your sighting"/>
    <br>
    no autocapitalize<input type="text" autocapitalize="off" placeholder="Tag your sighting"/>
<hr>




<!-- ************************************************************************ -->




<h1>Sharing Buttons</h1>

<ul>

<li><a class="social_share_link" href='' shareType="facebook">Facebook</a></li>
<li><a class='social_share_link' href='' shareType="twitter">Twitter</a></li>
<li><a class='social_share_link' href='' shareType="google-plus">Google+</a></li>

<li><a class='social_share_link' href='' shareType="linked-in">Linked-In</a></li>
<li><a class='social_share_link' href='' shareType="google-plus">Pinterest</a></li>
<li><a class='social_share_link' href='' shareType="stumbleupon">stumbleUpon</a></li>
<li><a class='social_share_link' href='' shareType="vk">VK</a></li>
<li><a class='social_share_link' href='' shareType="xing">Xing</a></li>
<li><a class='social_share_link' href='' shareType="tumblr">Tumblr</a></li>
<li><a class='social_share_link' href='' shareType="reddit">Reddit</a></li>

</ul>


<script type="text/javascript">
  var share_data = {
    url         : "http://ahmed-badawy.com/site/cv",
    title       : "Ahmed-Badawy's C.V (Please Read Me)",
    text        : " -!--Ahmed Badawy - أحمد بدوى--!- Hello! This is My C.V : http://ahmed-badawy.com/site/cv", 
    img         : "http://ahmed-badawy.com/site/public/site-imgs/site/logo.jpg",  
    phone_num   : "01111988246",
    google_maps : "30,31",
  };
  share_data.prepared_url = encodeURIComponent(share_data.url);
  share_data.prepared_img = encodeURIComponent(share_data.img);

  function get_share_link(share_type){
      var $link;
      if(share_type=="facebook") $link = "https://www.facebook.com/sharer/sharer.php?u="+share_data.prepared_url;
      if(share_type=="twitter") $link = "http://twitter.com/home?status="+share_data.text;
      if(share_type=="google-plus") $link = "https://plus.google.com/share?url="+share_data.prepared_url+"&gpsrc=frameless";
      if(share_type=="linked-in") $link = "https://www.linkedin.com/shareArticle?mini=true&url="+share_data.prepared_url+"&title="+share_data.title+"&summary="+share_data.text+"";
      if(share_type=="pinterest") $link = "https://www.pinterest.com/pin/create/button/?url="+share_data.prepared_url+"&media=$img&description="+share_data.text+"";
      if(share_type=="stumbleupon") $link = "http://www.stumbleupon.com/submit?url="+share_data.prepared_url+"&title="+share_data.title+"";
      if(share_type=="vk") $link = "https://vk.com/share.php?url="+share_data.prepared_url+"&title="+share_data.title+"&description="+share_data.text+"&image=$img&noparse=true";
      if(share_type=="xing") $link = "https://www.xing-share.com/app/user?op=share;sc_p=xing-share;url="+share_data.prepared_url+"";
      if(share_type=="tumblr") $link = "http://www.tumblr.com/share/link?url="+share_data.prepared_url+"&title="+share_data.title+"&description="+share_data.text+"";
      if(share_type=="reddit") $link = "http://www.reddit.com/submit?url="+share_data.prepared_url+"&title="+share_data.title+"";

      if(share_type=="whatsapp") $link = "whatsapp://send?text="+share_data.text+"";

      if(share_type=="email") $link = "mailto:?subject="+share_data.title+"&body="+share_data.text+"";
      if(share_type=="call_phone") $link = "tel:"+share_data.phone_num;
      if(share_type=="google-maps") $link = "geo:"+share_data.google_maps;
      return $link;
  }

    function centeredPopup(url,winName,w,h,scroll){
      LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
      TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
      settings =
      'height='+h+',width='+w+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scroll+',resizable'
      popupWindow = window.open(url,winName,settings);
    }

    var tags = document.getElementsByClassName('social_share_link');
    for(var i=0, n=tags.length; i<n ; i++){
      tags[i].addEventListener('click',function(evt){
            evt.preventDefault();
            share_type = this.getAttribute('shareType');
            link = get_share_link(share_type);
            console.log(link);
            num = Math.random();
            centeredPopup(link, num+"toString" ,'700','300','yes');
      },false);
    }

</script>



</body>
</html>