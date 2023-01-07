var x=0;
var ad_img=["img1/2.webp","img1/3.jpg","img1/4.jpg","img1/5.jpg","img1/1.jpg"]
var txt_img=["DISCOVER THE `<BR>` NEW PLACES","MAKE YOUR TOUR WORTHWHILE","WORK TRAVEL SAVE REPEAT","WAKE UP AND LIVE","TRAVEL AROUND THE WORLD"]

function nextImage()
{
    if(x==4)
    {
        document.getElementById("adx").src=ad_img[4];
        document.getElementById("quots").innerHTML=txt_img[4];
        x=0;
        return
    }
    document.getElementById("adx").src=ad_img[x];
    document.getElementById("quots").innerHTML=txt_img[x];
    x=x+1;
}

function prevImage()
{
    if(x==0)
    {
        document.getElementById("adx").src=ad_img[0];
        document.getElementById("quots").innerHTML=txt_img[0];
        x=4;
        return
    }
    document.getElementById("adx").src=ad_img[x];
    document.getElementById("quots").innerHTML=txt_img[x];
    x=x-1;
}
