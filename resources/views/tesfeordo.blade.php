<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('scss/main.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.flaticon.com/path-to-flaticon-css-file.css">
    <title>TES FE ORDO</title>
</head>
<header>
    <div class="container">
        <div class="logo">
            <img src="/img/logo.png" alt="Green Haven Project">
        </div>
        <nav>
            <ul>
                <li><a href="#">About Green Haven</a></li>
                <li><a href="#">Event Details</a></li>
                <li><a href="#">Our Sponsors</a></li>
                <li><a href="#">Leaderboard</a></li>
            </ul>
        </nav>
        <button class="button1">Plant a Mangrove</button>
    </div>
</header>

<body>
    <section class="hero">
        <div class="content-hero">
            <button class="button2">Green Haven Project - Mangrove</button>
            <h1 style="margin: 16px 0px 30px 0px; text-align: left;">Green Horizons Await, Join Us in
                Planting 10,000 Mangroves!</h1>
            <section class="progress-container">
                <div class="progress-content">
                    <img src="/img/plant.png" alt="plant" style="flex-basis: 10%; width: 50px; height: 40px;">
                    <div style="color: #336913">
                        <span style="font-size: 24px; font-weight: bold; flex-basis: 40%;">5,690</span> / 10,000 Pohon
                    </div>
                    <button class="button3">Support Our Mission &#8250;</button>
                </div>
                <div class="progress-bar">
                    <div class="progress"></div>
                </div>
            </section>
        </div>
        <img src="/img/mangrove.jpg" alt="mangrove" style="width:100%; height: auto;">
    </section>
    <section class="leaderboard-container">
        <div class="content2">
            <h2 style="font-size: 27; margin: 0px; ">Leaderboard</h2>
            <div class="leaderboard-tabs">
                <button class="button4">Most Donation</button>
                <button class="button5">Most Recent</button>
            </div>
            <ul class="list">
                <li class="item">
                    <span class="number" style="background-color: #336913;">01</span>
                    <img src="/img/planet-earth 1.png" alt="planet-earth 1" class="images">
                    <div class="info">
                        <span class="title">Mangrove Maven</span>
                        <span class="name">Budi Hartanto</span>
                    </div>
                    <div class="count">
                        <img src="img/plant.png" alt="plant" class="plant-icon">
                        <span class="number">350</span>
                        <span class="text">Pohon</span>
                    </div>
                </li>
                <li class="item">
                    <span class="number" style="background-color: #336913;">02</span>
                    <img src="/img/planet-earth 1.png" alt="planet-earth 1" class="images">
                    <div class="info">
                        <span class="title">Mangrove Maven</span>
                        <span class="name">Dewi Sartika</span>
                    </div>
                    <div class="count">
                        <img src="img/plant.png" alt="plant" class="plant-icon">
                        <span class="number">330</span>
                        <span class="text">Pohon</span>
                    </div>
                </li>
                <li class="item">
                    <span class="number" style="background-color: #336913;">03</span>
                    <img src="/img/planet-earth 1.png" alt="planet-earth 1" class="images">
                    <div class="info">
                        <span class="title">Mangrove Maven</span>
                        <span class="name">Eko Wahyudi</span>
                    </div>
                    <div class="count">
                        <img src="img/plant.png" alt="plant" class="plant-icon">
                        <span class="number">200</span>
                        <span class="text">Pohon</span>
                    </div>
                </li>
                <li class="item">
                    <span class="number" style="background-color: #85BB50;">04</span>
                    <img src="/img/planet-earth 2.png" alt="planet-earth 1" class="images">
                    <div class="info">
                        <span class="title">Mangrove Maven</span>
                        <span class="name">Rina Kartika</span>
                    </div>
                    <div class="count">
                        <img src="img/plant.png" alt="plant" class="plant-icon">
                        <span class="number">200</span>
                        <span class="text">Pohon</span>
                    </div>
                </li>
                <li class="item">
                    <span class="number" style="background-color: #A7CC05;">05</span>
                    <img src="/img/planet-earth 2.png" alt="planet-earth 1" class="images">
                    <div class="info">
                        <span class="title">Mangrove Maven</span>
                        <span class="name">Agus Prasetyo</span>
                    </div>
                    <div class="count">
                        <img src="img/plant.png" alt="plant" class="plant-icon">
                        <span class="number">140</span>
                        <span class="text">Pohon</span>
                    </div>
                </li>
                <li class="item">
                    <span class="number" style="background-color: #A7CC05;">06</span>
                    <img src="/img/planet-earth 3.png" alt="planet-earth 1" class="images">
                    <div class="info">
                        <span class="title">Mangrove Maven</span>
                        <span class="name">Irfan Setiawan</span>
                    </div>
                    <div class="count">
                        <img src="img/plant.png" alt="plant" class="plant-icon">
                        <span class="number">80</span>
                        <span class="text">Pohon</span>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <section>
        <img src="img/footer.png" alt="sponsor" width="100%">
    </section>
    <section class="about">
        <div class="content-about">
            <div class="logo-about">
                <img src="img/cont2.png" alt="JCI Logo">
            </div>
            <h1>About Green
                Haven Project</h1>
            <p>The Green Haven Project - Mangrove aims to restore coastal ecosystems and raise awareness by planting
                mangroves and educating participants about the importance of these areas. This six-hour event will
                involve
                JCI members, local farmers, and students, focusing on combating beach erosion and promoting ESG values.
            </p>
        </div>
        <div class="columnimages">
            <div class="column">
                <img src="img/before mangroves were planted.jpg" alt="Before mangroves were planted" class="imgs">
                <h3 style="font-size: 22px; line-height: 33px;">Before mangroves were planted</h3>
            </div>
            <div class="column">
                <img src="img/after mangroves were planted.jpg" alt="After mangroves were planted" class="imgs">
                <h3 style="font-size: 22px; line-height: 33px;">After mangroves were planted</h3>
            </div>
        </div>
        <div>
            <img src="img/transformation.png" alt="Transformation" class="transformation">
        </div>
    </section>
    <section class="event">
        <div class="content-event">
            <h1>Event Summary</h1>
            <p>We give you a brief overview of the event to give you a glimpse of what we're doing in the Green Haven
                Project, download the detailed PDF to see how you can get involved
            </p>
        </div>
        <div class="event-box">
            <div class="event-details">
                <p class="date">26/04/2024</p>
                <p class="time">08:00 - 11:00 WIB</p>
                <div class="box-description">
                    <p class="description">
                        Join the impactful journey of planting mangroves, where you'll learn, collaborate with locals,
                        earn
                        recognition, and share your story through media coverage.
                    </p>
                </div>
                <div style="text-align: left;">
                    <button class="button3">
                        <i class="fi fi-tr-file-download"></i>
                        View Event Details
                    </button>
                </div>
            </div>
            <div class="event-image">
                <img src="img/event.jpg" alt="Mangrove Planting Event">
                <div class="navigation">
                    <button-panah class="prev">&#8249;</button-panah>
                    <button-panah class="next">&#8250;</button-panah>
                </div>
            </div>
        </div>
        <div class="steps">
            <div class="step">
                <div class="step-line green"></div>
                <h2 style="font-size: 21px;line-height: 37px;margin-top: 10px;margin-bottom: 10px;">01</h2>
                <div class="step-description">Introducing the beauty of mangroves on a journey to the planting site.
                </div>
            </div>
            <div class="step">
                <div class="step-line grey"></div>
                <h2 style="font-size: 21px;line-height: 37px;margin-top: 10px;margin-bottom: 10px;">02</h2>
                <div class="step-description">Working together with local farmers while planting each mangrove.</div>
            </div>
            <div class="step">
                <div class="step-line grey"></div>
                <h2 style="font-size: 21px;line-height: 37px;margin-top: 10px;margin-bottom: 10px;">03</h2>
                <div class="step-description">Exploring the wonders of mangrove ecotourism, an educational adventure.
                </div>
            </div>
            <div class="step">
                <div class="step-line grey"></div>
                <h2 style="font-size: 21px;line-height: 37px;margin-top: 10px;margin-bottom: 10px;">04</h2>
                <div class="step-description">Receive a plaque & badge, a mark of honor for every tree you plant.</div>
            </div>
            <div class="step">
                <div class="step-line grey"></div>
                <h2 style="font-size: 21px;line-height: 37px;margin-top: 10px;margin-bottom: 10px;">05</h2>
                <div class="step-description">Coverage & documentation by news media, share your story of change!</div>
            </div>
        </div>
    </section>
    <section class="sponsorship">
        <div class="content-sponsorship">
            <h1>Sponsorship Packages</h1>
            <p>Our sponsorship package offers branding, promotional opportunities, and visibility at our event, ideal
                for enhancing company presence and community engagement.
            </p>
        </div>
        <h3 style="font-size: 26px; line-height: 39px; margin-bottom: 30px;">Personal Sponsorship Package</h3>
        <div class="table-sponsorship">
            <table class="membership-table">
                <thead>
                    <tr>
                        <th style="text-align: left">Membership Tier</th>
                        <th>Min. Seeds</th>
                        <th>Min. Buy</th>
                        <th>Benefits</th>
                        <th>Donors</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="text-align: left"><img src="img/planet-earth 4.png" alt="Seedling Scout"> Seedling
                            Scout</td>
                        <td>5 Seeds</td>
                        <td>IDR 75K</td>
                        <td>Badge</td>
                        <td>4,900 Donors</td>
                        <td><a href="#" class="button6">Support Our Mission &#8250;</a></td>
                    </tr>
                    <tr>
                        <td style="text-align: left"><img src="img/planet-earth 3.png" alt="Sapling Savior"> Sapling
                            Savior</td>
                        <td>10 Seeds</td>
                        <td>IDR 150K</td>
                        <td>Badge + Pin</td>
                        <td>4,300 Donors</td>
                        <td><a href="#" class="button6">Support Our Mission &#8250;</a></td>
                    </tr>
                    <tr>
                        <td style="text-align: left"><img src="img/planet-earth 5.png" alt="Tree Titan"> Tree Titan
                        </td>
                        <td>20 Seeds</td>
                        <td>IDR 300K</td>
                        <td>Badge + Pin</td>
                        <td>15,000 Donors</td>
                        <td><a href="#" class="button6">Support Our Mission &#8250;</a></td>
                    </tr>
                    <tr>
                        <td style="text-align: left"><img src="img/planet-earth 6.png" alt="Mangrove Master">
                            Mangrove
                            Master</td>
                        <td>50 Seeds</td>
                        <td>IDR 750K</td>
                        <td>Badge + Pin + Bag</td>
                        <td>5,000 Donors</td>
                        <td><a href="#" class="button6">Support Our Mission &#8250;</a></td>
                    </tr>
                    <tr>
                        <td style="text-align: left"><img src="img/planet-earth 2.png" alt="Guardian Of The Grove">
                            Guardian Of The Grove</td>
                        <td>100 Seeds</td>
                        <td>IDR 1,500K</td>
                        <td>Badge + Pin + Bag</td>
                        <td>300 Donors</td>
                        <td><a href="#" class="button6">Support Our Mission &#8250;</a></td>
                    </tr>
                    <tr>
                        <td style="text-align: left"><img src="img/planet-earth 1.png" alt="Mangrove Maven"> Mangrove
                            Maven</td>
                        <td>200 Seeds</td>
                        <td>IDR 3,000K</td>
                        <td>Badge + Pin + Bag</td>
                        <td>10 Donors</td>
                        <td><a href="#" class="button6">Support Our Mission &#8250;</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <h3 style="font-size: 26px; line-height: 39px; margin-bottom: 30px;">Corporate Sponsorship Package</h3>
        <table class="benefits-table">
            <thead>
                <tr>
                    <th>Benefits</th>
                    <th>Eco Trailblazers</th>
                    <th>Green Innovators</th>
                    <th>Eco Vanguard</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Price</td>
                    <td>15 Million IDR</td>
                    <td>30 Million IDR</td>
                    <td>45 Million IDR</td>
                </tr>
                <tr>
                    <td>CO₂ Sequestration</td>
                    <td>22.5 ton/year</td>
                    <td>45 ton/year</td>
                    <td>67.5 ton/year</td>
                </tr>
                <tr>
                    <td>Number of Trees</td>
                    <td>1000 Trees</td>
                    <td>2000 Trees</td>
                    <td>3000 Trees</td>
                </tr>
                <tr>
                    <td>Logo on JCI Banner</td>
                    <td><span class="checkmark">&#10003;</span></td>
                    <td><span class="checkmark">&#10003;</span></td>
                    <td><span class="checkmark">&#10003;</span></td>
                </tr>
                <tr>
                    <td>Logo on Communal Stainless Plate</td>
                    <td><span class="checkmark">&#10003;</span></td>
                    <td><span class="checkmark">&#10003;</span></td>
                    <td><span class="checkmark">&#10003;</span></td>
                </tr>
                <tr>
                    <td>Considered as Main Sponsor</td>
                    <td><span class="checkmark">&#10003;</span></td>
                    <td><span class="checkmark">&#10003;</span></td>
                    <td><span class="checkmark">&#10003;</span></td>
                </tr>
                <tr>
                    <td>Dedicated Stainless Plate</td>
                    <td></td>
                    <td><span class="checkmark">&#10003;</span></td>
                    <td><span class="checkmark">&#10003;</span></td>
                </tr>
                <tr>
                    <td>Report Update on Planted Trees</td>
                    <td></td>
                    <td><span class="checkmark">&#10003;</span></td>
                    <td><span class="checkmark">&#10003;</span></td>
                </tr>
                <tr>
                    <td>Logo on Event Clothings</td>
                    <td></td>
                    <td></td>
                    <td><span class="checkmark">&#10003;</span></td>
                </tr>
            </tbody>
            <tfoot>
                <tr class="donation-row">
                    <td>Make a Donation</td>
                    <td><a href="#" class="button7">Support Our Mission &#8250;</a></td>
                    <td><a href="#" class="button7">Support Our Mission &#8250;</a></td>
                    <td><a href="#" class="button7">Support Our Mission &#8250;</a></td>
                </tr>
            </tfoot>
        </table>
    </section>
    <section class="donation-section">
        <div class="content-donation">
            <h1 style="font-size: 40px;">Donate Today and be a Guardian of the Green Belt.</h1>
            <p style="font-size: 21px; margin-bottom: 0px;">Join us in our mission to rejuenate and protect our
                shorelines by donating to
                our mangrove planting project.</p>
            <a href="#" class="button8">Support Our Mission &#8250;</a>
        </div>
        <div class="donation-images">
            <img src="img/Mangrove Planting 1.png" alt="Mangrove Planting 1" class="img-large">
            <img src="img/Mangrove Planting 2.png" alt="Mangrove Planting 2" class="img-medium">
            <img src="img/Mangrove Planting 3.png" alt="Mangrove Planting 3" class="img-small">
            <img src="img/Mangrove Planting 4.png" alt="Mangrove Planting 4" class="img-medium">
            <img src="img/Mangrove Planting 5.png" alt="Mangrove Planting 5" class="img-large">
        </div>
    </section>
</body>

<footer>
    <div class="footer">
        <h2 style="font-size: 13">Nama yang mengerjakan Test: Trinita Risqi Widiyanti</h2>
    </div>
</footer>

</html>
