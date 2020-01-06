<html>
    <head>
        <style>
            
    section.test-start {
    padding: 59px;
}

.assignment-block {
    padding: 12px;
    border: 1px solid #ccc;
}
   .assignment-block .btn-signup {
    background-color: #e55a19;
    border-radius: 0px;
    text-transform: uppercase;
    color: #fff;
    padding: 9px 24px;
    font-weight: 700;
}

.assignment-block .recommended-block {
     
    background-color: #edf9ff;
}
.assignment-block .recommended-heading {
    background-color: #044269;
    color: #fff;
    padding: 12px 0px 7px 1px;
}
.assignment-block .recommended-content {
    padding: 37px 12px 31px 76px;
}
.test-start .btn-query{
    background-color: #044269;
    border-radius: 0px;
    text-transform: uppercase;
    color: #fff;
    padding: 9px 24px;
    font-weight: 700;
}
.test-start .query-button {
    padding: 60px;
    display: flex;
    justify-content: center;
}
/* section 2nd */
section.Assignment {
    padding: 36px;
}
.assignment-block2 {
    padding: 12px;
}
section.Assignment .total-question.rounded-circle {
    text-align: center;
    color: #fff;
    background-color: #044269;
}
.assignment-block2 .recommended-block {
     
     background-color: #edf9ff;
 }
 .assignment-block2 .recommended-heading {
    background-color: #044269;
    color: #fff;
    padding: 12px 0px 7px 1px;
}
.assignment-block2 .recommended-content {
    padding: 37px 12px 31px 76px;
}
.assignment-block2  .btn-start{
    background-color: #044269;
    border-radius: 0px;
    text-transform: uppercase;
    color: #fff;
    padding: 9px 24px;
    font-weight: 700;
}
.Assignment .total-question {
    height: 54%;
    width: 69%;
    color: #fff;
    border-radius: 100%;
    text-align: center;
    background-color: #044269;
    padding: 10px 10px;
}
.questions-block hr {
    border: 1px solid #044269;
}
.total-question h4 {
    font-size: 21px;
}

.questions-block .btn-skip{
    color: #fff;
    background-color: #e55a19;
    border-radius: 0px;
    padding: 5px 27px;
}

.questions-block .btn-nexts {
    background-color: #044269;
    color: #fff;
    border-radius: 0px;
    padding: 5px 27px;
}



.questions-block .pagination-block {
    padding-top: 93px;
}

.pagination>li>a, .pagination>li>span { border-radius: 50% !important;margin: 0 5px;}
.questions-block .page-link {
    position: relative;
    display: block;
    padding: 13px 17px;
    background-color: #06456c;
    border: 1px solid #dee2e6;
    color: #fff;
}
.questions-block .legend-option p {
    margin: 0px;
}
.questions-block .legend-option  {
    float: right;
    margin: 24px 0px;
}
.questions-block .legend-option span.skip {
    color: #e55a19;
}
.questions-block .legend-option  span.Current {
    color: #868c86;
}
.questions-block .legend-option span.Attempted {
    color: #06456c;
}
.questions-block .legend-option span.not-Attempted {
    color: #000;
}
.questions-block .reappear-block {
    background-color: #06456c;
     color: #fff; 
    padding: 7px;
}
/* */
.questions-block .timing {
    height: 54%;
    width: 69%;
    color: #fff;
    border-radius: 100%;
    text-align: center;
    background-color: #044269;
    padding: 10px 10px;
}
.questions-block .timing  h4 {
    font-size: 21px;
}
.questions-block .timing-section h5{
    color:#044269;

}

            </style>
</head>
<body>
 
    <?php include 'header.php' ?>
<section class="test-start">
    <div class="container">
        <div class="assignment-block">
            <div class="row">
                <div class="col-md-7">
                    <!--<p class="heading"><b>1.Assigment:</b>Multiple Choice Questions</p>-->
                    <h6> <strong>1.Assigment:</strong> Multiple Choice Questions</h6>
                    <p>This test is to assess a candidate's overall understanding of essential aspects of academic writing. </p>
                    <p> <span><i class="fa fa-chevron-right" aria-hidden="true"></i></span> Plagiarism</p>
                    <p> <span><i class="fa fa-chevron-right" aria-hidden="true"></i></span> Referencing</p>
                    <p> <span><i class="fa fa-chevron-right" aria-hidden="true"></i></span> Formating</p>
                    <p> <span><i class="fa fa-chevron-right" aria-hidden="true"></i></span> Types of academic writing</p>
                    <p> <span><i class="fa fa-chevron-right" aria-hidden="true"></i></span> Grammar</p>
                    <button type="submit" class="btn btn-signup" id="start_test" onclick="window.location.href='instruction.php'">CLICK TO START</button>
                </div>
                    <div class="col-md-5">
                        <div class="recommended-block">
                             <div class="row">
                                <div class="col-md-12">
                                    <div class="recommended-heading">
                                    <h4 class="text-center"> <span> <i class="fa fa-hand-paper-o" aria-hidden="true"></i></span> HIGHLY RECOMMENDED</h4>
                                    </div> 
                                </div>
                                <div class="row">
                                        <div class="col-md-12">
                                            <div class="recommended-content">
                                               <!-- <h5 class="text-center">Make sure to go through <span>Learning center</span> thoroughly before you take the test.</h5>-->
                                                  <h5 class="text-center">Make sure to go through </h5>
                                                 <h5  class="text-center">Learning center</h5>
                                                 <h5  class="text-center">thoroughly before you take the test</h5>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="query-button">
                    <button type="submit" class="btn btn-query" onclick="location.href='pq.html'" id="post_qeury">Post a Query </button>   
                </div>   
            </div>
    </div>
</section>
<?php include 'footer.php'?>


</body>
</html>