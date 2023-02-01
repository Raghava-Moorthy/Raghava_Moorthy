<!DOCTYPE html>
<html>
	<head>
	<link rel="shortcut icon" type="image/x-icon" href="../___sources/R.ico" />
    <title>REINOX</title>
  <link href='https://fonts.googleapis.com/css?family=Reem Kufi' rel='stylesheet'>
  </head>
	<body>
	<div class="page">
  <div class="timeline">
    <div class="timeline__group">
      <span class="timeline__year time" aria-hidden="true">Paper Presentation</span>
      <div class="timeline__cards">
        <div class="timeline__card card">
          <header class="card__header">
            
          </header>
          <div class="card__content">
            <p>Paper presentation is an event where the participants are required to make a paper about a certain topic or area, and then present it in front of a judges, following which it will be rated and judged based on their performance..</p>
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
            <p>&#x2022;Per team - maximum 3 members.</p>
            <p>&#x2022;The presentation should be compatible MS powerpoint (.pptx)</p>
            <p>&#x2022;Presenters has 7 minutes for presentation and 3 minutes for question and answer.</p>
            <p>&#x2022;Deadline  for submission of the paper : 08/02/2023.</p>
            <p>&#x2022;Presenter requested to submit the paper to given mail ID (reinox2022@gmail.com)</p>
            <p>&#x2022;The format of the paper must be in the given format(Template).</p><br>
            <a href="Template.pdf" style="font-style:italic;">Check here for template</a>
            
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
  --uiTimelineMainColor: var(--timelineMainColor, #222);
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
  background-image:url(../___sources/_t5.jpg);
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