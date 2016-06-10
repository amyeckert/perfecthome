// source- http://laurenhallden.com/datingipsum/# 



function showIt() {
$('#faq').css("display", "block");
$('#gray').css("display", "block");
$('#gray').css('opacity', "0.60");
}

function closeIt() {
$('#faq').css("display", "none");
$('#gray').css("display", "none");
}

function parameters(){
var formResults = $('#form1').serialize();
var results = formResults.toString();
values=results.split('&');
one=values[0];
two=values[1];
paragraphNum=one.split('=');
a=paragraphNum[0];
b=paragraphNum[1];
arrType=two.split('=');
c=arrType[0];
d=arrType[1];
countIt(1);
}

function howMany() {
if ((b) == (1)) {
$('#result').html(paragraphs[0]+"<hr>");
$("#result").css("display", "block");
}
else {
	 addAnother(1);
}
}

function doneYet() {
var length = (paragraphs.length);
var request = (b);
if (length == request) {
var fullArray = paragraphs.join("");
$('#result').html(fullArray+'<hr>');
$("#result").css("display", "block");
}
else {
addAnother(1);
}
}


function countIt(count, longerSentence) {
if (count==1) {
	 if ((d) == ("normal")) {
	 		var rand = wordsoup[Math.floor(Math.random() * wordsoup.length)];
	 		var capitalize = rand.toString();
	 		var longSentence = (capitalize.charAt(0).toUpperCase()+ capitalize.slice(1));
	 		var newCount=(count+1);
	 		generate(newCount, longSentence);
	 		}
	 if ((d) == ("crazy")) {
	 		var rand = crazysoup[Math.floor(Math.random() * crazysoup.length)];
	 		var capitalize = rand.toString();
	 		var longSentence = (capitalize.charAt(0).toUpperCase()+ capitalize.slice(1));
	 		var newCount=(count+1);
	 		generate(newCount, longSentence);
	 		}
	 }
if ((count > 1) && (count < 20)) {
	 var newCount=(count+1);
	 var longSentence=(longerSentence);
	 generate(newCount, longSentence);
	 }
if (count==20) {
	 paragraphs=["<p>"+longerSentence+"."+"</p>"];
	 howMany();
	 }
}

function generate(newCount, longSentence) {
		if ((d) == ("normal")) {
			 var rand = wordsoup[Math.floor(Math.random() * wordsoup.length)];
			 var sentence = rand.toString();
			 }
		if ((d) == ("crazy")) {
			 var rand = crazysoup[Math.floor(Math.random() * crazysoup.length)];
			 var sentence = rand.toString();
			 }
		if ((newCount == 5) || (newCount == 15)) {
		var sentence = ('.'+' '+ sentence.charAt(0).toUpperCase()+ sentence.slice(1));
		var longerSentence = (longSentence + sentence);
		}
		if (newCount == 10) {
		var sentence = (','+' '+ rand.toString());
		var longerSentence = (longSentence + sentence);
		}
		if ((newCount != 5) && (newCount != 10) && (newCount != 15)) {
		var longerSentence = (longSentence+ ' ' + sentence);
		}
		var count=(newCount);
		countIt(count, longerSentence);
	}
	
	
	
function addAnother(count) {
keepCounting(count);
}

function keepCounting(count, longerSentence) {
if (count==1) {
	 if ((d) == ("normal")) {
	 		var rand = wordsoup[Math.floor(Math.random() * wordsoup.length)];
	 		var capitalize = rand.toString();
	 		var longSentence = (capitalize.charAt(0).toUpperCase()+ capitalize.slice(1));
	 		var newCount=(count+1);
	 		generateAgain(newCount, longSentence);
	 		}
	 if ((d) == ("crazy")) {
	 		var rand = crazysoup[Math.floor(Math.random() * crazysoup.length)];
	 		var capitalize = rand.toString();
	 		var longSentence = (capitalize.charAt(0).toUpperCase()+ capitalize.slice(1));
	 		var newCount=(count+1);
	 		generateAgain(newCount, longSentence);
	 		}
	 }
if ((count > 1) && (count < 20)) {
   // call the function.
	 var newCount=(count+1);
	 var longSentence=(longerSentence);
	 generateAgain(newCount, longSentence);
	 }
if (count==20) {
	 paragraphs.push("<p>"+longerSentence+"."+"</p>");
	 doneYet();
	 }
}

function generateAgain(newCount, longSentence) {
		if ((d) == ("normal")) {
			 var rand = wordsoup[Math.floor(Math.random() * wordsoup.length)];
			 var sentence = rand.toString();
			 }
		if ((d) == ("crazy")) {
			 var rand = crazysoup[Math.floor(Math.random() * crazysoup.length)];
			 var sentence = rand.toString();
			 }
		if ((newCount == 5) || (newCount == 15)) {
		var sentence = ('.'+' '+ sentence.charAt(0).toUpperCase()+ sentence.slice(1));
		var longerSentence = (longSentence + sentence);
		}
		if (newCount == 10) {
		var sentence = (','+' '+ rand.toString());
		var longerSentence = (longSentence + sentence);
		}
		if ((newCount != 5) && (newCount != 10) && (newCount != 15)) {
		var longerSentence = (longSentence+ ' ' + sentence);
		}
		var count=(newCount);
		keepCounting(count, longerSentence);
	}
	
var wordsoup=new Array();
wordsoup[0]="home brewing";
wordsoup[1]="On The Road";
wordsoup[2]="Infinite Jest";
wordsoup[3]="what to order off of the menu";
wordsoup[4]="I'm not good at filling out these things";
wordsoup[5]="coffee";
wordsoup[6]="bikes";
wordsoup[7]="whatever topic is on NPR";
wordsoup[8]="stepping outside your comfort zone";
wordsoup[9]="grab coffee or a drink";
wordsoup[10]="shoot me a message";
wordsoup[11]="I'm pretty laid-back";
wordsoup[12]="Game of Thrones";
wordsoup[13]="I have a crush on";
wordsoup[14]="chilling at a bar with friends";
wordsoup[15]="seeing as many countries as possible";
wordsoup[16]="degree in philosophy";
wordsoup[17]="Catcher in the Rye";
wordsoup[18]="pickles";
wordsoup[19]="fixing my scooter";
wordsoup[20]="whiskey";
wordsoup[21]="feminism";
wordsoup[22]="food";
wordsoup[23]="the simple things in life";
wordsoup[24]="nothing too complicated";
wordsoup[25]="rock climbing";
wordsoup[26]="Doctor Who";
wordsoup[27]="Breaking Bad";
wordsoup[28]="Netflix";
wordsoup[29]="self-deprecating humor";
wordsoup[30]="joking around";
wordsoup[31]="my eyes";
wordsoup[32]="my height and shoulders";
wordsoup[33]="bored at home";
wordsoup[34]="trying this for the first time";
wordsoup[35]="going back to school";
wordsoup[36]="dubstep";
wordsoup[37]="sushi";
wordsoup[38]="Indian food";
wordsoup[39]="introvert";
wordsoup[40]="extrovert";
wordsoup[41]="Myers-Briggs";
wordsoup[42]="Ethiopian";
wordsoup[43]="tacos";
wordsoup[44]="Murakami";
wordsoup[45]="sleeping late";
wordsoup[46]="I'm really good at";
wordsoup[47]="Neutral Milk Hotel";
wordsoup[48]="jazz cafes";
wordsoup[49]="tattoos";
wordsoup[50]="medical school";
wordsoup[51]="happy hour";
wordsoup[52]="share a new experience";
wordsoup[53]="trying different restaurants";
wordsoup[54]="exploring the city";
wordsoup[55]="long-term dating";
wordsoup[56]="short-term dating";
wordsoup[57]="new friends";
wordsoup[58]="road trips";
wordsoup[59]="I enjoy";
wordsoup[60]="is pretty awesome";
wordsoup[61]="fitness";
wordsoup[62]="fascinates me";
wordsoup[63]="Arrested Development";
wordsoup[64]="Family Guy";
wordsoup[65]="amazing women I've met";
wordsoup[66]="activity partners";
wordsoup[67]="training for the marathon";
wordsoup[68]="art school";
wordsoup[69]="strong and confident";
wordsoup[70]="glass half-full";
wordsoup[71]="snowboarding";
wordsoup[72]="skiing";
wordsoup[73]="hiking";
wordsoup[74]="mountain biking";
wordsoup[75]="my dogs";
wordsoup[76]="recently moved back";
wordsoup[77]="Vampire Weekend";
wordsoup[78]="my goofy smile";
wordsoup[79]="if you're down to actually meet at some point";
wordsoup[80]="as friends";
wordsoup[81]="honest and direct";
wordsoup[82]="outdoor activities";
wordsoup[83]="my cats";
wordsoup[84]="Kurosawa";
wordsoup[85]="Werner Herzog";
wordsoup[86]="Portlandia";
wordsoup[87]="Woody Allen";
wordsoup[88]="thinking about trying yoga";
wordsoup[89]="working at a coffee shop";
wordsoup[90]="family is very important to me";
wordsoup[91]="fixing up my house";
wordsoup[92]="only looking for something casual";
wordsoup[93]="I'm looking for";
wordsoup[94]="having a few beers";
wordsoup[95]="going to the gym";
wordsoup[96]="video games";
wordsoup[97]="ask me anything";
wordsoup[98]="I have no secrets";
wordsoup[98]="you should message me";
wordsoup[99]="if you like my profile";
wordsoup[100]="running shoes";
wordsoup[101]="going to shows";
wordsoup[102]="photography";
wordsoup[102]="my hobbies include";
wordsoup[102]="I value art";
wordsoup[103]="I know I listed more than 6 things";
wordsoup[104]="I don't really like talking about myself";
wordsoup[105]="making lasagna from scratch";
wordsoup[106]="bacon";
wordsoup[107]="really hoppy beers";
wordsoup[108]="it depends on the night";
wordsoup[109]="I love the smell of";
wordsoup[110]="making people laugh";
wordsoup[111]="The Daily Show";
wordsoup[112]="someone who shares my sense of humor";
wordsoup[113]="listening to music";
wordsoup[114]="playing my guitar";
wordsoup[115]="I hate lists";
wordsoup[116]="watching a movie";
wordsoup[117]="my favorite word is";
wordsoup[118]="local sports teams";
wordsoup[119]="using my farmshare";
wordsoup[120]="I'm a big fan of";
wordsoup[121]="foreign films";
wordsoup[122]="open-minded";
wordsoup[123]="passionate about";
wordsoup[124]="I don't take myself too seriously";
wordsoup[125]="vegetarian";
wordsoup[126]="beach days";
wordsoup[127]="too many to list";
wordsoup[128]="foodie";
wordsoup[129]="grilling";
wordsoup[130]="I'm a good listener";
wordsoup[131]="my beard";
wordsoup[132]="quizzo";
wordsoup[133]="working on my body and my mind";
wordsoup[134]="vinyl records";
wordsoup[135]="parallel parking";
wordsoup[136]="optimistic";
wordsoup[137]="just looking to have some fun";
wordsoup[138]="I'm just a regular guy";
wordsoup[139]="adventures";
wordsoup[140]="if you're still reading this";
wordsoup[141]="loyal";
wordsoup[142]="down to earth";
wordsoup[143]="everything but country music";
wordsoup[144]="outdoorsy";
wordsoup[145]="there's no such thing as a typical Friday night";
wordsoup[146]="if you think we have something in common";
wordsoup[147]="discussing politics";
wordsoup[148]="Oxford comma";
wordsoup[149]="no drama";
wordsoup[150]="Sunday funday";
wordsoup[151]="easy-going";
wordsoup[152]="my smartphone";
wordsoup[153]="knowing the difference between their/there/they're";
wordsoup[154]="but then it wouldn't be private";
wordsoup[155]="crossfit";
wordsoup[156]="my friends tell me they don't get why I'm single";



var crazysoup=new Array();
crazysoup[0]="I did a lot of modeling work in the mid-80s";
crazysoup[1]="trapped in a sexless marriage";
crazysoup[2]="my last partner told me";
crazysoup[3]="Ayn Rand";
crazysoup[4]="I don't really keep a budget";
crazysoup[5]="I live in constant amazement of nature and the universe";
crazysoup[6]="polyamory";
crazysoup[7]="I don't really read much these days";
crazysoup[8]="I'm really good at";
crazysoup[9]="you should message me";
crazysoup[10]="if you like my profile";
crazysoup[11]="my hobbies include";
crazysoup[12]="bald is sexy";
crazysoup[13]="one time in middle school";
crazysoup[14]="if you have a BMI under 25";
crazysoup[15]="ages 18 - 22";
crazysoup[16]="P90X";
crazysoup[17]="but I only smoke when drinking";
crazysoup[18]="I'm too lazy to keep typing";
crazysoup[19]="Juggalo";
crazysoup[20]="when I get drunk";
crazysoup[21]="organized chaos";
crazysoup[22]="that was a joke, by the way";
crazysoup[23]="when I picked this username I didn't realize I couldn't change it";
crazysoup[24]="working on my screenplay";
crazysoup[25]="performance art";
crazysoup[26]="documentary filmmaker";
crazysoup[27]="The Game";
crazysoup[28]="be my partner in crime";
crazysoup[29]="my alter-ego is";
crazysoup[30]="I love the smell of";
crazysoup[31]="is pretty awesome";
crazysoup[32]="I enjoy";
crazysoup[33]="younger women";
crazysoup[34]="nubile";
crazysoup[35]="looking for adventure";
crazysoup[36]="staying up late";
crazysoup[37]="clubbing";
crazysoup[38]="dive bars";
crazysoup[39]="really only soft drugs";
crazysoup[40]="keep up with me";
crazysoup[41]="size 2";
crazysoup[42]="I tend to be attracted to";
crazysoup[43]="I despise";
crazysoup[44]="if you like";
crazysoup[45]="Libertarian";
crazysoup[46]="is probably a conspiracy";
crazysoup[47]="beekeeping";
crazysoup[48]="looking for a third";
crazysoup[49]="my wife";
crazysoup[50]="pics on request";
crazysoup[51]="females";
crazysoup[52]="I'm a nice guy";
crazysoup[53]="making people mad";
crazysoup[54]="MFA";
crazysoup[55]="motorcycle collection";
crazysoup[56]="heyyy";
crazysoup[57]="you will love it";
crazysoup[58]="I'm a nice guy";
crazysoup[59]="friendzone";
crazysoup[60]="I'm a big fan of";
crazysoup[61]="ultramarathons";
crazysoup[62]="someone to provide for you";
crazysoup[63]="I'm just in town for the night";
crazysoup[64]="extreme";
crazysoup[65]="I am currently addicted to";
crazysoup[66]="crying in my bathtub";
crazysoup[67]="throwing rocks at trains";
crazysoup[68]="my lizard tongue";
crazysoup[69]="I'm kind of a genius";
crazysoup[70]="I will tell you stories forever";
crazysoup[71]="on the first date";
crazysoup[72]="no crazy chicks";
crazysoup[73]="my other half";
crazysoup[74]="shooting";
crazysoup[75]="no robots posing as real people";
crazysoup[76]="if I make fun of you it's because I like you";
crazysoup[77]="I'm an enormous man-child";
crazysoup[78]="shotgunning beers";
crazysoup[79]="if you have an innie belly button";
crazysoup[80]="lol";
crazysoup[81]="other shenanigans";
crazysoup[82]="I am extremely experienced and talented";
crazysoup[83]="well-built";
crazysoup[84]="wildly attractive doesn't hurt";
crazysoup[85]="I hope there are good girls left";
crazysoup[86]="it's very hard to meet quality women";
crazysoup[87]="complete lack of shame";
crazysoup[88]="I won't bite without permission";
crazysoup[89]="living on sailboats";
crazysoup[90]="a fairly successful career in sports";
crazysoup[91]="you're going to be trained to my satisfaction";
crazysoup[92]="I do well dating";
crazysoup[93]="I attract girls who are very good-looking";
crazysoup[94]="that means I am wonderful";
crazysoup[95]="you should be clean and intelligent";
crazysoup[96]="unworthy of serious consideration";
crazysoup[97]="because I am a paradox";
crazysoup[98]="if you have to look it up don't bother";
crazysoup[99]="finishing my novel";
crazysoup[100]="ask your mother";
crazysoup[101]="if you dress up like a pin-up doll for me";
crazysoup[102]="I should have grown up in the 40s";
crazysoup[103]="I will love you forever";
crazysoup[104]="I am oddly aroused by";
crazysoup[105]="proper grammar";
crazysoup[106]="snapchat";
crazysoup[107]="my deep, manly voice";
crazysoup[108]="in my birthday suit";
crazysoup[109]="you need a real man";
crazysoup[110]="years ago I discovered";
crazysoup[111]="full-contact";
crazysoup[112]="I starred in my own reality show";
crazysoup[113]="skydiving";
crazysoup[114]="laughing hysterically";
crazysoup[115]="for real though";
crazysoup[116]="you could say I'm old-fashioned";
crazysoup[117]="I know shirtless pics are a no-no, but";
crazysoup[118]="that's what she said";
crazysoup[119]="or so I've been told";
crazysoup[120]="with lots of self-respect";
crazysoup[121]="with morals";
crazysoup[122]="please post your real pictures";
crazysoup[123]="don't waste my time";
crazysoup[124]="I'm the last of a dying breed";
crazysoup[125]="work hard play hard";
crazysoup[126]="everything destructive that I do";
crazysoup[127]="it's huge";
crazysoup[128]="see, I told you";
crazysoup[129]="cosplay";
crazysoup[130]="on my fetish list";
crazysoup[131]="I may be somewhat jaded";
crazysoup[132]="I am a gentleman first and foremost";
crazysoup[133]="making others feel good";
crazysoup[134]="chivalry is not dead";
crazysoup[135]="at least once a day";
crazysoup[136]="blackjack";
crazysoup[137]="I grow a creepy mustache every February";
crazysoup[138]="the fact that you are even considering schooling me";
crazysoup[139]="that just proves my point";
crazysoup[140]="I am a hoarder, but only of top shelf stuff";
crazysoup[141]="most cats eventually love me";
crazysoup[142]="I'm too honest";
crazysoup[143]="giving massages";
crazysoup[144]="my beard";
crazysoup[145]="it depends on the night";
crazysoup[146]="there's no such thing as a typical Friday night";
crazysoup[147]="playing devil's advocate";
crazysoup[148]="crossfit";
crazysoup[149]="I have an IQ of 140, which means";