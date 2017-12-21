			<br/>
						  <h3 class="box-title" style="margin:20px;">Item Transaction List  </h3>
							<table id="webpagesList" cellpadding="10" border="1px" style="width:100%;border:1px solid; border-collapse: collapse;margin:20px;">
								<thead>
								<tr>
								  <th style="width: 10px;border: 1px solid black;">#</th>
								  <th style="border: 1px solid black;">Item Name</th>
								  <th style="border: 1px solid black;">Transaction To</th>
								  <th style="border: 1px solid black;">Type</th>
								  <th style="border: 1px solid black;">Quantity</th>
								  <th style="border: 1px solid black;">Date</th>
								</tr>
								</thead>
								<tbody>
										<?php 
								$i=1;
									foreach($result['result'] as $row){
										?>
									<tr>
									  <td style="border: 1px solid black;"><?php echo $i;?>.</td>
									  <td style="border: 1px solid black;"><?php echo $row->Items_Name;?></td>
									  <td style="border: 1px solid black;"><?php echo $row->transaction_To;?></td>
									  <td style="border: 1px solid black;">
									  <?php if($row->transaction_Type==1){
												echo 'credited';
											}else{
												echo 'withdrawl';
											}
										?>
									</td>
									  <td style="border: 1px solid black;"><?php echo $row->transaction_Qty;?></td>
									  <td style="border: 1px solid black;"><?php echo $row->transaction_CreatedOn;?></td>
									</tr>
										<?php $i++;}?>
								</tbody>
								
							  </table>