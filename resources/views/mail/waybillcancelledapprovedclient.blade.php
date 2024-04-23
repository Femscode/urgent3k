<!doctype html>

<body>
    <style>
        html,
        body {
            padding: 0;
            margin: 0;
        }
    </style>
    <div
        style="font-family:Arial,Helvetica,sans-serif; line-height: 1.5; font-weight: normal; font-size: 15px; color: #2F3044; min-height: 100%; margin:0; padding:0; width:100%; background-color:#edf2f7">
        <table cellpadding="0" cellspacing="0" width="100%"
            style="border-collapse:collapse;margin:0 auto; padding:0; max-width:600px">
            <tbody>

                <td style='text-align:center'>
                    <div
                        style="text-align:left; margin: 0 20px; padding: 40px; background-color:#ffffff; border-radius: 6px">
                        <!--begin:Email content-->
                        <div style="padding-bottom: 30px; font-size: 17px;">
                            <strong>Waybill ({{ $ref }}) Cancellation Approved!</strong>
                        </div>
                        <div style="padding-bottom: 30px">
                            <p>
                                Hi, <strong>{{$name}}</strong> your waybill({{ $ref }}), cancellation has been approved by client!
                              Your client now have access to withdraw funds.</p>


                            <div
                                style="display:inline-block;text-align:left;padding:0.75575rem 1.3rem;font-size:0.925rem;line-height:1.5;border:0px;margin-right:0.75rem!important;font-weight:600!important;outline:none!important;vertical-align:middle">

                                <h3>Waybill Details</h3>
                                <ul>
                                    <li>Waybill Id : {{ $ref }}</li>
                                    <li>Product Name : {{ $waybill->product_name }}</li>
                                    <li>Amount : NGN{{ number_format($waybill->totalamount) }}</li>
                                    <li>Client Name : {{ $waybill->client->name }}</li>
                                    <li>Client Phone Number : {{ $waybill->client->phone }}</li>
                                </ul>
                            </div>

                        </div>


                        <div style="padding-bottom: 40px; text-align:center;">
                            <a href="https://securewaybill.com/{{ $ref }}" rel="noopener" target="_blank" rel="noopener"
                                style="text-decoration:none;display:inline-block;text-align:center;padding:0.75575rem 1.3rem;font-size:0.925rem;line-height:1.5;border-radius:0.35rem;color:#ffffff;background-color:#009EF7;border:0px;margin-right:0.75rem!important;font-weight:600!important;outline:none!important;vertical-align:middle"
                                target="_blank">More Info</a>
                        </div>

                        <div style="padding-bottom: 40px; text-align:center;">
                            <p>If you did not initiate this transaction, click here to report action</p>
                            <a href="https://wa.me/2349058744473?text=Hi,%20I%20am%20here%20to%20report%20a%20transaction%20on%20SECUREWAYBILL..."
                                rel="noopener" target="_blank" rel="noopener"
                                style="text-decoration:none;display:inline-block;text-align:center;padding:0.75575rem 1.3rem;font-size:0.925rem;line-height:1.5;border-radius:0.35rem;color:#ffffff;background-color:#dc3545;border:0px;margin-right:0.75rem!important;font-weight:600!important;outline:none!important;vertical-align:middle"
                                target="_blank">Report Action</a>
                        </div>

                        <div style="border-bottom: 1px solid #eeeeee; margin: 15px 0"></div>


                        <div style="border-bottom: 1px solid #eeeeee; margin: 15px 0"></div>


                        <!--end:Email content-->
                        <div style="padding-bottom: 10px">Sincerely,
                            <br>SECUREWAYBILL.
                            <tr>
                                <td style="font-size: 13px; text-align:center;padding: 20px; color: #6d6e7c;">

                                    <p>Copyright ©
                                        <a rel="noopener" href='https://securewaybill.com'
                                            target="_blank">securewaybill.com</a>.
                                    </p>
                                </td>
                            </tr>
                        </div>
                    </div>
                </td>
               
            </tbody>
        </table>
    </div>