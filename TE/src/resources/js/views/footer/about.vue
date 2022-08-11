<template>
    <div class="header">
        <div class="col-h11">
            <h2>Andžejus Naimovičius</h2>
        </div>
        <div class="col-h12">
            <h4>Full Stack | Front End | Back End</h4>
        </div>

    </div>

    <div class="grid-container">
        <div class="flex-container-first">
            <div class="col-12">
                <h2>Personal information</h2>
                <div>&#x1F4F1;&nbsp;&nbsp;&nbsp;&nbsp;+370 609 54 003</div>
                <br>
                <div>&#x1F4E7;&nbsp;&nbsp;andzejus.naimovicius@gmail.com</div>
                <br>
                <div>&#x1f310;&nbsp;&nbsp;Vilnius, Lithuania</div>
                <br>
                <div>&nbsp;<i class='fa fa-linkedin blue-color'></i><a>&nbsp;&nbsp;&nbsp;https://www.linkedin.com/in/</a>
                    <br>
                    <a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;andžejus-naimovičius-5b821b162</a>
                </div>
            </div>
            <div class="col-13">
                <h2>Skills</h2>
                <ul class="first">
                    <li>JavaScript</li>
                    <li>PHP</li>
                    <li>Laravel</li>
                    <li>Vue.js</li>
                    <li>HTML</li>
                    <li>CSS/SASS</li>
                    <li>Bootstrap</li>
                    <li>Docker</li>
                    <li>Git/Github</li>
                </ul>
            </div>
            <div class="col-14">
                <h2>Languages</h2>
                <ul class="second">
                    <li>Lithuanian</li>
                    <li>English</li>
                    <li>Russian</li>
                    <li>Polish</li>
                </ul>
            </div>
            <div class="col-15">
                <h2>Interests</h2>
                <ul class="third">
                    <li>IT/Programming</li>
                    <li>Drums</li>
                    <li>Motorcycles</li>
                    <li>Skiing</li>
                    <li>Renewable energy</li>
                    <li>Green technologies</li>
                </ul>
            </div>
        </div>
        <div class="flex-container-second">
            <div class="col-21">
                <br>
                <h2>Professional Summary</h2>
                <br>
                <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Looking for a new opportunities in IT field. I've been working in
                </div>
                <br>
                <div>commerce for a many years and have a strong understanding of the</div>
                <br>
                <div>whole process. More than 10 years experience of team management,</div>
                <br>
                <div>so have strong leadership abilities, strategic planing and organizational</div>
                <br>
                <div>skills. I took part in automatizing processes implementation.</div>
                <br>
                <div>Think this experience can be an advantage.</div>
                <br>
            </div>
            <div class="col-22">
                <h2>Employment history</h2>
                <br>
                <h4>Project Manager, Marcopol Baltija</h4>
                <div class="marked">Jun. 2016 – Mar. 2022</div>
                <br>
                <h4>Project Manager, SKV</h4>
                <div class="marked">Jun. 2015 – Jun. 2016</div>
                <br>
                <h4>Department Head, Ginestra</h4>
                <div class="marked">Aug. 2001 – Jun. 2015</div>
            </div>
            <div class="col-23">
                <h2>Education</h2>
                <br>
                <h4>Vilnius Pedagogical University</h4>
                <div class="marked">Master of Science, Mathematics and Informatics, Jun. 2008</div>
                <br>
                <h4>Vilnius Pedagogical University</h4>
                <div class="marked">Bachelor of Science, Mathematics and Informatics, Jun. 2004</div>
            </div>
            <div class="col-24">
                <h2>Courses</h2>
                <br>
                <h4>Code Academy</h4>
                <div class="marked">Full stack development advanced studies, 500h courses, Apr. 2022</div>
                <br>
                <h4>Mercuri international</h4>
                <div class="marked">Executive courses, Aug. 2013</div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "about"
}
</script>

<style scoped>

* {
    color: white;
    text-shadow: 1px 1px 1px #000, 2px 2px 2px darkblue;
}

.header {
    margin-bottom: 20px;
    text-align: center;
    line-height: 50%;
}

ul {
    list-style: none;
}

a {
    text-decoration: none;
}

.first li::before {
    content: "\2714";
    color: floralwhite;
    margin-right: 5px;
}

.second li::before {
    content: "\2756";
    color: floralwhite;
    margin-right: 5px;
}

.third li::before {
    content: "\25C8";
    color: floralwhite;
    margin-right: 5px;
}

.grid-container {
    display: grid;
    gap: 20px;
    justify-items: start;
    grid-template-columns: 30vw 70vw;
    grid-template-rows: auto auto;
    margin: 40px;
}

.col-h11 {
    margin: 20px 0 40px 0;
}

.col-h12 {
    color: floralwhite;
}

.col-12 {
    font-size: 14px;
    margin-bottom: 40px;
}

.col-13,
.col-14,
.col-15 {
    font-size: 14px;
    margin: 20px 0 40px 0;
}

.col-21 {
    line-height: 50%;
}

.col-22,
.col-23,
.col-24 {
    line-height: 50%;
    margin: 40px 0;
}

.marked {
    color: floralwhite;
}
</style>
