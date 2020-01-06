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
<script>
        
        var correct=0;
        var index=1;
        var countdown = 30 * 60 * 1000;
        var timerId = setInterval(function(){
        countdown -= 1000;
        var min = Math.floor(countdown / (60 * 1000));
        var sec = Math.floor((countdown - (min * 60 *1000))/1000);
        if (countdown <= 0) {
        alert("30 min");
        clearInterval(timerId);
        }  
        else {
        $("#min").html(min);
        $("#sec").html(sec);
            }
        }, 1000);
        function solve(qid)
        {
            
            index=Number(qid);
                xmlhttp=new XMLHttpRequest();
                xmlhttp.onreadystatechange=function(){
                    if(this.readyState==4 && this.status==200)
                    {
                        document.getElementById("ques").innerHTML=this.responseText;
                    }
                };
                xmlhttp.open("GET","question_fetch.php?id="+qid,true);
                xmlhttp.send();
            //   var qidn=Number(qid);
            //   index=qidn;
            //   visit[qidn]=2;
            //   document.getElementbyId(qid).style.background-color: "red";
        }
        function checkanswer()
        {
            var checkbox1=document.getElementById("a1");
            var checkbox2=document.getElementById("a2");
            var checkbox3=document.getElementById("a3");
            var checkbox4=document.getElementById("a2");
            if(checkbox1.checked==true)
            {
                var selected=checkbox1.value;
            }
            else if(checkbox2.checked==true)
            {
                var selected=checkbox2.value;
            }
            else if(checkbox3.checked==true)
            {
                var selected=checkbox3.value;
            }
            else if(checkbox4.checked==true)
            {
                var selected=checkbox4.value;
            }
            xmlhttp=new XMLHttpRequest();
            xmlhttp.onreadystatechange=function()
            {
                if(this.readyState==4&&this.status==200)
                {
                  if(ans==this.responseText)
                  {
                      alert("correct answer");
                      correct++;

                  }
                  else
                  {
                      alert("wrong answer");

                  }
                }

            };
            xmlhttp.open("GET","get_answer.php",true);
            xmlhttp.send();
         }
        
        </script>
    <?php include 'header.php'?>
<section class="questions-block">
  <div class="container">
          <hr>
        <div class="row">
          <div class="col-md-7"> 
                <div class="questions-upper-block">
                    <h3>Short Answer Questions</h3>
                    <p>Total Time: 40 minutes</p>
                   <!-- <h5>Question 2/20</h5>-->
                </div>
          </div>
           <div class="col-md-5">
                 <div class="">
                   <p >Please do not refresh your current page.Your time will be elapsed.</p>
                 </div>
            </div>
        </div> 
        <div class="row">
            
                <div class="col-md-10">
                    <div class="timing-section">
                        <h5>Question 2/20</h5>
                    </div>    
                </div>
                <div class="col-md-1">
                        <div class="timing">
                                <h4 id="min"></h4>
                            </div>
                            <p>Minutes</p>
                </div>
                <div class="col-md-1">
                        <div class="timing">
                                <h4 id="sec"></h4>
                            </div>
                            <p>Seconds</p>
                </div>
                 

        </div>
         <hr>
            <div class="row">
                <div class="col-md-12" id="ques">
                    <h6> <strong>1 Which of the followings is/are automatically added to every class, if we do not write our own.</strong></h6>
                    <h6> <strong>Ans:</strong> </h6>
                        <p> <span><input type="checkbox"> Copy Constructor</p>
                        <p> <span><input type="checkbox"> Default Constructor</p>
                        <p> <span><input type="checkbox"> Assignment Constructor</p>
                        <p> <span><input type="checkbox"> All of these</p>                          
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                        <div class="row">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-skip">Skip</button>   
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-nexts float-right" onclick="checkanswer()">Next</button>   
                                  </div>
                              </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                        <div class="pagination-block">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#"> <span class="pages"><i class="fa fa-chevron-left" aria-hidden="true"></i><span></a></li>    
                                    <li class="page-item"><button class="page-link" id="1" onclick="solve(this.id)"><span class="pages">1<span></button></li>
                                      <li class="page-item"><button class="page-link" id="2"  onclick="solve(this.id)"> <span class="pages">2<span></button></li>
                                        <li class="page-item"><button class="page-link" id="3" onclick="solve(this.id)"> <span class="pages">3<span></button ></li>  
                                    <li class="page-item"><button class="page-link" id="4" onclick="solve(this.id)"> <span class="pages">4<span></button ></li>
                                      <li class="page-item"><button class="page-link" id="5" onclick="solve(this.id)"> <span class="pages">5<span></button ></li>
            
                                        <li class="page-item"><button class="page-link" id="6" onclick="solve(this)"> <span class="pages">6<span></button ></li>
                                          <li class="page-item"><button class="page-link" id="7" onclick="solve(this)"> <span class="pages">7<span></button ></li>
                                            <li class="page-item"><button class="page-link" id="8" onclick="solve(this)"> <span class="pages">8<span></button ></li>
                                              <li class="page-item"><button class="page-link" id="9" onclick="solve(this)"> <span class="pages">9<span></button ></li>  
                                          <li class="page-item"><button class="page-link"  id="10" onclick="solve(this)"> <span class="pages">10<span></button ></li>
                                            <li class="page-item"><button class="page-link" id="11" onclick="solve(this)"> <span class="pages">11<span></button ></li>
                                              <li class="page-item"><button class="page-link" id="12" onclick="solve(this)"> <span class="pages">12<span></button ></li>
                                                <li class="page-item"><button class="page-link" id="13" onclick="solve(this)"> <span class="pages">13<span></button ></li>  
                                                  <li class="page-item"><button class="page-link" id="14" onclick="solve(this)"> <span class="pages">14<span></button ></li>
                                                    <li class="page-item"><button class="page-link" id="15" onclick="solve(this)"> <span class="pages">15<span></button ></li>
                                                        <li class="page-item"><button class="page-link" id="16" onclick="solve(this)"> <span class="pages">16<span></button ></li>
                                                      <li class="page-item"><a class="page-link" href="#"> <span class="pages"><i class="fa fa-chevron-right" aria-hidden="true"></i> <span></a ></li>
                                  </ul>
                                </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 ">
                    <div class="legend-option">
                      <p><strong> Legend</strong></p>
                      <p> <span class="skip"> <i class="fa fa-square" aria-hidden="true"></i></span> Skip</p>
                      <p>  <span  class="Current"> <i class="fa fa-square" aria-hidden="true"></i></span> Current</p>
                      <p> <span  class="Attempted"><i class="fa fa-square" aria-hidden="true"></i></span> Attempted</p>
                      <p>  <span  class="not-Attempted"> <i class="fa fa-square" aria-hidden="true"></i></span> Not Attempted</p>
                      
                     </div>
                </div>
            </div>
           
     </div>
</section>
<?php include 'footer.php'?>
</body>
</html>