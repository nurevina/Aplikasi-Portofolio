@extends('layouts/index')
@section('css')
<link rel="stylesheet" href="{{asset('css/style.css')}}">
@stop
@section('content')

<!------HEADER---->
<div class="header">
    <div class="row">
        <div class="kiri">
                <h1>Make Your Dream<br>Come True!</h1>
                <p>Geevent is a portfolio platform for event organizers, and makes it easy <br>for anyone to find their wedding inspiration. With Geevent you can <br>explore the design of your dreams. Find and create your <br>beautiful inspiration, Now!</p>
                <a href="registration.php" class="button">Get started</a>
        </div>
        <div class="kanan">
                <img src="img/illustrator.png" width="730px">
        </div>
    </div>
</div>

<!------BIRU---->
<div class="navy">
    <div class="navBlue">
        <ul>
            <li><a href="">Recently View </a></li>
            <li><a href="">Inspiration Update </a></li>
            <li><a href="">Wedding Organizer </a></li>
            <li><a href="">Article </a></li>
            <li><a href="">More </a></li>
        </ul>
    </div>
</div>

<!------Recent---->
    <div class="recent">
        <div class="small-container">
            <div class="row1">
                <div class="col4">
                    <img src="pict/minimalist1.jpeg" width="350px">
                </div>
                <div class="col4">
                    <img src="pict/rustic.jpeg" width="170px">
                </div>
                <div class="col4">
                    <img src="pict/minimalist2.jpeg" width="280px">
                </div>
                <div class="col4">
                    <img src="pict/floral.png" width="390px">
                </div>
            </div>
            <div class="row2">
                <div class="text1">
                    <h4 href="">Minimalist</h4>
                </div>
                <div class="text2">
                    <h4 href="">Rustic</h4>
                </div>
                <div class="text3">
                    <h4 href="">Minimalist</h4>
                </div>
                <div class="text4">
                    <h4 href="">Floral</h4>
                </div>
            </div>
        </div>
    </div>

    <!------pictures------>
    <div class="pict">
        <div class="smallContainer">
            <h2 class="title">You May Like</h2>
            <div class="option">
                <div class="opt1">
                    <a href="">All</a>
                </div>
                <div class="opt1">
                    <a href="">Monocrhome</a>
                </div>
                <div class="opt1">
                    <a href="">Colorfull</a>
                </div>
                <div class="opt1">
                    <a href="">Vintage</a>
                </div>
                <div class="opt1">
                    <a href="">Rustic</a>
                </div>
                <div class="opt1">
                    <a href="">Elegant</a>
                </div>
                <div class="opt1">
                    <a href="">Classic</a>
                </div>
            </div>
            
            <div class="pictures">
                @foreach($data as $product)
                <div class="pict1">
                    <img src="pict/{{$product->image_product}}" style="width: 400px;" >
                    <h4>{{$product->vendor['nama_vendor']}}</h4>
                    <div class="rating">
                        <img src="img/love.png" width="15px">
                        <img src="img/love.png" width="15px">
                        <img src="img/love.png" width="15px">
                        <img src="img/love.png" width="15px">
                        <img src="img/love.png" width="15px">
                    </div>
                </div>
                @endforeach
                <!-- <div class="pict1">
                    <img src="pict/laura.png" width="400px">
                    <h4>Laura Wedding</h4>
                    <div class="rating">
                        <img src="img/love.png" width="15px">
                        <img src="img/love.png" width="15px">
                        <img src="img/love.png" width="15px">
                        <img src="img/love.png" width="15px">
                        <img src="img/love.png" width="15px">
                    </div>
                </div>
                <div class="pict1">
                    <img src="pict/lucinta.png" width="400px">
                    <h4>Lucinta Wedding</h4>
                    <div class="rating">
                        <img src="img/love.png" width="15px">
                        <img src="img/love.png" width="15px">
                        <img src="img/love.png" width="15px">
                        <img src="img/love.png" width="15px">
                        <img src="img/strokeLove.png" width="15px">
                    </div>
                </div> -->
                
                <div class="pict1">
                    <img src="pict/frm.id.png" width="400px">
                    <h4>Frm.id</h4>
                    <div class="rating">
                        <img src="img/love.png" width="15px">
                        <img src="img/love.png" width="15px">
                        <img src="img/love.png" width="15px">
                        <img src="img/love.png" width="15px">
                        <img src="img/strokeLove.png" width="15px">
                    </div>
                </div>
                <div class="pict1">
                    <img src="pict/nolicdecor.png" width="400px">
                    <h4>Nolic Decor</h4>
                    <div class="rating">
                        <img src="img/love.png" width="15px">
                        <img src="img/love.png" width="15px">
                        <img src="img/love.png" width="15px">
                        <img src="img/love.png" width="15px">
                        <img src="img/strokeLove.png" width="15px">
                    </div>
                </div>
                <div class="pict1">
                    <img src="pict/love story wedding.png" width="400px">
                    <h4>Love Story Wedding</h4>
                    <div class="rating">
                        <img src="img/love.png" width="15px">
                        <img src="img/love.png" width="15px">
                        <img src="img/love.png" width="15px">
                        <img src="img/love.png" width="15px">
                        <img src="img/love.png" width="15px">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-------offer----->
    <div class="offer">
        <div class="slideshow-container">

            <div class="mySlides fade">
                <div class="row">
                    <div class="col-2">
                        <div class="numbertext">1 / 5</div>
                        <img src="img/news1.jpeg" style="width:600px">
                    </div>
                    <div class="col-2">
                        <p>News Update</p>
                        <small>by Jen Glantz | Published on 01/16/19</small>
                        <h1>Real Brides Share Their Biggest Piece of Wedding Day Advice </h1>
                        <small>You've read all the bridal books there are to read and<br>
                                downloaded an embarrassing number of planning apps. But you <br>
                                can always use more big day advice before you walk down the <br>
                                aisle—right? We asked nine real brides who've already been there, <br>
                                done that to shell out their best wedding day tips. So from one<br>
                                bride to another, listen up.<br></small>

                        <div class="buttonBooking">
                            <a href="news1.html" class="btn">See More</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mySlides fade">
                <div class="row">
                    <div class="col-2">
                        <div class="numbertext">2 / 5</div>
                        <img src="img/news2.png" style="width:600px">
                    </div>
                    <div class="col-2">
                        <p>News Update</p>
                        <small>by Margauz Lushing | Updated on 03/11/21</small>
                        <h1>Exclusive: See TikTok's Dance Couple's Choreographed Wedding Entrance</h1>
                        <small>YIf there’s one thing we’ve learned from TikTok, it’s that no one<br>
                                forgets an epic dance move. From viral choreography to joyful wedding<br>
                                party entrances, the dance floor has become one of the most popular<br>
                                wedding moments to capture in recent years—and social media has only<br>
                                made the stakes higher.<br></small>

                        <div class="buttonBooking">
                            <a href="news2.html" class="btn">See More</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mySlides fade">
                <div class="row">
                    <div class="col-2">
                        <div class="numbertext">3 / 5</div>
                        <img src="img/news3.jpeg" style="width:600px">
                    </div>
                    <div class="col-2">
                        <p>News Update</p>
                        <small>by Charlotte Grainger | Published on 10/27/20</small>
                        <h1>How to Play the Wedding Shoe Game</h1>
                        <small>Planning the perfect wedding reception? One way to inject some extra<br>
                                fun into the event is to play the Wedding Shoe Game. This massively popular<br>
                                wedding reception activity is sure to make the guests giggle and kick things<br>
                                off to a lively start. Here’s what you should know. <br></small>

                        <div class="buttonBooking">
                            <a href="news3.html" class="btn">See More</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mySlides fade">
                <div class="row">
                    <div class="col-2">
                        <div class="numbertext">4 / 5</div>
                        <img src="img/news4.jpeg" style="width:600px">
                    </div>
                    <div class="col-2">
                        <p>News Update</p>
                        <small>by Elle Cashin | Updated on 04/01/22</small>
                        <h1>Love Looks Like This: Chèrie Chan and Jessey Lee's Secret Marriage</h1>
                        <small>Brides is committed to guiding ALL couples through not only their wedding<br>
                                planning journey, but through relationship milestones and ups and downs. Every <br>
                                love story is beautiful, has its own distinct history, and its own trials—there's<br>
                                no relationship that looks the same. <br></small>
                        <div class="buttonBooking">
                            <a href="news4.html" class="btn">See More</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mySlides fade">
                <div class="row">
                    <div class="col-2">
                        <div class="numbertext">5 / 5</div>
                        <img src="img/news5.jpeg" style="width:650px">
                    </div>
                    <div class="col-2">
                        <p>News Update</p>
                        <small>by Kelsey Mulvey | Updated on 04/04/22</small>
                        <h1>15 Pictures of the Wedding Party You Need to Take</h1>
                        <small>Sure, the couple is the star of the show, but the wedding party is right<br>
                                behind them. These VIPs are more than siblings and friends; they’re the jokesters,<br>
                                the revelers, the joyful criers, and the doting buds who bring out the best in<br>
                                the couple. These authentic, natural reactions also lead to some dazzling<br>
                                wedding party photos.   <br></small>
                        <div class="buttonBooking">
                            <a href="news5.html" class="btn">See More </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <br>

        <div style="text-align:center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
        <br>
        <script>
            var slideIndex = 0;
            showSlides();

            function showSlides() {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > slides.length) {
                    slideIndex = 1
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
                setTimeout(showSlides, 3000);
            }
        </script>
    </div>


    <!------testimonial----->
    <div class="testimonial">
        <div class="small_container">
            <div class="row">
                <div class="col-3">
                    <div class="rating">
                        <img src="img/love.png" width="15px">
                        <img src="img/love.png" width="15px">
                        <img src="img/love.png" width="15px">
                        <img src="img/love.png" width="15px">
                        <img src="img/love.png" width="15px">
                    </div>
                    <p>I was greatly helped by Geevent. Finding my dream<br> wedding inspiration to be closer. It's amazing!<br><br><br></p>

                    <img src="pict/test1.png" width="150px">
                    <h3><br>Michele Laurenza</h3>
                </div>
                <div class="col-3">
                    <div class="rating">
                        <img src="img/love.png" width="15px">
                        <img src="img/love.png" width="15px">
                        <img src="img/love.png" width="15px">
                        <img src="img/love.png" width="15px">
                        <img src="img/strokeLove.png" width="15px">
                    </div>
                    <p>Very interesting. We can get to know the other EO's better.<br> Collaborate, promote, exchange inspiration, and easily<br> upload portfolios with Geevent.<br><br></p>

                    <img src="pict/test3.png" width="150px">
                    <h3><br>Sean Parker</h3>
                </div>
                <div class="col-3">
                    <div class="rating">
                        <img src="img/love.png" width="15px">
                        <img src="img/love.png" width="15px">
                        <img src="img/love.png" width="15px">
                        <img src="img/love.png" width="15px">
                        <img src="img/love.png" width="15px">
                    </div>
                    <p>Hello Wedding Organizers! Let's unite each other.<br> Uploading a portfolio is very easy so that it becomes <br>a good promotional medium. thank you geevent<br><br></p>

                    <img src="pict/test2.png" width="150px">
                    <h3><br>Mabel Joe</h3>
                </div>
            </div>
        </div>
    </div>

     <!--Bootstrap modal -->
     <div class="modal fade" id="exampleModal" tabindex="-1"
     role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <!-- Modal heading -->
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">
                     GeeksforGeeks
                 </h5>
                 <button type="button" class="close"
                     data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">
                         ×
                     </span>
                 </button>
             </div>
             <!-- Modal body with image -->
             <div class="modal-body">
                 <img src="gfg.png" />
             </div>
         </div>
     </div>
 </div>
@endsection