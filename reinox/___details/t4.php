<!DOCTYPE html>
<html>
	<head>
  <title>REINOX</title>
	<link rel="shortcut icon" type="image/x-icon" href="../___sources/R.ico" />

  <link href='https://fonts.googleapis.com/css?family=Reem Kufi' rel='stylesheet'>
  </head>
	<body>
	<div class="page">
  <div class="timeline">
    <div class="timeline__group">
      <span class="timeline__year time" aria-hidden="true">Brain Teaser</span>
      <div class="timeline__cards">
        <div class="timeline__card card">
          <header class="card__header">
            
          </header>
          <div class="card__content">
            <p>Brain Teaser is mind strengthening event infused with programming knowledge and with the aim to challenge technical minds.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="timeline__group">
      <span class="timeline__year time" aria-hidden="true">RULES</span>
      <div class="timeline__cards">
        <div class="timeline__card card">
          <header class="card__header">
          </header>
          <div class="card__content">
            <h3>Round-1</h3>
            <p>&#x2022;Basic Programming questions will be asked using KAHOOT app and the participants are asked to join the test.</p>
            <p>&#x2022;Round-1 will be with the take place for 15 minutes.</p>
            <p>&#x2022;Top scorers will be short listed to the next round.</p>
            <h3>Round-2</h3>
            <p>&#x2022;Round-2 images will be displayed and the participants are asked to predict the image which will be technical based.</p>
            <p>&#x2022;There will be totally 3 questions for each participants and failing to predict those images will make the questions open for other participants.</p>
            <p>&#x2022;Based on the score the first, second and third place were chosen from the maximum scorers</p>
          </div>
        </div>
      </div>
    </div>
    <div class="timeline__group">
      <span class="timeline__year time" aria-hidden="true">Date</span>
      <div class="timeline__cards">
        <div class="timeline__card card">
          <header class="card__header">          
          </header>
          <div class="card__content">
            <p>11th FEB 2023</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<style>


.r-title{
  margin-top: var(--rTitleMarginTop, 0) !important;
  margin-bottom: var(--rTitleMarginBottom, 0) !important;
}


p:not([class]){
  line-height: var(--cssTypographyLineHeight, 1.78);
  margin-top: var(--cssTypographyBasicMargin, 1em);
  margin-bottom: 0;
}

p:not([class]):first-child{
  margin-top: 0;
}

/*
text component
*/

.text{
  display: var(--textDisplay, inline-flex);
  font-size: var(--textFontSize, 1rem);  
}

/*
time component
*/

/*
core styles
*/

.time{
  display: var(--timeDisplay, inline-flex);
}

/*
extensions
*/

.time__month{
  margin-left: var(--timelineMounthMarginLeft, .25em);
}

/*
skin
*/

.time{
  padding: var(--timePadding, .25rem 1.25rem .25rem);
  background-color: var(--timeBackgroundColor, #f0f0f0);

  font-size: var(--timeFontSize, .75rem);
  font-weight: var(--timeFontWeight, 700);
  text-transform: var(--timeTextTransform, uppercase);
  color: var(--timeColor, currentColor);
}

/*
card component
*/

/*
core styles
*/

.card{
  padding: var(--timelineCardPadding, 1.5rem 1.5rem 1.25rem);
}

.card__content{
  margin-top: var(--cardContentMarginTop, .5rem);
  font-family: 'Reem Kufi';

}

/*
skin
*/

.card{
  border-radius: var(--timelineCardBorderRadius, 2px);
  border-left: var(--timelineCardBorderLeftWidth, 3px) solid var(--timelineCardBorderLeftColor, var(--uiTimelineMainColor));
  box-shadow: var(--timelineCardBoxShadow, 0 1px 3px 0 rgba(0, 0, 0, .12), 0 1px 2px 0 rgba(0, 0, 0, .24));
  background-color: var(--timelineCardBackgroundColor, #fff);
}

/*
extensions
*/

.card__title{
  --rTitleMarginTop: var(--cardTitleMarginTop, 1rem);
  font-size: var(--cardTitleFontSize, 1.25rem);
}



.timeline{
  display: var(--timelineDisplay, grid);
  grid-row-gap: var(--timelineGroupsGap, 2rem);
}

/*
1. If timeline__year isn't displaed the gap between it and timeline__cards isn't displayed too
*/

.timeline__year{
  margin-bottom: 1.25rem; /* 1 */
  font-family: 'Reem Kufi';
}

.timeline__cards{
  display: var(--timeloneCardsDisplay, grid);
  grid-row-gap: var(--timeloneCardsGap, 1.5rem);
}


/*
=====
SKIN
=====
*/

.timeline{
  --uiTimelineMainColor: var(--timelineMainColor, teal);
  --uiTimelineSecondaryColor: var(--timelineSecondaryColor, #fff);

  border-left: var(--timelineLineWidth, 3px) solid var(--timelineLineBackgroundColor, var(--uiTimelineMainColor));
  padding-top: 1rem;
  padding-bottom: 1.5rem;
}

.timeline__year{
  --timePadding: var(--timelineYearPadding, .5rem 1.5rem);
  --timeColor: var(--uiTimelineSecondaryColor);
  --timeBackgroundColor: var(--uiTimelineMainColor);
  --timeFontWeight: var(--timelineYearFontWeight, 400);
}

.timeline__card{
  position: relative;
  margin-left: var(--timelineCardLineGap, 1rem);
}

/*
1. Stoping cut box shadow
*/

.timeline__cards{
  overflow: hidden;
  padding-top: .25rem; /* 1 */
  padding-bottom: .25rem; /* 1 */
}

.timeline__card::before{
  content: "";
  width: 100%;
  height: var(--timelineCardLineWidth, 2px);
  background-color: var(--timelineCardLineBackgroundColor, var(--uiTimelineMainColor));

  position: absolute;
  top: var(--timelineCardLineTop, 1rem);
  left: -50%;
  z-index: -1;
}

/*
=====
SETTINGS
=====
*/
/**/


/*
=====
DEMO
=====
*/

body{
  background-image:url(../___sources/_t4.jpg);
  background-size: cover;
  margin: 0;
  display: flex;
  flex-direction: column;
}

p{
  margin-top: 0;
  margin-bottom: 1rem;
  line-height: 1.5;
}

p:last-child{
  margin-bottom: 0;
}

.page{
  max-width: 47rem;
  padding: 3%;
  margin-left: auto;
  margin-right: auto;
}



</style>

	</body>
	
</html>