<table border="0" cellpadding="30" cellspacing="0" align="center" style="margin: 0 auto 0 auto; max-width: 660px; color:#222; background:#ffffff;font-family:<?php echo $font_family; ?>; border-collapse:collapse" class="contenttable">
	<tr>
		<td style="padding:30px; background-color:#ffffff;">
			<table  border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse:collapse" class="contenttable">
				<tr>
					<td  valign="top" style="background-color:#ffffff" class="contenttablecolumns">

						<!-- SIDEBAR AREA -->

						<table border="0" cellspacing="0" cellpadding="0" width="100%" align="left" style="background-color:#ffffff; border-collapse:separate" class="contenttable contenttable_text">

							<?php if ( ! empty( $ticket['WooCommerceEventsTicketLogo'] ) ) : ?>
							<tr>
								<td valign="top" align="left">  

									<!-- LOGO -->
									<img src="<?php echo $ticket['WooCommerceEventsTicketLogo']; ?>" class="logo" alt="<?php echo $ticket['name']; ?>" style="display:inline; width:auto;max-width:100%;" /><br /><br />                                                                                             
								</td>
							</tr>
							<?php endif; ?> 

							<?php if ( ! empty( $ticket['WooCommerceEventsTicketHeaderImage'] ) ) : ?>
							<tr>
								<td valign="top" align="left">  

									<!-- GRAPHIC -->

									<img src="<?php echo $ticket['WooCommerceEventsTicketHeaderImage']; ?>" class="graphic" alt="<?php echo $ticket['name']; ?>" width="660" style="display:block;max-width:660px;width:100%;margin:0 auto 20px;" />                                                       
								</td>
							</tr>
							<?php endif; ?> 

							<tr>
								<td>

									<table border="0" cellspacing="0" cellpadding="0" width="100%" style="font-size: 14px; background-color:#ffffff;border-collapse:collapse" class="contenttable contenttable_text_inner contentheader">

										<tr>
											<td valign="top" class="wide" style="color:#222; line-height:1.4em; font-family:<?php echo $font_family; ?>">                                        
												
													
												<!-- EVENT TITLE -->
												<h2 style="margin:20px 0 10px; padding:0; color:#222; font-size:25px;line-height: 1.4em">
													<?php echo $ticket['name']; ?>
												</h2>

												<!-- EVENT DATE / TIME -->

												<?php if ( $ticket['WooCommerceEventsTicketDisplayDateTime'] != 'off' ) : ?>

													<?php if ( ( isset( $ticket['WooCommerceEventsBookingSlot'] ) || isset( $ticket['WooCommerceEventsBookingDate'] ) ) && $ticket['WooCommerceEventsTicketDisplayBookings'] != 'off' ) : ?>
													
													<h4 style="padding:0; margin:0;color:#222; font-size:16px; line-height: 1.4em; font-weight: bold;">
														<?php echo $ticket['WooCommerceEventsBookingDate']; ?>
													</h4>
													<h4 style="padding:0; margin:0;color:#222; font-size:16px; line-height: 1.4em; font-weight: normal;">
														<?php echo $ticket['WooCommerceEventsBookingSlot']; ?>
													</h4>
													
												<?php else : ?> 

													<h4 style="padding:0; margin:0;color:#222; font-size:16px; line-height: 1.4em; font-weight: bold;">
													
														<?php
														if ( ! empty( $ticket['WooCommerceEventsSelectDate'] ) && ! empty( $ticket['WooCommerceEventsSelectDate'][0] )
														&& $ticket['WooCommerceEventsType'] == 'select' ) :

																$x = 0;
															foreach ( $ticket['WooCommerceEventsSelectDate'] as $selectDate ) :
																if ( $selectDate != '' ) :
																	if ( $x > 0 ) {
																		echo ', ';
																	}
																	echo $selectDate;
																endif;
																	$x++;
																endforeach;

															else :

																if ( ! empty( $ticket['WooCommerceEventsDate'] ) ) :
																	echo $ticket['WooCommerceEventsDate'];
																	if ( ! empty( $ticket['WooCommerceEventsEndDate'] ) ) :
																		echo ' - ' . $ticket['WooCommerceEventsEndDate'];
endif;
																endif;

															endif;
															?>
													</h4>
													<h4 style="padding:0; margin:0;color:#222; font-size:16px; line-height: 1.4em; font-weight: normal;">
														<?php if ( $ticket['WooCommerceEventsType'] !== 'select' || $ticket['WooCommerceEventsSelectGlobalTime'] == 'on' ) : ?>
															<?php echo $ticket['WooCommerceEventsHour']; ?>:<?php echo $ticket['WooCommerceEventsMinutes']; ?><?php echo ( ! empty( $ticket['WooCommerceEventsPeriod'] ) ) ? $ticket['WooCommerceEventsPeriod'] : ''; ?>
															<?php echo ( ! empty( $ticket['WooCommerceEventsTimeZone'] ) ) ? ' ' . $ticket['WooCommerceEventsTimeZone'] : ''; ?>
															<?php if ( $ticket['WooCommerceEventsHourEnd'] != '00' ) : ?>
															- <?php echo $ticket['WooCommerceEventsHourEnd']; ?>:<?php echo $ticket['WooCommerceEventsMinutesEnd']; ?><?php echo ( ! empty( $ticket['WooCommerceEventsEndPeriod'] ) ) ? $ticket['WooCommerceEventsEndPeriod'] : ''; ?>
																<?php echo ( ! empty( $ticket['WooCommerceEventsTimeZone'] ) ) ? ' ' . $ticket['WooCommerceEventsTimeZone'] : ''; ?>
															<?php endif; ?>
														<?php endif; ?>
													</h4> 

												<?php endif; ?> 

												<?php endif; ?>                                                

												<!-- ADD TO CALENDAR BUTTON -->

												<?php if ( $ticket['WooCommerceEventsTicketAddCalendar'] != 'off' ) : ?>

												<table border="0" cellspacing="0" cellpadding="0" width="100%" style="font-size: 14px; background-color:#ffffff;border-collapse:collapse" class="contenttable contenttable_text_inner">                                                                                
													<tr>
														<td align="left" valign="top" width="100%" height="15" style="border-collapse:collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; mso-line-height-rule: exactly; line-height: 15px;"><!--[if gte mso 15]>&nbsp;<![endif]--></td>
													</tr> 
													<tr>
														<td valign="top" style="padding:0; font-family:<?php echo $font_family; ?>">
															<table width="160px" border="0" cellspacing="0" cellpadding="10" align="left" style="border-radius:3px; background-color:<?php echo $ticket['WooCommerceEventsTicketButtonColor']; ?>;border-collapse:collapse" class="addtocart">
																<tr>
																	<td valign="top" align="center">
																		<a href="<?php echo site_url(); ?>/wp-admin/admin-ajax.php?action=fooevents_ics&event=<?php echo $ticket['WooCommerceEventsProductID']; ?>&ticket=<?php echo $ticket['ID']; ?><?php echo ! empty( $ticket['WooCommerceEventsAttendeeEmail'] ) ? '&email=' . urlencode( $ticket['WooCommerceEventsAttendeeEmail'] ) : ''; ?>&ticket=<?php echo $ticket['ID']; ?>" style="color:<?php echo $ticket['WooCommerceEventsTicketTextColor']; ?>;text-decoration:none;font-size:16px"><?php _e( 'Add to calendar', 'woocommerce-events' ); ?></a>
																	</td>
																</tr>                                                    
															</table>
														</td>
													</tr>  

												</table>

												<?php endif; ?>                                                

											</td>
											<td valign="top" align="right" class="wide">  

												<!-- BARCODE OR QR CODE -->
												<?php if ( $ticket['WooCommerceEventsTicketDisplayBarcode'] != 'off' ) : ?>
													<img style="display:block;" src="<?php echo $barcodeURL; ?>" class="code" style="border: solid 1px #eee;" />
												<?php endif; ?>

											</td>
										</tr>                              
										<tr>
											<td align="left" valign="top" width="100%" height="30" colspan="2" style="border-collapse:collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; mso-line-height-rule: exactly; line-height: 30px;border-bottom: solid 1px #eee"><!--[if gte mso 15]>&nbsp;<![endif]--></td>
										</tr>                            
										<tr>
											<td align="left" valign="top" width="100%" height="25" colspan="2" style="border-collapse:collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; mso-line-height-rule: exactly; line-height: 25px;"><!--[if gte mso 15]>&nbsp;<![endif]--></td>
										</tr>    
									</table>

									  
									<!-- PURCHASER DETAILS -->

									<?php if ( $ticket['WooCommerceEventsTicketPurchaserDetails'] != 'off' ) : ?>

									<table border="0" cellspacing="0" cellpadding="3" style="font-size: 14px; background-color:#ffffff;border-collapse:collapse" class="contenttable contenttable_text_inner" width="100%">                                        

										<tr>
											<td valign="top" width="160px" style="font-family:<?php echo $font_family; ?>">
												<?php _e( 'Ticket Number:', 'woocommerce-events' ); ?>
											</td>
											<td valign="top" style="color:#222; font-family:<?php echo $font_family; ?>">
												<?php echo $ticket['WooCommerceEventsTicketID']; ?> 
											</td>
										</tr>

										<?php if ( ! empty( $ticket['WooCommerceEventsAttendeeName'] ) ) : ?>
											<tr>
												<td valign="top" width="160px" style="font-family:<?php echo $font_family; ?>">
													<?php _e( 'Ticket Holder:', 'woocommerce-events' ); ?>   
												</td>
												<td valign="top" style="color:#222; font-family:<?php echo $font_family; ?>">
													<?php echo $ticket['WooCommerceEventsAttendeeName']; ?> <?php echo $ticket['WooCommerceEventsAttendeeLastName']; ?>
												</td>
											</tr>
										<?php endif; ?>

										<?php if ( ! empty( $ticket['WooCommerceEventsAttendeeTelephone'] ) ) : ?>
											<tr>
												<td valign="top" width="160px" style="font-family:<?php echo $font_family; ?>">
													<?php _e( 'Telephone Number:', 'woocommerce-events' ); ?>
												</td>
												<td valign="top" style="color:#222; font-family:<?php echo $font_family; ?>">
													<?php echo $ticket['WooCommerceEventsAttendeeTelephone']; ?>
												</td>
											</tr>
										<?php endif; ?>

										<?php if ( ! empty( $ticket['WooCommerceEventsAttendeeCompany'] ) ) : ?>
											<tr>
												<td valign="top" width="160px" style="font-family:<?php echo $font_family; ?>">
													<?php _e( 'Company:', 'woocommerce-events' ); ?>   
												</td>
												<td valign="top" style="color:#222; font-family:<?php echo $font_family; ?>">
													<?php echo $ticket['WooCommerceEventsAttendeeCompany']; ?>    
												</td>
											</tr>
										<?php endif; ?>

										<?php if ( ! empty( $ticket['WooCommerceEventsAttendeeDesignation'] ) ) : ?>
											<tr>
												<td valign="top" width="160px" style="font-family:<?php echo $font_family; ?>">
													<?php _e( 'Designation:', 'woocommerce-events' ); ?>
												</td>
												<td valign="top" style="color:#222; font-family:<?php echo $font_family; ?>">
													<?php echo $ticket['WooCommerceEventsAttendeeDesignation']; ?>
												</td>
											</tr>
										<?php endif; ?>

									</table>

									<?php endif; ?> 
									

									<!-- TICKET DETAILS -->

									<table border="0" cellspacing="0" cellpadding="3" style="font-size: 14px; background-color:#ffffff;border-collapse:collapse" class="contenttable contenttable_text_inner" width="100%">                                        
										
										<!-- MULTI-DAY DETAILS -->
										
										<?php if ( $ticket['WooCommerceEventsTicketDisplayMultiDay'] == 'on' ) : ?>
											<?php $x = 1; ?>
											<?php $y = 0; ?>    
											<?php foreach ( $ticket['WooCommerceEventsSelectDate'] as $date ) : ?>
												<tr>
													<td valign="top" width="160px" style="font-family:<?php echo $font_family; ?>">
														<?php printf( __( '%1$s %2$d: ', 'woocommerce-events' ), $ticket['dayTerm'], $x ); ?>
													</td>
													<td valign="top" style="color:#222; font-family:<?php echo $font_family; ?>">
														<?php echo esc_attr( $date ); ?><br /> 
														<?php if ( ! empty( $ticket['WooCommerceEventsSelectDateHour'][ $y ] ) && ! empty( $ticket['WooCommerceEventsSelectDateMinutes'][ $y ] ) ) : ?>
															<?php echo $ticket['WooCommerceEventsSelectDateHour'][ $y ] . ':' . $ticket['WooCommerceEventsSelectDateMinutes'][ $y ]; ?><?php echo( isset( $ticket['WooCommerceEventsSelectDatePeriod'][ $y ] ) ) ? ' ' . $ticket['WooCommerceEventsSelectDatePeriod'][ $y ] : ''; ?>
														<?php endif; ?>
														<?php if ( ! empty( $ticket['WooCommerceEventsSelectDateHourEnd'][ $y ] ) && ! empty( $ticket['WooCommerceEventsSelectDateMinutesEnd'][ $y ] ) ) : ?>
															<?php echo ' - ' . $ticket['WooCommerceEventsSelectDateHourEnd'][ $y ] . ':' . $ticket['WooCommerceEventsSelectDateMinutesEnd'][ $y ]; ?><?php echo( isset( $ticket['WooCommerceEventsSelectDatePeriodEnd'][ $y ] ) ) ? ' ' . $ticket['WooCommerceEventsSelectDatePeriodEnd'][ $y ] : ''; ?>
														<?php endif; ?>
													</td>
												</tr>												
												<?php $x++; ?>
												<?php $y++; ?>
											<?php endforeach; ?>
										<?php endif; ?>

										<!-- BOOKING DETAILS -->

										 <?php if ( isset( $ticket['WooCommerceEventsBookingSlot'] ) || isset( $ticket['WooCommerceEventsBookingDate'] ) ) : ?>
									
												<?php if ( $ticket['WooCommerceEventsTicketDisplayBookings'] != 'off' ) : ?>
		
												<tr>
													<td valign="top" style="" width="160px" style="font-family:<?php echo $font_family; ?>">
														<?php echo $ticket['WooCommerceEventsBookingsSlotTerm']; ?>:
													</td>
													<td valign="top" align="left" style="color:#222; font-family:<?php echo $font_family; ?>">
														<?php echo $ticket['WooCommerceEventsBookingSlot']; ?>
													</td>
												</tr>
												<tr>
													<td valign="top" style="" width="160px" style="font-family:<?php echo $font_family; ?>">
														<?php echo $ticket['WooCommerceEventsBookingsDateTerm']; ?>: 
													</td>
													<td valign="top" align="left" style="color:#222; font-family:<?php echo $font_family; ?>">
														<?php echo $ticket['WooCommerceEventsBookingDate']; ?>
													</td>
												</tr>
											<?php endif; ?> 

										<?php endif; ?>  



										<!-- SEATING -->

										<?php if ( ! empty( $ticket['fooevents_seating_options_array'] ) ) : ?>
 
										<tr>
											<td valign="top" style="" width="160px" style="font-family:<?php echo $font_family; ?>">
												<?php echo $ticket['fooevents_seating_options_array']['row_name_label']; ?>:
											</td>
											<td valign="top" align="left" style="color:#222; font-family:<?php echo $font_family; ?>">
												<?php echo $ticket['fooevents_seating_options_array']['row_name']; ?>
											</td>
										</tr>

										<tr>
											<td valign="top" style="" width="160px" style="font-family:<?php echo $font_family; ?>">
												<?php echo $ticket['fooevents_seating_options_array']['seat_number_label']; ?>:
											</td>
											<td valign="top" align="left" style="color:#222; font-family:<?php echo $font_family; ?>">
												<?php echo $ticket['fooevents_seating_options_array']['seat_number']; ?>
											</td>
										</tr>
										
										<?php endif; ?>  


										<?php if ( ! empty( $ticket['WooCommerceEventsTicketType'] ) ) : ?>
											<tr>
												<td valign="top" style="" width="160px" style="font-family:<?php echo $font_family; ?>">
													<?php _e( 'Ticket Type:', 'woocommerce-events' ); ?>   
												</td>
												<td valign="top" align="left" style="color:#222; font-family:<?php echo $font_family; ?>">
													<?php echo $ticket['WooCommerceEventsTicketType']; ?>
												</td>
											</tr>
										<?php endif; ?>

										<?php if ( $ticket['WooCommerceEventsTicketDisplayPrice'] != 'off' ) : ?>
											<tr>
												<td valign="top" width="160px" style="font-family:<?php echo $font_family; ?>">
													<?php _e( 'Price:', 'woocommerce-events' ); ?>
												</td>
												<td valign="top" style="color:#222; font-family:<?php echo $font_family; ?>">
													<?php
													if ( ! empty( $ticket['WooCommerceEventsPrice'] ) ) {
														echo $ticket['WooCommerceEventsPrice'];
													} elseif ( ! empty( $ticket['price'] ) ) {
														echo $ticket['price'];}
													?>
												</td>
											</tr>
										<?php endif; ?>

										<?php if ( ! empty( $ticket['WooCommerceEventsVariations'] ) ) : ?>
											<?php foreach ( $ticket['WooCommerceEventsVariations'] as $variationName => $variationValue ) : ?>
												<?php if ( $variationName != 'Ticket Type' ) : ?>
												<tr>
													<td valign="top" width="160px" style="font-family:<?php echo $font_family; ?>">
														<?php echo $variationName; ?>:
													</td>
													<td valign="top" style="color:#222;font-family:<?php echo $font_family; ?>">
														<?php echo $variationValue; ?>
													</td>
												</tr>
												<?php endif; ?>
											<?php endforeach; ?>        
										<?php endif; ?>

										<?php
										$additional=NULL;
										foreach ($order->get_items() as $key => $value) {
											$additional=$value->get_meta_data();
										}
										?>
										<!-- CUSTOM ATTENDEE FIELDS -->

										<?php if ( ! empty( $ticket['fooevents_custom_attendee_fields_options_array'] ) && ( isset( $ticket['WooCommerceEventsIncludeCustomAttendeeDetails'] ) && $ticket['WooCommerceEventsIncludeCustomAttendeeDetails'] != 'off' ) ) : ?>
											<?php foreach ( $ticket['fooevents_custom_attendee_fields_options_array'] as $custom_attendee_fields ) : ?>
												<tr>
													<td valign="top" width="160px" style="font-family:<?php echo $font_family; ?>"><?php echo $custom_attendee_fields['label']; ?>:</td>
													<td valign="top" style="color:#222!important; font-family:<?php echo $font_family; ?>"><?php echo $custom_attendee_fields['value']; ?></td>
												</tr>
											<?php endforeach; ?>
										<?php endif; ?> 

										<?php if ($additional): ?>
											<?php foreach ($additional as $key => $value):  ?>
												<?php if ($value->get_data()["key"]=="Ticket Up" || $value->get_data()["key"]=="Ticket Upgrades") :?>
												<tr>
													<td valign="top" width="160px" style="font-family:<?php echo $font_family; ?>"><?php echo $value->get_data()["key"]; ?>:</td>
													<td valign="top" style="color:#222!important; font-family:<?php echo $font_family; ?>"><?php echo $value->get_data()["value"]; ?></td>
												</tr>
												<?php endif; ?>
												
											<?php endforeach;?>
										<?php endif; ?>
									</table>

									<!-- EVENT DETAILS -->

									<table border="0" cellspacing="0" cellpadding="3" style="font-size: 14px; background-color:#ffffff;border-collapse:collapse" class="contenttable contenttable_text_inner" width="100%">
							
										<tr>
											<td align="left" valign="top" width="100%" height="15" colspan="2" style="border-collapse:collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; mso-line-height-rule: exactly; line-height: 15px;border-bottom: solid 1px #eee"><!--[if gte mso 15]>&nbsp;<![endif]--></td>
										</tr>   
										<tr>
											<td align="left" valign="top" width="100%" height="15"  style="border-collapse:collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; mso-line-height-rule: exactly; line-height: 15px;"><!--[if gte mso 15]>&nbsp;<![endif]--></td>
										</tr> 

										<?php if ( ! empty( $ticket['WooCommerceEventsLocation'] ) ) : ?> 

											<tr>
												<td valign="top" style="color:#222;font-weight:bold;font-size:16px;font-family:<?php echo $font_family; ?>">
													<?php _e( 'Location', 'woocommerce-events' ); ?>
												</td>
											</tr>
											<tr>
												<td valign="top" style="color:#222;font-family:<?php echo $font_family; ?>">
													<?php echo $ticket['WooCommerceEventsLocation']; ?>  
												</td>
											</tr>
										<tr>
											<td align="left" valign="top" width="100%" height="5"  style="border-collapse:collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; mso-line-height-rule: exactly; line-height: 5px;"><!--[if gte mso 15]>&nbsp;<![endif]--></td>
										</tr> 

										<?php endif; ?>

										<?php if ( ! empty( $ticket['WooCommerceEventsDirections'] ) ) : ?> 

											<tr>
												<td valign="top" style="color:#222;font-weight:bold;font-size:16px;font-family:<?php echo $font_family; ?>">
													<?php _e( 'Directions', 'woocommerce-events' ); ?>  
												</td>
											</tr>
											<tr>
												<td valign="top" style="color:#222; font-family:<?php echo $font_family; ?>">
													<?php echo $ticket['WooCommerceEventsDirections']; ?>
												</td>
											</tr>
											<tr>
											<td align="left" valign="top" width="100%" height="5"  style="border-collapse:collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; mso-line-height-rule: exactly; line-height: 5px;"><!--[if gte mso 15]>&nbsp;<![endif]--></td>
										</tr> 
										
										<?php endif; ?>    

										<?php if ( ! empty( $ticket['WooCommerceEventsSupportContact'] ) ) : ?>

											<tr>
												<td valign="top" style="color:#222;font-weight:bold;font-size:16px;font-family:<?php echo $font_family; ?>">
													<?php _e( 'Contact us for questions and concerns', 'woocommerce-events' ); ?>   
												</td>
											</tr> 
											<tr>
												<td valign="top" style="color:#222;font-family:<?php echo $font_family; ?>">
													<?php echo $ticket['WooCommerceEventsSupportContact']; ?>
												</td>
											</tr>
										
										<?php endif; ?>

									</table>
									
									<!-- TICKET TEXT -->

									<?php if ( ! empty( $ticket['WooCommerceEventsTicketText'] ) ) : ?>

										<table border="0" cellspacing="0" cellpadding="3" style="font-size: 14px; background-color:#ffffff;border-collapse:collapse" class="contenttable contenttable_text_inner" width="100%">

										<tr>
											<td align="left" valign="top" width="100%" height="15" colspan="2" style="border-collapse:collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; mso-line-height-rule: exactly; line-height: 15px;border-bottom: solid 1px #eee"><!--[if gte mso 15]>&nbsp;<![endif]--></td>
										</tr>   
											<tr>
											<td align="left" valign="top" width="100%" height="15"  style="border-collapse:collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; mso-line-height-rule: exactly; line-height: 15px;"><!--[if gte mso 15]>&nbsp;<![endif]--></td>
										</tr>                                            
											<tr>
												<td valign="top" style="line-height:1.4em;font-family:<?php echo $font_family; ?>">
													<?php echo nl2br( $ticket['WooCommerceEventsTicketText'] ); ?>
												</td>
											</tr>
										</table>

									<?php endif; ?>

									<!-- ZOOM INFORMATION -->

									<?php if ( ! empty( $ticket['WooCommerceEventsTicketDisplayZoom'] ) && $ticket['WooCommerceEventsTicketDisplayZoom'] != 'off' && ! empty( $ticket['WooCommerceEventsZoomText'] ) ) : ?>
										
										<table border="0" cellspacing="0" cellpadding="3" style="font-size: 14px; background-color:#ffffff;border-collapse:collapse" class="contenttable contenttable_text_inner" width="100%">

											<tr>
												<td align="left" valign="top" width="100%" height="15" colspan="2" style="border-collapse:collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; mso-line-height-rule: exactly; line-height: 15px;border-bottom: solid 1px #eee"><!--[if gte mso 15]>&nbsp;<![endif]--></td>
											</tr>  
											<tr>
												<td valign="top" style="font-family:<?php echo $font_family; ?>">
													<?php echo $ticket['WooCommerceEventsZoomText']; ?>
												</td>
											</tr>
										</table>

									<?php endif; ?>

									<!-- POWERED BY TEXT -->

									<?php if ( $ticket['WooCommerceEventsDisplayPoweredby'] !== 'off' ) : ?>
																				
										<table border="0" cellspacing="0" cellpadding="3" style="font-size: 14px; background-color:#ffffff;border-collapse:collapse" class="contenttable contenttable_text_inner" width="100%">
										
											<tr>
												<td align="left" valign="top" width="100%" height="15" colspan="2" style="border-collapse:collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; mso-line-height-rule: exactly; line-height: 15px;border-bottom: solid 1px #eee"><!--[if gte mso 15]>&nbsp;<![endif]--></td>
											</tr>  
											<tr>
												<td valign="top" style="font-family:<?php echo $font_family; ?>">
													<p>
																								
														<?php echo esc_attr_e( 'Powered by', 'woocommerce-events' ); ?> <a href="https://www.fooevents.com/?ref=ticket"><?php echo esc_attr_e( 'FooEvents.com', 'woocommerce-events' ); ?></a>
										
													</p>
												</td>
											</tr>
										</table>
										
									<?php endif; ?>                                       

								</td>
							</tr>
						</table>
					</td> 
				   </tr>
			</table>
		</td>
	</tr>
</table>
