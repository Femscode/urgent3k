<style>html,body { padding: 0; margin:0; }</style>
<div style="font-family:Arial,Helvetica,sans-serif; line-height: 1.5; font-weight: normal; font-size: 15px; color: #2F3044; min-height: 100%; margin:0; padding:0; width:100%; background-color:#edf2f7">
	<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse:collapse;margin:0 auto; padding:0; max-width:600px">
		<tbody>
			<tr>
				<td align="center" valign="center" style="text-align:center; padding: 40px">
					
                        <h3>CT_Taste</h3>
						{{-- <img src="https://cthostel.com/myimages/funaablogo.png" style="height:35px;width:150px" alt="logo"> --}}
							<tr>
								<td align="left" valign="center">
									<div style="text-align:left; margin: 0 20px; padding: 40px; background-color:#ffffff; border-radius: 6px">
										<!--begin:Email content-->
										<div style="padding-bottom: 30px; font-size: 17px;">
											<strong>Reset Your Pin.</strong>
										</div>
										<div style="padding-bottom: 30px"><p>
                                        Hi, <strong>{{$user->name}}</strong> below is your token to reset your pin, it expires in 5 minutes.</p>
										
										
										<a style="display:inline-block;text-align:center;padding:0.75575rem 1.3rem;font-size:0.925rem;line-height:1.5;border:0px;margin-right:0.75rem!important;font-weight:600!important;outline:none!important;vertical-align:middle" href='/'>{{ $token }} </a>
										
										   </div>
										
									   <div style="border-bottom: 1px solid #eeeeee; margin: 15px 0">
									<a style='color:red' href='https://vtubiz.com/reset-pin-with-token'>Click To Reset Pin</a>
										</div>
									
										
									</div>
								</td>
							</tr>
						</img>
					</a>
				</td>
			</tr>
		</tbody>
	</table>
</div>