@extends('backend.layouts.app')
@section('content')
    <main id="main" class="main">
        @include('backend.layouts.message')
        <div class="pagetitle">
            <h1>Results</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">

                        <!-- Sales Card -->
                        <!-- <div class="col-xxl-4 col-md-6">
                  <div class="card info-card sales-card">

                    <div class="filter">
                      <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <li class="dropdown-header text-start">
                          <h6>Filter</h6>
                        </li>

                        <li><a class="dropdown-item" href="#">Today</a></li>
                        <li><a class="dropdown-item" href="#">This Month</a></li>
                        <li><a class="dropdown-item" href="#">This Year</a></li>
                      </ul>
                    </div>

                    <div class="card-body">
                      <h5 class="card-title">Sales <span>| Today</span></h5>

                      <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                          <i class="bi bi-cart"></i>
                        </div>
                        <div class="ps-3">
                          <h6>145</h6>
                          <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                        </div>
                      </div>
                    </div>

                  </div>
                </div>End Sales Card -->

                        <!-- Revenue Card -->
                        <!-- <div class="col-xxl-4 col-md-6">
                  <div class="card info-card revenue-card">

                    <div class="filter">
                      <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <li class="dropdown-header text-start">
                          <h6>Filter</h6>
                        </li>

                        <li><a class="dropdown-item" href="#">Today</a></li>
                        <li><a class="dropdown-item" href="#">This Month</a></li>
                        <li><a class="dropdown-item" href="#">This Year</a></li>
                      </ul>
                    </div>

                    <div class="card-body">
                      <h5 class="card-title">Revenue <span>| This Month</span></h5>

                      <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                          <i class="bi bi-currency-dollar"></i>
                        </div>
                        <div class="ps-3">
                          <h6>$3,264</h6>
                          <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                        </div>
                      </div>
                    </div>

                  </div>
                </div>End Revenue Card -->

                        <!-- Customers Card -->
                        <!-- <div class="col-xxl-4 col-xl-12">

                  <div class="card info-card customers-card">

                    <div class="filter">
                      <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <li class="dropdown-header text-start">
                          <h6>Filter</h6>
                        </li>

                        <li><a class="dropdown-item" href="#">Today</a></li>
                        <li><a class="dropdown-item" href="#">This Month</a></li>
                        <li><a class="dropdown-item" href="#">This Year</a></li>
                      </ul>
                    </div>

                    <div class="card-body">
                      <h5 class="card-title">Customers <span>| This Year</span></h5>

                      <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                          <i class="bi bi-people"></i>
                        </div>
                        <div class="ps-3">
                          <h6>1244</h6>
                          <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

                        </div>
                      </div>

                    </div>
                  </div>

                </div>End Customers Card -->

                        <!-- Reports -->
                        <!-- End Reports -->

                        <!-- Recent Sales -->
                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Results</h5>
                                    <form>
                                        <div class="row pb-3">
                                            <div class="col-3">
                                                <label for="inputPassword5" class="form-label">Sports</label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Select Sports</option>
                                                    <option value="1">Cricket</option>
                                                    <option value="2">ExchGame</option>
                                                    <option value="3">Politics</option>
                                                    <option value="4">Tennis</option>
                                                    <option value="2">Soccer</option>
                                                    <option value="3">Site</option>
                                                    <option value="4">Kabbadi</option>
                                                </select>
                                            </div>
                                            <div class="col-3">
                                                <label for="inputPassword5" class="form-label">Tournaments</label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Select Tournaments</option>
                                                </select>
                                            </div>
                                            <div class="col-3">
                                                <label for="inputPassword5" class="form-label">Matches</label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Select Match</option>
                                                </select>
                                            </div>
                                            <div class="col-3">
                                                <label for="inputPassword5" class="form-label">Markets</label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Select Market</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row pb-3">
                                            <div class="col-2">
                                                <label for="inputPassword5" class="form-label">Form Date</label>

                                                <input type="date" class="form-control" id="dateField"
                                                    name="dateField">
                                            </div>
                                            <div class="col-2">
                                                <label for="inputPassword5" class="form-label">To Date</label>
                                                <input type="date" class="form-control" id="dateField"
                                                    name="dateField">
                                            </div>
                                            <div class="col-8 d-flex py-4">
                                                <div class="form-check ">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label px-2" for="flexCheckDefault">
                                                        Market
                                                    </label>
                                                </div>
                                                <div class="form-check ">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label px-2" for="flexCheckDefault">
                                                        Book Maker
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label px-2" for="flexCheckDefault">
                                                        Manual Odds
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label px-2" for="flexCheckDefault">
                                                        Line Market
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label px-2" for="flexCheckDefault">
                                                        Adv Session
                                                    </label>
                                                </div>

                                            </div>
                                        </div>
                                    </form>

                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">Date</th>
                                                <th scope="col">M.Type</th>
                                                <th scope="col">Market Name</th>
                                                <th scope="col">Results</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row"><a href="#">20/02/2023, 12:00 AM</a></th>
                                                <td>Market</td>
                                                <td>Soccer / Greek Super League / PAOK v AEK Athens / Match Odds</td>
                                                <td>PAOK</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#">20/02/2023, 12:00 AM</a></th>
                                                <td>Market</td>
                                                <td>Tennis / ATP Buenos Aires 2023 / Carlos Alcaraz v Norrie / Match Odds
                                                </td>
                                                <td>Carlos Alcaraz</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#">20/02/2023, 12:00 AM</a></th>
                                                <td>Market</td>
                                                <td>Soccer / Greek Super League / PAOK v AEK Athens / Match Odds</td>
                                                <td>PAOK</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#">20/02/2023, 12:00 AM</a></th>
                                                <td>Market</td>
                                                <td>Tennis / ATP Buenos Aires 2023 / Carlos Alcaraz v Norrie / Match Odds
                                                </td>
                                                <td>Carlos Alcaraz</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#">20/02/2023, 12:00 AM</a></th>
                                                <td>Market</td>
                                                <td>Soccer / Greek Super League / PAOK v AEK Athens / Match Odds</td>
                                                <td>PAOK</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#">20/02/2023, 12:00 AM</a></th>
                                                <td>Market</td>
                                                <td>Soccer / Greek Super League / PAOK v AEK Athens / Match Odds</td>
                                                <td>The Draw</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#">20/02/2023, 12:00 AM</a></th>
                                                <td>Market</td>
                                                <td>Soccer / Greek Super League / PAOK v AEK Athens / Match Odds</td>
                                                <td>PAOK</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#">20/02/2023, 12:00 AM</a></th>
                                                <td>Market</td>
                                                <td>Soccer / Greek Super League / PAOK v AEK Athens / Match Odds</td>
                                                <td>Santa Fe</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div><!-- End Recent Sales -->

                        <!-- Top Selling -->
                        <!-- End Top Selling -->

                    </div>
                </div><!-- End Left side columns -->

                <!-- Right side columns -->
                <!-- <div class="col-lg-4"> -->

                <!-- Recent Activity -->
                <!-- <div class="card">
                <div class="card-body">
                  <h5 class="card-title">OUR CASINO </h5>

                  

                </div>
              </div>End Recent Activity -->

                <!-- Recent Activity -->
                <!-- <div class="card">
                <div class="card-body">
                  <h5 class="card-title">LIVE CASINO GAMES</h5>

                  

                </div>
              </div>End Recent Activity -->

                <!-- Recent Activity -->
                <!-- <div class="card">
                <div class="card-body">
                  <h5 class="card-title">VIRTUAL GAMES</h5>

                  

                </div>
              </div>End Recent Activity -->
                <!--Modal start 1-->
                <div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Chips Setting</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="exampleInputPassword1" class="form-label">Chips Name</label>
                                            <input class="form-control form-control-sm" type="text" placeholder="1000"
                                                aria-label=".form-control-sm example">

                                        </div>
                                        <div class="col-6">
                                            <label for="exampleInputPassword1" class="form-label">Your Chips</label>
                                            <input class="form-control form-control-sm" type="text" placeholder="1000"
                                                aria-label=".form-control-sm example">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="exampleInputPassword1" class="form-label">Chips Name</label>
                                            <input class="form-control form-control-sm" type="text" placeholder="1000"
                                                aria-label=".form-control-sm example">

                                        </div>
                                        <div class="col-6">
                                            <label for="exampleInputPassword1" class="form-label">Your Chips</label>
                                            <input class="form-control form-control-sm" type="text" placeholder="1000"
                                                aria-label=".form-control-sm example">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="exampleInputPassword1" class="form-label">Chips Name</label>
                                            <input class="form-control form-control-sm" type="text" placeholder="1000"
                                                aria-label=".form-control-sm example">

                                        </div>
                                        <div class="col-6">
                                            <label for="exampleInputPassword1" class="form-label">Your Chips</label>
                                            <input class="form-control form-control-sm" type="text" placeholder="1000"
                                                aria-label=".form-control-sm example">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="exampleInputPassword1" class="form-label">Chips Name</label>
                                            <input class="form-control form-control-sm" type="text" placeholder="1000"
                                                aria-label=".form-control-sm example">

                                        </div>
                                        <div class="col-6">
                                            <label for="exampleInputPassword1" class="form-label">Your Chips</label>
                                            <input class="form-control form-control-sm" type="text" placeholder="1000"
                                                aria-label=".form-control-sm example">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="exampleInputPassword1" class="form-label">Chips Name</label>
                                            <input class="form-control form-control-sm" type="text" placeholder="1000"
                                                aria-label=".form-control-sm example">

                                        </div>
                                        <div class="col-6">
                                            <label for="exampleInputPassword1" class="form-label">Your Chips</label>
                                            <input class="form-control form-control-sm" type="text" placeholder="1000"
                                                aria-label=".form-control-sm example">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="exampleInputPassword1" class="form-label">Chips Name</label>
                                            <input class="form-control form-control-sm" type="text" placeholder="1000"
                                                aria-label=".form-control-sm example">

                                        </div>
                                        <div class="col-6">
                                            <label for="exampleInputPassword1" class="form-label">Your Chips</label>
                                            <input class="form-control form-control-sm" type="text" placeholder="1000"
                                                aria-label=".form-control-sm example">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="exampleInputPassword1" class="form-label">Chips Name</label>
                                            <input class="form-control form-control-sm" type="text" placeholder="1000"
                                                aria-label=".form-control-sm example">

                                        </div>
                                        <div class="col-6">
                                            <label for="exampleInputPassword1" class="form-label">Your Chips</label>
                                            <input class="form-control form-control-sm" type="text" placeholder="1000"
                                                aria-label=".form-control-sm example">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="exampleInputPassword1" class="form-label">Chips Name</label>
                                            <input class="form-control form-control-sm" type="text" placeholder="1000"
                                                aria-label=".form-control-sm example">

                                        </div>
                                        <div class="col-6">
                                            <label for="exampleInputPassword1" class="form-label">Your Chips</label>
                                            <input class="form-control form-control-sm" type="text" placeholder="1000"
                                                aria-label=".form-control-sm example">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="exampleInputPassword1" class="form-label">Chips Name</label>
                                            <input class="form-control form-control-sm" type="text" placeholder="1000"
                                                aria-label=".form-control-sm example">

                                        </div>
                                        <div class="col-6">
                                            <label for="exampleInputPassword1" class="form-label">Your Chips</label>
                                            <input class="form-control form-control-sm" type="text" placeholder="1000"
                                                aria-label=".form-control-sm example">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Modal End 1-->
                <!--Modal Start 2-->
                <div class="modal fade " id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Change Password</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="exampleInputPassword1" class="form-label">Old Password</label>
                                            <input class="form-control form-control-sm" type="text"
                                                placeholder="Enter Old Password" aria-label=".form-control-sm example">

                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="exampleInputPassword1" class="form-label">New Password</label>
                                            <input class="form-control form-control-sm" type="text"
                                                placeholder="Enter New Password" aria-label=".form-control-sm example">

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                                            <input class="form-control form-control-sm" type="text"
                                                placeholder="Enter Confirm Password"
                                                aria-label=".form-control-sm example">

                                        </div>
                                    </div>

                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Clear</button>
                                <button type="button" class="btn btn-primary">Change</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Modal End 2-->
                <!--Modal Start 3-->
                <div class="modal fade " id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Terms and Condition</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>AAJ SE TIED MATCH
                                    ME FANCY KA LEN
                                    DEN KARNGE.
                                    1.If you not accept this agreement do not place any bet.
                                    2.Cheating bets deleted automatically or manual. No Claim.
                                    3.Admin decision is final and no claim on it.
                                    4. Batsman Runs (In-Play) Over/Under (back/lay) runs bets will stand after batsman has
                                    faced one ball or is given out before first ball is faced. Score counts if batsman is
                                    Not-Out including if innings is declared. In case of rain, match abandoned etc. settled
                                    bets will be valid.

                                    5.Current/Next Innings Runs Odd/Even Extras and Penalty runs will be included for
                                    settlement purposes.

                                    6.Runs at Fall of 1st Wicket At least one delivery must be bowled, if no wickets fall
                                    bets will be void unless settlement is already determined.

                                    7.Runs at Fall of Next Wicket The total innings runs scored by a team before the fall of
                                    the specified wicket determines the result of the market. If a team declares or reaches
                                    their target then the total amassed will be the result of the market. Bets will be void
                                    should no more play take place following the intervention of rain, or any other delay,
                                    as the ability to reach previous quotes offered will have been removed . In case of
                                    rain, match abandoned etc. settled bets will be valid.

                                    8.We do not accept manual bet.

                                    9.In case of anyone found using two different IDs logged in same IP address his winning
                                    in both account will be cancelled.

                                    Members are not permitted to hold multiple accounts. This includes holding an account
                                    with any associated site operating on the same platform as this site. Where maximum bet
                                    or maximum market limits are imposed, the Site reserves the right to void bets from
                                    accounts found to be exceeding these limits by using multiple accounts across this and
                                    any other associated sites.

                                    10.In case of cheating and betting in unfair rates we will cancel the bet even after
                                    settling.

                                    11.Local fancy are based on Haar - Jeet.

                                    12.Incomplete session will be cancelled but complete session will be settled.

                                    13.In case of match abandoned, cancelled, no result etc. completed sessions will be
                                    settled.

                                    14.Lambi Paari : In 20-20 match entire twenty overs should be bowled, in case of rain or
                                    any delay if even one over is deducted the bets will be cancelled. In One Day match
                                    entire 50 overs should be bowled, in case of rain or any delay if even one over is
                                    deducted the bets will be cancelled.

                                    15.Advance Session,Lambi 1`st Inning Valid Only

                                    16.Total Match Four ,Total Match Siixes,Total Match Runs,Total Match Wides,Total Match
                                    Wicket. If Over Gets Less Then All BET Will Cancel This Rule For Limited Over Matches
                                    Like 20 Overs And 50 Overs Game

                                    17.1st Over Total Runs Prices will be offered for the total runs scored during the 1st
                                    over of the match. Extras and penalty runs will be included. The over must be completed
                                    for bets to stand unless settlement is already determined.

                                    18.Limited Overs Matches - Individual Batsmen Runs or Partnerships In a limited overs
                                    match where an individual batsman or partnership runs are traded in-play and the innings
                                    is curtailed or subject to any reduction in overs, then these markets will be settled at
                                    the midpoint of the last available quote before the overs were reduced. If the innings
                                    resumes at a later time, a new market may be formed. If a client wants a position in the
                                    new market they are required to place a new trade. If there are any subsequent
                                    reductions in overs, exactly the same rules will continue to apply i.e. the market is
                                    settled at the midpoint of the last available quote before the overs were reduced and a
                                    new market may be formed.

                                    19.Test Matches - Individual Batsmen Runs / Partnerships All bets, open or closed, on an
                                    individual batsman or partnership runs shall be void if 50 full overs are not bowled
                                    unless one team has won, is dismissed or declares prior to that point. Bets on
                                    partnership totals make up when the next wicket falls. If a batsman in the relevant
                                    partnership retires hurt, the partnership is treated as continuing between the remaining
                                    batsman and the batsman who comes to the wicket. A partnership is also treated as being
                                    ended by the end of an innings.

                                    20.Due to any technical issue software not work properly at that time we are not
                                    responsible for any loss.

                                    21.KINDLY AVOID JIO INTERNET IN MOBILE WHEN YOU PLACE BET.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>

                            </div>
                        </div>
                    </div>
                </div>
                <!--Modal End 3-->





                <!-- Budget Report -->
                <div class="card d-none">
                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Filter</h6>
                            </li>

                            <li><a class="dropdown-item" href="#">Today</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                            <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                    </div>

                    <div class="card-body pb-0">
                        <h5 class="card-title">Budget Report <span>| This Month</span></h5>

                        <div id="budgetChart" style="min-height: 400px;" class="echart"></div>

                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                var budgetChart = echarts.init(document.querySelector("#budgetChart")).setOption({
                                    legend: {
                                        data: ['Allocated Budget', 'Actual Spending']
                                    },
                                    radar: {
                                        // shape: 'circle',
                                        indicator: [{
                                                name: 'Sales',
                                                max: 6500
                                            },
                                            {
                                                name: 'Administration',
                                                max: 16000
                                            },
                                            {
                                                name: 'Information Technology',
                                                max: 30000
                                            },
                                            {
                                                name: 'Customer Support',
                                                max: 38000
                                            },
                                            {
                                                name: 'Development',
                                                max: 52000
                                            },
                                            {
                                                name: 'Marketing',
                                                max: 25000
                                            }
                                        ]
                                    },
                                    series: [{
                                        name: 'Budget vs spending',
                                        type: 'radar',
                                        data: [{
                                                value: [4200, 3000, 20000, 35000, 50000, 18000],
                                                name: 'Allocated Budget'
                                            },
                                            {
                                                value: [5000, 14000, 28000, 26000, 42000, 21000],
                                                name: 'Actual Spending'
                                            }
                                        ]
                                    }]
                                });
                            });
                        </script>

                    </div>
                </div><!-- End Budget Report -->

                <!-- Website Traffic -->
                <div class="card d-none">
                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Filter</h6>
                            </li>

                            <li><a class="dropdown-item" href="#">Today</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                            <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                    </div>

                    <div class="card-body pb-0">
                        <h5 class="card-title">Website Traffic <span>| Today</span></h5>

                        <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                echarts.init(document.querySelector("#trafficChart")).setOption({
                                    tooltip: {
                                        trigger: 'item'
                                    },
                                    legend: {
                                        top: '5%',
                                        left: 'center'
                                    },
                                    series: [{
                                        name: 'Access From',
                                        type: 'pie',
                                        radius: ['40%', '70%'],
                                        avoidLabelOverlap: false,
                                        label: {
                                            show: false,
                                            position: 'center'
                                        },
                                        emphasis: {
                                            label: {
                                                show: true,
                                                fontSize: '18',
                                                fontWeight: 'bold'
                                            }
                                        },
                                        labelLine: {
                                            show: false
                                        },
                                        data: [{
                                                value: 1048,
                                                name: 'Search Engine'
                                            },
                                            {
                                                value: 735,
                                                name: 'Direct'
                                            },
                                            {
                                                value: 580,
                                                name: 'Email'
                                            },
                                            {
                                                value: 484,
                                                name: 'Union Ads'
                                            },
                                            {
                                                value: 300,
                                                name: 'Video Ads'
                                            }
                                        ]
                                    }]
                                });
                            });
                        </script>

                    </div>
                </div><!-- End Website Traffic -->

                <!-- News & Updates Traffic -->
                <div class="card d-none">
                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Filter</h6>
                            </li>

                            <li><a class="dropdown-item" href="#">Today</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                            <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                    </div>

                    <div class="card-body pb-0">
                        <h5 class="card-title">News &amp; Updates <span>| Today</span></h5>

                        <div class="news">
                            <div class="post-item clearfix">
                                <img src="assets/img/news-1.jpg" alt="">
                                <h4><a href="#">Nihil blanditiis at in nihil autem</a></h4>
                                <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
                            </div>

                            <div class="post-item clearfix">
                                <img src="assets/img/news-2.jpg" alt="">
                                <h4><a href="#">Quidem autem et impedit</a></h4>
                                <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p>
                            </div>

                            <div class="post-item clearfix">
                                <img src="assets/img/news-3.jpg" alt="">
                                <h4><a href="#">Id quia et et ut maxime similique occaecati ut</a></h4>
                                <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>
                            </div>

                            <div class="post-item clearfix">
                                <img src="assets/img/news-4.jpg" alt="">
                                <h4><a href="#">Laborum corporis quo dara net para</a></h4>
                                <p>Qui enim quia optio. Eligendi aut asperiores enim repellendusvel rerum cuder...</p>
                            </div>

                            <div class="post-item clearfix">
                                <img src="assets/img/news-5.jpg" alt="">
                                <h4><a href="#">Et dolores corrupti quae illo quod dolor</a></h4>
                                <p>Odit ut eveniet modi reiciendis. Atque cupiditate libero beatae dignissimos eius...</p>
                            </div>

                        </div><!-- End sidebar recent posts-->

                    </div>
                </div><!-- End News & Updates -->

            </div><!-- End Right side columns -->

            </div>
        </section>

    </main><!-- End #main -->
@endsection
