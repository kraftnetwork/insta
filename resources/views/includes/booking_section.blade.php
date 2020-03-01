<section class="booking payment sections mb-5" id="section-2" style="display: none;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="payForm" style="width:75%;margin-right: 20%;margin-left: 12%;} ">
                    <div class="booking-form booking-outer">
                        <div class="payment-info detail">
                            <div class="row">
                                <div class="col-xs-12"><h3>Complete Your booking</h3></div>
                                <div class="col-md-5">
                                    <img src="{{asset($tour->tourImages[0]->Image_url)}}" alt="Images">
                                </div>
                                <div class="col-md-7">
                                    <table>
                                        <tbody>
                                        <tr>
                                            <td class="title">Total Cost</td>
                                            <td class="b-id">AED <span id="booking-cost"></span></td>
                                        </tr>
                                        <tr>
                                            <td class="title">Total People</td>
                                            <td>5</td>
                                        </tr>
                                        <tr>
                                            <td class="title">Arrival Date</td>
                                            <td>13 August 2019</td>
                                        </tr>
                                        <tr>
                                            <td class="title">Departure Date</td>
                                            <td>13 August 2019</td>
                                        </tr>

                                        <tr>
                                            <td class="title">Travel Insurance</td>
                                            <td>Yes</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <form>
                            <div class="row">
                                <h3>YOUR PERSONAL DETAILS</h3>
                                <div class="form-group col-xs-12">
                                    <label>Name:</label>
                                    <input type="text" class="form-control" id="Name" placeholder="Enter full name ">
                                </div>
                                <div class="form-group col-xs-6">
                                    <label>Email:</label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter your email">
                                </div>
                                <div class="form-group col-xs-6 col-left-padding">
                                    <label>Phone Number:</label>
                                    <input type="text" class="form-control" id="phnumber" placeholder="Phone Number">
                                </div>
                                <div class="form-group col-xs-6">
                                    <label>Address:</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group col-xs-6 col-left-padding">
                                    <label>Country</label>
                                    <select style="padding: 10px 20px;height: 40px;">
                                        <option value="Choose">CHoose Country </option>
                                        <option value="aus">Aistralia</option>
                                        <option value="other">Unites State</option>
                                        <option value="other">Dubai</option>
                                        <option value="other">Etc</option>
                                    </select>
                                </div>

                                <div class="form-group col-xs-12">
                                    <label>Extral Notes:</label>
                                    <textarea name="comment" form="usrform">Enter your comment here...</textarea>

                                </div>
                                <div class="col-xs-12">
                                    <div class="comment-btn">
                                        <a href="#" class="btn-blue btn-red">Pay Now</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </div>
    <br>
    <br>
</section>