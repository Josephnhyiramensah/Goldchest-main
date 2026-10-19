$(document).ready(function()
{
	//SETUP
		//OTHERS
			//isEmail();
		//COMPANY
			company_new_modal();
			company_open();
			company_save();
			company_edit();
			company_update();
			company_lock_unlock();
			company_subscription_open();
			company_subscription_modal();
			company_subscription_set_amount();
			company_subscription_set_expiry_date();
			company_subscription_save();
			company_subscription_edit();
			company_subscription_update();
			company_subscription_delete();
		//BRANCH
			branch_new_modal();
			branch_save();
			branch_edit();
			branch_update();
		//SMS
			sms_new_modal();
			sms_set_category();
			sms_set_recipient();
			sms_save();
			sms_send();
			sms_edit();
			sms_update();
			sms_delete();
		//REFRIGERATOR
			refrigerator_new_modal();
			add_cubicle_row();
			delete_cubicle_row();
			add_refrigerator_price_list_row();
			cancel_refrigerator_modal();
			refrigerator_save();
			refrigerator_edit();
			refrigerator_update();
		//TAG
			tag_new_modal();
			tag_save();
			tag_edit();
			tag_update();
		//USER_ULTRA_SUPER
			user_ultra_super_new_modal();
			user_ultra_super_save();
			user_ultra_super_edit();
			user_ultra_super_update();
		//USER TYPES
			user_type_new_modal();
			user_type_save();
			user_type_edit();
			user_type_update();
		//USER PRIVILEGES
			user_privilege_new_modal();
			user_privilege_save();
			user_privilege_edit();
			user_privilege_update();
		//USERS-PERSONAL
			user_personal_new_modal();
			user_personal_save();
			user_personal_change_password_modal();
			user_personal_change_password_update();
			user_personal_reset_password_modal();
			user_personal_reset_password_update();
		//USERS
			user_sign_in();
			user_new_modal();
			user_save();
			user_edit();
			user_update();
			user_change_user_type();
			add_user_cash_ledger_row();
			delete_user_cash_ledger_row();
			user_change_branch();
		//USERS-ADMIN
			user_admin_new_sheet();
			user_admin_save();
			user_admin_edit();
			user_admin_update();
		//LEDGERS
			save_ledger();
			new_ledger_modal();
			ledger_modal();
			execute_ledger();
			edit_ledger();
			tb_2_list();
			tb_3_list();
			tb_4_list();
			tb_5_list();
			show_ledger_type();
			update_ledger();
			search_ledger_by_name();
			ledger_help();
			delete_ledger();
		//CUSTOMER
			customer_new_modal();
			customer_save();
			customer_edit();
			customer_update();
			customer_search_modal();
			customer_find();
			customer_search();
			customer_search_save();
			customer_insert();
		//SERVICE
			service_new_modal();
			service_save();
			service_edit();
			service_update();
			service_delete();
		//STOCK_ITEMS
			new_stock_item_modal();
			cancel_stock_item_modal();
			stock_item_add_component();
			stock_item_component_price();
			stock_item_sum_component_amount();
			stock_item_delete_component();
			stock_item_pricing();
			save_new_stock_item();
			edit_stock_item();
			update_stock_item();
			stock_item_image_modal();
			stock_item_image_trigger_click();
			stock_item_image_display_before_upload();
			stock_item_img_display_clear();
			delete_stock_item();
			stock_item_auto_update_price_modal();
			stock_item_auto_update_price_modal_component()
			stock_item_auto_update_price_save();
			search_stock_item_by_name();
		
		//STOCK ITEM TYPE
			stock_item_type_new_modal();
			stock_item_type_save();
			stock_item_type_edit();
			stock_item_type_update();
			stock_item_type_delete();
	
		//PRICE LEVEL
			price_level_new_modal();
			cancel_price_level_modal();
			price_level_add_stock_item_row();
			price_level_delete_stock_item_row();
			price_level_save();
			price_level_edit();
			price_level_update();
			price_level_delete();
			search_price_level_by_name();
		//COMPONENT
			component_new_modal();
			component_save();
			component_edit();
			component_update();
			component_delete();
		//WAREHOUSE
			new_warehouse_modal();
			save_new_warehouse();
			edit_warehouse();
			update_warehouse();
		//SITES
			new_site_modal();
			save_site();
			edit_site();
			update_site();
		//ASSETS
			new_asset_modal();
			save_asset();
			edit_asset();
			update_asset();
		
		//DINNING TABLE
			dining_table_new_modal();
			dining_table_save();
			dining_table_edit();
			dining_table_update();
			dining_table_delete();
			search_dining_table_by_name();
			dining_table_new_order();
	//FINANCIALS
		//ADIMMISION
			new_admission_voucher_modal();
			admission_additional_bill_modal();
			admission_refrigerator_cubicle();
			admission_refrigerator_list_cubicle();
			admission_refrigerator_cubicle_transfer();
			add_admission_servivce_item_row();
			add_admission_stock_item_row();
			admission_stock_item_price();
			admission_service_amount();
			admission_stock_amount();
			delete_admission_service_item_row();
			delete_admission_stock_item_row();
			add_admission_refrigerator_list_row();
			delete_admission_refrigerator_list_row();
			cancel_admission_voucher_modal();
			save_admission_voucher();
			edit_admission_voucher();
			update_admission_voucher();
			admission_refrigerator_transfer();
			admission_refrigerator_transfer_save();
			save_additional_bills();
			reprint_admission();
			search_admission_by_date();
			search_admission_by_name();
			search_admission_by_branch();
			discharge_modal();
			save_discharge();
			delete_admission();
		//DISCOUNT
			new_discount_voucher_modal();
			cancel_discount_voucher_modal();
			save_discount_voucher();
			edit_discount_voucher();
			update_discount_voucher();
			search_discount_by_date();
			delete_discount();
		//RECEIPT
			new_receipt_voucher_modal();
			receipt_mode_bank_details();
			add_receipt_item_row();
			//mask_receipt_amt();
			sum_receipt_item_amount();
			delete_receipt_item_row();
			cancel_receipt_voucher_modal();
			save_receipt_voucher();
			edit_receipt_voucher();
			update_receipt_voucher();
			search_receipt_by_date();
			search_receipt_by_branch();
			reprint_receipt();
			delete_receipt();
		//REFUND
			new_refund_voucher_modal();
			cancel_refund_voucher_modal();
			save_refund_voucher();
			edit_refund_voucher();
			update_refund_voucher();
			search_refund_by_name();
			search_refund_by_date();
			search_refund_by_branch();
			delete_refund();
		//PAYMENT
			new_payment_voucher_modal();
			payment_mode_bank_details();
			add_payment_item_row();
			//mask_payment_amt();
			sum_payment_item_amount();
			delete_payment_item_row();
			cancel_payment_voucher_modal();
			save_payment_voucher();
			edit_payment_voucher();
			update_payment_voucher();
			reprint_payment_voucher();
			search_payment_by_date();
			search_payment_by_branch();
			delete_payment();
		//CONTRA
			new_contra_voucher_modal();
			contra_mode_bank_details();
			cancel_contra_voucher_modal();
			save_contra_voucher();
			edit_contra_voucher();
			update_contra_voucher();
			search_contra_by_date();
			search_contra_by_branch();
			delete_contra();
		//JOURNAL
			new_journal_voucher_modal();
			cancel_journal_voucher_modal();
			save_journal_voucher();
			edit_journal_voucher();
			update_journal_voucher();
			search_journal_by_date();
			search_journal_by_branch();
			delete_journal();
		//BOOKING
			new_booking_modal();
			booking_set_supplied_by();
			booking_set_grams();
			cancel_booking_modal();
			booking_set_pounds()
			booking_set_density();
			booking_set_carat();
			booking_set_purity();
			booking_price_per_pound();
			booking_set_amount();
			save_booking_invoice();
			edit_booking_invoice();
			update_booking_invoice();
			delete_booking_invoice();
			search_booking_by_name();
			search_booking_by_date();
		//PURCHASES
			new_purchase_modal();
			purchase_set_supplied_by();
			purchase_set_grams();
			cancel_purchase_modal();
			purchase_method();
			purchase_set_pounds()
			purchase_set_density();
			purchase_set_carat();
			purchase_set_purity();
			purchase_price_per_pound();
			purchase_set_amount();
			save_purchase_invoice();
			edit_purchase_invoice();
			update_purchase_invoice();
			delete_purchase_invoice();
			search_purchase_by_name();
			search_purchase_by_date();
			reprint_purchase_invoice();
			send_sms_purchase_invoice();
		//BULK PURCHASES
			new_bulk_purchase_modal();
			add_bulk_purchase_item_row();
			delete_bulk_purchase_item_row();
			bulk_purchase_add_ledger();
			bulk_purchase_delete_ledger();
			bulk_purchase_ledger_group_id();
			bulk_purchase_sum_payment_amount();
			bulk_purchase_set_supplied_by();
			bulk_purchase_set_grams();
			cancel_bulk_purchase_modal();
			bulk_purchase_set_pounds()
			bulk_purchase_set_density();
			bulk_purchase_set_carat();
			bulk_purchase_set_purity();
			bulk_purchase_price_per_pound();
			bulk_purchase_set_amount();
			save_bulk_purchase_invoice();
			edit_bulk_purchase_invoice();
			update_bulk_purchase_invoice();
			delete_bulk_purchase_invoice();
			search_bulk_purchase_by_name();
			search_bulk_purchase_by_date();
			reprint_bulk_purchase_invoice();
		//STOCK_PURCHASES
			new_stock_purchase_modal();
			cancel_stock_purchase_modal();
			add_stock_purchase_item_row();
			get_stock_purchase_item_amount();
			delete_stock_purchase_item_row();
			save_stock_purchase_invoice();
			edit_stock_purchase_invoice();
			update_stock_purchase_invoice();
			search_stock_purchase_by_name();
			search_stock_purchase_by_date();
			delete_stock_purchase_invoice();
		//HIRING
			new_hiring_modal();
			cancel_hiring_modal();
			hiring_start_end();
			hiring_get_hours();
			add_hiring_item_row();
			get_hiring_item_amount();
			delete_hiring_item_row();
			save_hiring_invoice();
			edit_hring_invoice();
			update_hiring_invoice();
			search_hiring_invoice_by_name();
			search_hiring_invoice_by_date();
			delete_hiring_invoice();
		//MAINTENANCE SHEET
			new_mtce_modal();
			cancel_mtce_modal();
			add_mtce_service_item_row();
			add_mtce_stock_item_row();
			get_mtce_service_item_amount();
			get_mtce_stock_item_amount();
			add_mtce_item_price();
			delete_mtce_service_item_row();
			delete_mtce_stock_item_row();
			save_mtce_invoice();
			edit_mtce_invoice();
			update_mtce_invoice();
			search_mtce_invoice_by_name();
			search_mtce_invoice_by_date();
			delete_mtce_invoice();
		//SALES
			new_sales_modal();
			cancel_sales_modal();
			sales_set_pounds()
			sales_set_density();
			sales_set_carat();
			sales_set_purity();
			sales_price_per_pound();
			sales_set_amount();
			add_sales_item();
			delete_sales_item();
			sales_method();
			save_sales();
			edit_sales_invoice();
			update_sales_invoice();
			search_sales_by_date();
			search_sales_by_name();
			delete_sales()
			reprint_sales();
		
		//BULK_SALES
			new_bulk_sales_modal();
			bulk_sales_search_pending_items();
			bulk_sales_search_select_items();
			bulk_sales_delete_selected_item();
			bulk_sales_add_ledger();
			bulk_sales_delete_ledger();
			bulk_sales_ledger_group_id();
			bulk_sales_set_item_sales_amount();
			cancel_bulk_sales_modal();
			bulk_sales_sum_payment_amount();
			save_bulk_sales();
			edit_bulk_sales_invoice();
			update_bulk_sales_invoice();
			search_bulk_sales_by_date();
			search_bulk_sales_by_name();
			delete_bulk_sales()
			reprint_bulk_sales();
		//JOB_CARD
			new_job_card_modal();
			cancel_job_card_modal();
			add_job_card_item_row();
			add_job_card_item_price();
			get_job_card_item_amount();
			add_job_card_service_row();
			add_job_card_service_price();
			get_job_card_service_amount();
			delete_job_card_service_row();
			add_job_card_overhead_row();
			get_job_card_overhead_amount();
			delete_job_card_overhead_row();
			delete_job_card_item_row();
			save_job_card();
			edit_job_card();
			update_job_card();
			set_status_job_card_modal();
			set_status_job_card_save();
			reprint_job_card();
			delete_job_card();
			search_job_card_by_name();
			search_job_card_by_date();
			search_job_card_by_status();
		//NON-DEDUCTIBLE_SALES
			new_nds_sales_modal();
			create_customer_activate_field();
			save_customer_nds_sales();
			get_customer_telephone();
			cancel_nds_sales_modal();
			add_nds_sales_item_row();
			nds_sales_validate_qty();
			add_nds_sales_item_price();
			get_nds_sales_item_amount();
			delete_nds_sales_item_row();
			nds_sales_vat_type();
			nds_sales_vat_rate();
			save_nds_sales();
			edit_nds_sales();
			update_nds_sales();
			reprint_nds_sales();
			delete_nds_sales();
			search_nds_sales_by_name();
			search_nds_sales_by_date();
			search_nds_sales_by_branch();
		//WAYBILL
			new_waybill_modal();
			waybill_customer_item_list();
			waybill_send_code();
			add_waybill_item_row();
			validate_waybill_item_qty();
			delete_waybill_item_row();
			cancel_waybill_modal();
			save_waybill();
			edit_waybill();
			update_waybill();
			reprint_waybill();
			delete_waybill();
			search_waybill_by_name();
			search_waybill_by_date();
			search_waybill_by_branch();
		//SWAP
			new_swap_modal();
			cancel_swap_modal();
			swap_customer_item_list();
			add_swap_production_item_row();
			delete_swap_production_item_row();
			save_swap();
			reprint_swap();
			delete_swap();
			search_swap_by_name();
			search_swap_by_date();
			search_swap_by_branch();
		//STOCK_SALES
			new_stock_sales_modal();
			cancel_stock_sales_modal();
			add_stock_sales_item_row();
			add_stock_sales_item_price();
			get_stock_sales_item_amount();
			delete_stock_sales_item_row();
			stock_sales_vat_type();
			stock_sales_vat_rate();
			stock_sales_block_negative();
			save_stock_sales();
			edit_stock_sales();
			update_stock_sales();
			reprint_stock_sales();
			delete_stock_sales();
			search_stock_sales_invoice_by_name();
			search_stock_sales_invoice_by_date();
			search_stock_sales_invoice_by_branch();
		//ORDER
			new_order_voucher_modal();
			cancel_order_voucher_modal();
			search_order_menu_by_type();
			search_order_menu();
			set_order_table();
			set_order_item_modal();
			set_order_item_amount();
			delete_order_item();
			add_order_payment_row();
			set_order_payment_amount();
			delete_order_payment_row();
			order_payment_cash_tendered();
			save_order_voucher();
			set_order_status();
			print_order();
			display_take_away_order();
			pay_order_modal();
			save_pay_order();
			edit_order_voucher();
			update_order_voucher();
			search_order_by_table();
			search_order_by_date();
			delete_order();
		//PROFORMA
			new_proforma_modal();
			cancel_proforma_modal();
			add_proforma_item_row();
			add_proforma_item_price();
			get_proforma_item_amount();
			delete_proforma_item_row();
			save_proforma();
			edit_proforma();
			update_proforma();
			reprint_proforma();
			delete_proforma();
			search_proforma_invoice_by_name();
			search_proforma_invoice_by_date();
		//STOCK_SALES_INVOICE
			stock_sales_invoice_add_ledger();
			stock_sales_invoice_sum_payment_amount();
			stock_sales_invoice_delete_ledger();
			stock_sales_invoice_calculate_net_amount();
			stock_sales_invoice_change_amount();
			stock_sales_invoice_item_search_modal();
			stock_sales_invoice_item_search();
			add_stock_sales_invoice_item_row();
			stock_sales_invoice_delete_item();
			save_stock_sales_invoice();
			reprint_stock_sales_invoice();
			display_stock_sales_invoice();
			edit_stock_sales_invoice();
			update_stock_sales_invoice();
		//SMS
			sms_purchase_modal();
			save_sms_purchase();
			edit_sms_purchase();
			update_sms_purchase();
	//REPORTS
		//DASHBOARD
			dashboard();
		//PURCHASE REPORT
			purchase_report_modal();
			purchase_report_display();
			purchase_report_by_branch_modal();
			purchase_report_by_branch_display();
			profitability_report_modal();
			profitability_report_display();
		//SALES REPORT
			sales_report_modal();
			sales_report_display();
		//SALES SUMMARY REPORT
			sales_summary_report_modal();
			sales_summary_report_display();
		//LEDGER REPORT
			ledger_report_modal();
			ledger_report_display();
			ledger_report_display_with_item_detail();
		//LEDGER DETAIL REPORT
			ledger_detail_report_modal();
			ledger_detail_report_display();
		//LEDGER SUMMARY REPORT
			ledger_summary_report_modal();
			ledger_summary_report_display();	
		//LEDGER GROUP REPORT
			ledger_group_report_modal();
			ledger_group_report_display();
		//CASH REPORT
			cash_report_modal();
			cash_report_display();
		//PROFIT AND LOSS ACCOUNT
			profit_and_loss_modal();
			profit_and_loss_display();
		//BALANCE SHEET
			balance_sheet_modal();
			balance_sheet_display();
		
		//ADMISSION REPORT
			admission_report_modal();
			admission_report_display();
		//BODY COUNT REPORT
			body_count_report_modal();
			body_count_report_display();
	//INVENTORY
		//STOCK REQUISITION
			new_stock_requisition_modal();
			add_stock_requisition_item_row();
			cancel_stock_requisition_modal();
			get_stock_requisition_item_category();
			delete_stock_requisition_item_row();
			save_stock_requisition_voucher();
			edit_stock_requisition_voucher();
			update_stock_requisition_voucher();
			delete_stock_requisition_voucher();
			search_stock_requisition_by_date();
		//STOCK TRANSFER
			stock_transfer_modal_requisition();
			save_stock_transfer_voucher();
			edit_stock_transfer_voucher();
			update_stock_transfer_voucher();
			new_stock_transfer_modal();
			//cancel_stock_transfer_modal();
			add_stock_transfer_item_row();
			get_stock_transfer_item_category();
			delete_stock_transfer_item_row();
			//stock_transfer_modal_direct();
			//stock_transfer_batch_list();
			search_stock_transfer_by_date();
			delete_stock_transfer();
		//STOCK ADJUSTMENT
			new_stock_adjustment_modal();
			add_stock_adjustment_item_row();
			clear_adjustment_qty_in_or_out();
			cancel_stock_adjustment_modal();
			delete_stock_adjustment_item_row();
			save_stock_adjustment_voucher();
			edit_stock_adjustment_voucher();
			update_stock_adjustment_voucher();
			get_stock_adjustment_item_category();
			delete_stock_adjustment();
			search_stock_adjustment_by_date();
		//STOCK REPORT
			stock_report_modal();
			stock_report_display();
			stock_report_item_tally_card();
		//TALLY CARD
			stock_item_tally_card_modal();
			stock_item_tally_card_get_category();
			stock_item_tally_card_display();
			stock_adjustment_item_list_delete();
		//SITE REPORT
			site_report_modal();
			site_report_display();
			site_report_item_tally_card();
		//ASSET REPORT
			asset_report_modal();
			asset_report_display();
			asset_report_item_tally_card();
		
		//CUSTOMER STOCK REPORT
			customer_stock_report_modal();
			customer_stock_report_display();
		
		//CUSTOMER SALES REPORT
			customer_report_modal();
			customer_report_display();
		//GOLDBOD PRICE
			goldbod_price_modal();
});

//SETUP
	//OTHERS
		/*function isEmail(email) {
		  var regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		  //var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,6})+$/;
		  return regex.test(email);
		}*/
	//COMPANY
		function company_new_modal()
		{
			$(document).on('click','#new_company_icon',function()
			{
				var user_super_id = $('#session_user_super_id').val();
				$('#user_super_id').val(user_super_id);
				$('#sms').val('No');
				$('#company_create_modal_header').html('Company Setup');
				$('#company_create_form').trigger('reset');
				$('#company_update_btn').hide();
				$('#company_save_btn').show();
				$('#company_status').val('Active');
				$('#company_create_modal').modal('show');
			}) 
		}


		function company_open()
		{
			$(document).on('click','#btn_open_company',function()
			{
				var company_id = $(this).attr('data-id');
				var company_type_id = $(this).attr('data-id3');
				var company_sms = $(this).attr('data-id4');
				var vat_type = $(this).attr('data-id5');
				var vat_calc_type = $(this).attr('data-id6');
				var covid_perc = $(this).attr('data-id7');
				var nhil_perc = $(this).attr('data-id8');
				var getfund_perc = $(this).attr('data-id9');
				var vat_perc = $(this).attr('data-id10');
				$.ajax({
		             url:'/layout/items/company_open.php',
		             method:'POST',
					 datatype: 'JSON',
		             data:{
						company_id:company_id, 
						company_type_id:company_type_id, 
						company_sms:company_sms, 
						vat_type:vat_type, 
						vat_calc_type:vat_calc_type, 
						covid_perc:covid_perc, 
						nhil_perc:nhil_perc, 
						getfund_perc:getfund_perc, 
						vat_perc:vat_perc
					},
					success:function(data)
					{
						var res = $.parseJSON(data);
						if(res[2] == 'Open' && res[3] == 9)
						{
							window.location.href="/layout/items/dining_table_display.php";
						}
						else if(res[2] == 'Open' && res[3] != 9)
						{
							window.location.href="/welcome.php";
						}
						else if(res[2] == 'Expired_Closed')
						{
							alert('The Company subscription has expired on '+ res[1]+' and login blocked. Please the Administrator!');
						}
						else if(res[2] == 'Expired_Grace')
						{
							alert('The Company subscription has expired '+res[1]+', login will be blocked on '+res[0]+'. Please the Administrator!');
							window.location.href="/welcome.php";
						};
					}
		        });	
			});
		}

		function company_save()
		{
			$(document).on('click','#company_save_btn',function(e){
				var user_super_id = $('#session_user_super_id').val();
				var trading_name = $('#trading_name').val();
				var legal_name = $('#legal_name').val();
				var location = $('#location').val();
				var currency = $('#currency').val();
				var email = $('#email').val();
				var telephone = $('#telephone').val();
				var momo_phone = $('#momo_phone').val();
				var company_type_id = $('#company_type_id').val();

				e.preventDefault();
				if (trading_name !== "") 
				{
					if (legal_name !== "") 
					{
						if (location !== "") 
						{
							if (currency !== "") 
							{
								if (telephone !== "") 
								{
									if (company_type_id !== "" && company_type_id > 0) 
									{
										$.ajax({
											url:'/layout/items/company_save.php',
											method:'POST',
											data:$('#company_create_form').serialize(),
											success:function(data)
											{
												$('#company_create_form').trigger('reset');
												$('#company_create_modal').modal('hide');
												window.location.href="/layout/items/company_list.php";
											}
								        });	
									} 
									else 
									{
										$('#company_warning_div').html('<h6 style=color:red;>Please the Company Type cannot be EMPTY!</h6>');
										$('#company_warning_div').hide().slideDown().delay(2000).fadeOut();
									}
								} 
								else 
								{
									$('#company_warning_div').html('<h6 style=color:red;>Please the Telephone cannot be EMPTY!</h6>');
									$('#company_warning_div').hide().slideDown().delay(2000).fadeOut();
								}
							} 
							else 
							{
								$('#company_warning_div').html('<h6 style=color:red;>Please the Currency cannot be EMPTY!</h6>');
								$('#company_warning_div').hide().slideDown().delay(2000).fadeOut();
							}
						} 
						else 
						{
							$('#company_warning_div').html('<h6 style=color:red;>Please the Location cannot be EMPTY!</h6>');
							$('#company_warning_div').hide().slideDown().delay(2000).fadeOut();
						}
					} 
					else 
					{
						$('#company_warning_div').html('<h6 style=color:red;>Please the Legal Name cannot be EMPTY!</h6>');
						$('#company_warning_div').hide().slideDown().delay(2000).fadeOut();
					}
				} 
				else 
				{
					$('#company_warning_div').html('<h6 style=color:red;>Please the Trading Name cannot be EMPTY!</h6>');
					$('#company_warning_div').hide().slideDown().delay(2000).fadeOut();
				}
			});
		}

		function company_edit()
		{
			$(document).on('click','#btn_edit_company',function()
			{
				var company_id = $(this).attr('data-id');
				$.ajax({  
			             url:'/layout/items/company_edit.php',  
			             method:'POST',  
			             data:{
			             	company_id:company_id
			             },
			             datatype: 'JSON',
			             success:function(data){
		                 	var res = $.parseJSON(data);
		                 	$('#company_id').val(res[0]);
		                 	$('#trading_name').val(res[1]);
		                 	$('#legal_name').val(res[2]);
		                 	$('#company_logo_file').val(res[3]);
		                 	$('#address').val(res[4]);
		                 	$('#location').val(res[5]);
		                 	$('#gps').val(res[6]);
		                 	$('#telephone').val(res[7]);
		                 	$('#whatsapp_phone').val(res[8]);
		                 	$('#momo_phone').val(res[9]);
		                 	$('#email').val(res[10]);
		                 	$('#website').val(res[11]);
		                 	$('#admin_username').val(res[12]);
		                 	$('#admin_email').val(res[13]);
		                 	$('#admin_password').val(res[14]);
		                 	$('#currency').val(res[15]);
		                 	$('#company_type_id').val(res[16]);
		                 	$('#company_status').val(res[17]);
		                 	$('#sms').val(res[18]);
		                 	$('#vat_type').val(res[19]);
		                 	$('#calc_type').val(res[20]);
		                 	$('#covid_rate').val(res[21]);
		                 	$('#nhil_rate').val(res[22]);
		                 	$('#getfund_rate').val(res[23]);
		                 	$('#vat_rate').val(res[24]);
		                 	$('#company_create_modal_header').html('Company Edit');
							$('#company_update_btn').show();
							$('#company_save_btn').hide();
			             	$('#company_create_modal').modal('show');
			             }  
		        	});
			});
		}

		function company_update()
		{
			$(document).on('click','#company_update_btn',function(e){
				e.preventDefault();
			    var user_super_id = $('#session_user_super_id').val();
				var trading_name = $('#trading_name').val();
				var legal_name = $('#legal_name').val();
				var location = $('#location').val();
				var currency = $('#currency').val();
				var email = $('#email').val();
				var telephone = $('#telephone').val();
				var momo_phone = $('#momo_phone').val();
				var company_type_id = $('#company_type_id').val();
				if (trading_name !== "") 
				{
					if (legal_name !== "") 
					{
						if (location !== "") 
						{
							if (currency !== "") 
							{
								if (telephone !== "") 
								{
									if (company_type_id !== "" && company_type_id > 0) 
									{
										
										$.ajax({
											url:'/layout/items/company_update.php',
											method:'POST',
											data:$('#company_create_form').serialize(),
											success:function(data)
											{
												$('#company_create_form').trigger('reset');
												$('#company_create_modal').modal('hide');
												window.location.href="/layout/items/company_list.php";
											}
								        });	
									} 
									else 
									{
										$('#company_warning_div').html('<h6 style=color:red;>Please the Company Type cannot be EMPTY!</h6>');
										$('#company_warning_div').hide().slideDown().delay(2000).fadeOut();
									}
								} 
								else 
								{
									$('#company_warning_div').html('<h6 style=color:red;>Please the Telephone cannot be EMPTY!</h6>');
									$('#company_warning_div').hide().slideDown().delay(2000).fadeOut();
								}
							} 
							else 
							{
								$('#company_warning_div').html('<h6 style=color:red;>Please the Currency cannot be EMPTY!</h6>');
								$('#company_warning_div').hide().slideDown().delay(2000).fadeOut();
							}
						} 
						else 
						{
							$('#company_warning_div').html('<h6 style=color:red;>Please the Location cannot be EMPTY!</h6>');
							$('#company_warning_div').hide().slideDown().delay(2000).fadeOut();
						}
					} 
					else 
					{
						$('#company_warning_div').html('<h6 style=color:red;>Please the Legal Name cannot be EMPTY!</h6>');
						$('#company_warning_div').hide().slideDown().delay(2000).fadeOut();
					}
				} 
				else 
				{
					$('#company_warning_div').html('<h6 style=color:red;>Please the Trading Name cannot be EMPTY!</h6>');
					$('#company_warning_div').hide().slideDown().delay(2000).fadeOut();
				}
			});
		}

		function company_lock_unlock()
		{
			$(document).on('click','#btn_lock_company, #btn_unlock_company',function(e){
				e.preventDefault();
			    var company_id = $(this).attr('data-id');
			    var status = $(this).attr('data-id1');
				$.ajax({
					url:'/layout/items/company_lock.php',
					method:'POST',
					data:{company_id:company_id,status:status},
					success:function(data)
					{
						window.location.href="/layout/items/company_list.php";
					}
				});	
			});	
		}

		function company_subscription_open()
		{
			$(document).on('click','#btn_subscription_open',function()
			{
				var company_id = $(this).attr('data-id');
				
				$.ajax({
					url:'/layout/items/company_subscription_modal_show.php',
					method:'POST',
					data:{company_id:company_id},
					success:function(data)
					{
						window.location.href="/layout/items/company_subscription.php";
					}
				});
			}) 
		}

		function company_subscription_modal()
		{
			$(document).on('click','#btn_subscription_company',function()
			{
				var company_id = $(this).attr('data-id');
				$('#company_subscription_modal_header').html('Company Subscription Form');
				$('#company_subscription_form').trigger('reset');
				$('#company_subscription_company_id').val(company_id);
				$('#company_subscription_company_idD').val(company_id);
				$('#company_sub_update_btn').hide();
				$('#company_sub_save_btn').show();
				$('#company_subscription_modal').modal('show');
			}) 
		}

		function company_subscription_set_amount()
		{
			$(document).on('keyup','#price, #no_of_months, #exchange_rate',function()
			{
				var price = $('#price').val();
				var no_of_months = $('#no_of_months').val();
				var exchange_rate = $('#exchange_rate').val();
				var amount_dollar = price *no_of_months;
				var amount_cedi = amount_dollar *exchange_rate;
				$('#amount_dollar').val(amount_dollar);
				$('#amount_dollarD').val(amount_dollar);
				$('#amount_cedi').val(amount_cedi);
				$('#amount_cediD').val(amount_cedi);
			}) 
		}

		function company_subscription_set_expiry_date()
		{
			$(document).on('change','#start_date',function()
			{
				var start_date = $('#start_date').val();
				var no_of_months = $('#no_of_months').val();
				var d = new Date(start_date);
				var day = d.getDate();
				var month = d.getMonth();

				//EXPIRY DATE
				var month = parseInt(month) + parseInt(no_of_months) + parseInt(1);
				var year = d.getFullYear();
				var date = year+'-'+month+'-'+day;
				var datetime = new Date(date);
				var expiry_date = moment(datetime).format("YYYY-MM-DD");
				$('#expiry_date').val(expiry_date);

				//GRACE PERIOD
				var month2 = parseInt(month) + parseInt(1);
				var date2 = year+'-'+month2+'-'+day;
				var datetime2 = new Date(date2);
				var grace_date = moment(datetime2).format("YYYY-MM-DD");
				$('#date_grace').val(grace_date);
			}) 
		}
		
		function company_subscription_save()
		{
			$(document).on('click','#company_sub_save_btn',function(e){
				var price = $('#price').val();
				var no_of_months = $('#no_of_months').val();
				var exchange_rate = $('#exchange_rate').val();
				var start_date = $('#start_date').val();
				var expiry_date = $('#expiry_date').val();
				var date_grace = $('#date_grace').val();

				e.preventDefault();
				if (price !== "") 
				{
					if (no_of_months != "") 
					{
						if (exchange_rate != "") 
						{
							if (start_date != "") 
							{
								if (expiry_date != "") 
								{
									if (date_grace != "") 
									{
										if (expiry_date > start_date) 
										{
											if (date_grace > expiry_date) 
											{
												$.ajax({
													url:'/layout/items/company_subscription_save.php',
													method:'POST',
													data:$('#company_subscription_form').serialize(),
													success:function(data)
													{
														$('#company_subscription_form').trigger('reset');
														$('#company_subscription_modal').modal('hide');
														window.location.href="/layout/items/company_subscription.php";
													}
												});
											} 
											else 
											{
												$('#company_warning_div').html('<h6 style=color:red;>Please the Grace Period cannot be earlier than the Expiry Date!</h6>');
												$('#company_warning_div').hide().slideDown().delay(2000).fadeOut();
											}
										} 
										else 
										{
											$('#company_warning_div').html('<h6 style=color:red;>Please the Expiry Date cannot be earlier than the Start Date!</h6>');
											$('#company_warning_div').hide().slideDown().delay(2000).fadeOut();
										}
									} 
									else 
									{
										$('#company_warning_div').html('<h6 style=color:red;>Please the Expiry Date cannot be EMPTY!</h6>');
										$('#company_warning_div').hide().slideDown().delay(2000).fadeOut();
									}
								} 
								else 
								{
									$('#company_warning_div').html('<h6 style=color:red;>Please the Expiry Date cannot be EMPTY!</h6>');
									$('#company_warning_div').hide().slideDown().delay(2000).fadeOut();
								}
							} 
							else 
							{
								$('#company_warning_div').html('<h6 style=color:red;>Please the Start Date cannot be EMPTY!</h6>');
								$('#company_warning_div').hide().slideDown().delay(2000).fadeOut();
							}
						} 
						else 
						{
							$('#company_warning_div').html('<h6 style=color:red;>Please the Exchange Rate cannot be EMPTY!</h6>');
							$('#company_warning_div').hide().slideDown().delay(2000).fadeOut();
						}
					} 
					else 
					{
						$('#company_warning_div').html('<h6 style=color:red;>Please the No Of Months cannot be EMPTY!</h6>');
						$('#company_warning_div').hide().slideDown().delay(2000).fadeOut();
					}
				} 
				else 
				{
					$('#company_warning_div').html('<h6 style=color:red;>Please the Bill Rate cannot be EMPTY!</h6>');
					$('#company_warning_div').hide().slideDown().delay(2000).fadeOut();
				}
			});
		}

		function company_subscription_edit()
		{
			$(document).on('click','#btn_edit_subscription',function()
			{
				var sub_bill_id = $(this).attr('data-id');
				$.ajax({
						url:'/layout/items/company_subscription_edit.php',  
						method:'POST',  
						data:{sub_bill_id:sub_bill_id},
						datatype: 'JSON',
						success:function(data){
							var res = $.parseJSON(data);
							$('#sub_bill_id').val(res[0]);
							$('#company_subscription_company_id').val(res[1]);
							$('#price').val(res[2]);
							$('#no_of_months').val(res[3]);
							$('#exchange_rate').val(res[4]);
							$('#start_date').val(res[5]);
							$('#amount_dollar').val(res[6]);
							$('#amount_dollarD').val(res[6]);
							$('#amount_cedi').val(res[7]);
							$('#amount_cediD').val(res[7]);
							$('#expiry_date').val(res[8]);
							$('#date_grace').val(res[9]);
							$('#company_subscription_modal_header').html('Edit Subscription');
							$('#company_sub_update_btn').show();
							$('#company_sub_save_btn').hide();
							$('#company_subscription_modal').modal('show');
						}
		        });
			});
		}
		
		function company_subscription_update()
		{
			$(document).on('click','#company_sub_update_btn',function(e){
				var price = $('#price').val();
				var no_of_months = $('#no_of_months').val();
				var exchange_rate = $('#exchange_rate').val();
				var start_date = $('#start_date').val();
				var expiry_date = $('#expiry_date').val();
				var date_grace = $('#date_grace').val();

				e.preventDefault();
				if (price !== "") 
				{
					if (no_of_months != "") 
					{
						if (exchange_rate != "") 
						{
							if (start_date != "") 
							{
								if (expiry_date != "") 
								{
									if (date_grace != "") 
									{
										if (expiry_date > start_date) 
										{
											if (date_grace > expiry_date) 
											{
												$.ajax({
													url:'/layout/items/company_subscription_update.php',
													method:'POST',
													data:$('#company_subscription_form').serialize(),
													success:function(data)
													{
														$('#company_subscription_form').trigger('reset');
														$('#company_subscription_modal').modal('hide');
														window.location.href="/layout/items/company_subscription.php";
													}
												});
											} 
											else 
											{
												$('#company_warning_div').html('<h6 style=color:red;>Please the Grace Period cannot be earlier than the Expiry Date!</h6>');
												$('#company_warning_div').hide().slideDown().delay(2000).fadeOut();
											}
										} 
										else 
										{
											$('#company_warning_div').html('<h6 style=color:red;>Please the Expiry Date cannot be earlier than the Start Date!</h6>');
											$('#company_warning_div').hide().slideDown().delay(2000).fadeOut();
										}
									} 
									else 
									{
										$('#company_warning_div').html('<h6 style=color:red;>Please the Expiry Date cannot be EMPTY!</h6>');
										$('#company_warning_div').hide().slideDown().delay(2000).fadeOut();
									}
								} 
								else 
								{
									$('#company_warning_div').html('<h6 style=color:red;>Please the Expiry Date cannot be EMPTY!</h6>');
									$('#company_warning_div').hide().slideDown().delay(2000).fadeOut();
								}
							} 
							else 
							{
								$('#company_warning_div').html('<h6 style=color:red;>Please the Start Date cannot be EMPTY!</h6>');
								$('#company_warning_div').hide().slideDown().delay(2000).fadeOut();
							}
						} 
						else 
						{
							$('#company_warning_div').html('<h6 style=color:red;>Please the Exchange Rate cannot be EMPTY!</h6>');
							$('#company_warning_div').hide().slideDown().delay(2000).fadeOut();
						}
					} 
					else 
					{
						$('#company_warning_div').html('<h6 style=color:red;>Please the No Of Months cannot be EMPTY!</h6>');
						$('#company_warning_div').hide().slideDown().delay(2000).fadeOut();
					}
				} 
				else 
				{
					$('#company_warning_div').html('<h6 style=color:red;>Please the Bill Rate cannot be EMPTY!</h6>');
					$('#company_warning_div').hide().slideDown().delay(2000).fadeOut();
				}
			});
		}

		function company_subscription_delete()
		{
			$(document).on('click','#btn_delete_subscription',function(){
				var sub_bill_id = $(this).attr('data-id');
				var currentRow=$(this).closest("tr");
				var expiry_date = currentRow.find("td:eq(2)").text();
				//var Supplier = currentRow.find("td:eq(3)").text();
				$('#subscription_delete_question').text('Are you sure you want to delete subscription of ' + expiry_date + '?');
				$('#subscription_delete_modal').modal('show');
				$(document).on('click','#subscription_delete_yes',function(){
					$.ajax({  
		                 url:'/layout/items/company_subscription_delete.php',  
		                 type:'POST',  
		                 data:{sub_bill_id:sub_bill_id},
		                 success:function()
						 {
		                 	$('#subscription_delete_modal').modal('hide');
		                 	window.location.href="/layout/items/company_subscription.php";
		                 }
		            });
			      });
				$(document).on('click','#subscription_delete_no',function(){
					$('#subscription_delete_modal').modal('hide');
				});
			});
		}
		
	//BRANCH
		function branch_new_modal()
		{
			$(document).on('click','#new_branch_icon',function()
			{
				var user_super_id = $('#session_user_super_id').val();
				$('#user_super_id').val(user_super_id);
				$('#sms').val('No');
				$('#branch_create_modal_header').html('Branch Setup');
				$('#branch_create_form').trigger('reset');
				$('#branch_update_btn').hide();
				$('#branch_save_btn').show();
				$('#beanch_status').val('Active');
				$('#branch_create_modal').modal('show');
			}) 
		}

		function branch_save()
		{
			$(document).on('click','#branch_save_btn',function(e){
				var branch_name = $('#branch_name').val();
				e.preventDefault();
				if (branch_name !== "")
				{
					$.ajax({
						url:'/layout/items/branch_save.php',
						method:'POST',
						data:$('#branch_create_form').serialize(),
						success:function(data)
						{
							$('#branch_create_form').trigger('reset');
							$('#branch_create_modal').modal('hide');
							window.location.href="/layout/items/branch_list.php";
						}
					});	
				} 
				else 
				{
					$('#branch_create_form_msg').html('<h6 style=color:red;>Please the Branch Name cannot be EMPTY!</h6>');
					$('#branch_create_form_msg').hide().slideDown().delay(2000).fadeOut();
				};
			});
		}

		function branch_edit()
		{
			$(document).on('click','#btn_edit_branch',function()
			{
				var branch_id = $(this).attr('data-id');
				$.ajax({  
					url:'/layout/items/branch_edit.php',  
					method:'POST',  
					data:{
					branch_id:branch_id
					},
					datatype: 'JSON',
					success:function(data)
					{
						var res = $.parseJSON(data);
						$('#branch_id').val(res[0]);
						$('#branch_company_id').val(res[1]);
						$('#branch_name').val(res[2]);
						$('#branch_address').val(res[3]);
						$('#branch_location').val(res[4]);
						$('#branch_telephone').val(res[5]);
						$('#branch_email').val(res[6]);
						$('#branch_warehouse').val(res[7]);
						$('#branch_cash_ledger').val(res[8]);
						$('#branch_create_modal_header').html('Branch Edit');
						$('#branch_update_btn').show();
						$('#branch_save_btn').hide();
						$('#branch_create_modal').modal('show');
					}
				});
			});
		}

		function branch_update()
		{
			$(document).on('click','#branch_update_btn',function(e){
				var branch_name = $('#branch_name').val();
				e.preventDefault();
				if (branch_name !== "")
				{
					$.ajax({
						url:'/layout/items/branch_update.php',
						method:'POST',
						data:$('#branch_create_form').serialize(),
						success:function(data)
						{
							$('#branch_create_form').trigger('reset');
							$('#branch_create_modal').modal('hide');
							window.location.href="/layout/items/branch_list.php";
						}
					});	
				} 
				else 
				{
					$('#branch_create_form_msg').html('<h6 style=color:red;>Please the Branch Name cannot be EMPTY!</h6>');
					$('#branch_create_form_msg').hide().slideDown().delay(2000).fadeOut();
				};
			});
		}
		
	//SMS
		function sms_new_modal()
		{
			$(document).on('click','#new_sms_icon, #send_sms_nav',function()
			{
				var id = $(this).attr('id');
				$('#sms_create_form').trigger('reset');
				$('#sms_type').val(id);
				if(id == 'send_sms_nav')
				{
					$('#sms_create_modal_header').html('Sending Message');
					$('.purchase').prop('hidden', true);
					//$('.sending').prop('hidden', false);
					$('#sms_save_btn').hide();
					$('#sms_send_btn').show();
				}
				else
				{
					$('#sms_create_modal_header').html('SMS Setup');
					$('.purchase').prop('hidden', false);
					//$('.sending').prop('hidden', true);
					$('#sms_send_btn').hide();
					$('#sms_save_btn').show();
				}
				$('#sms_update_btn').hide();
				$('#sms_create_modal').modal('show');
			});
		}

		function sms_set_category()
		{
			$(document).on('change','#sms_category',function()
			{
				var category = $(this).val();
				if(category == 'BULK_MESSAGE')
				{
					$('#sms_category_div').prop('class', 'col-md-12 mb-12');
					$('#sms_appointment_date_div').prop('hidden', true);
					$('.sending').prop('hidden', false);
				}
				else if(category == 'BIRTHDAY')
				{
					$('#sms_category_div').prop('class', 'col-md-10 mb-10');
					$('#sms_appointment_date_div').prop('hidden', false);
					$('.sending').prop('hidden', true);
				}
				else if(category == 'APPOINTMENT_NOTICE')
				{
					$('#sms_category_div').prop('class', 'col-md-10 mb-10');
					$('#sms_category_div').prop('class', 'col-md-10 mb-10');
					$('#sms_appointment_date_div').prop('hidden', false);
					$('.sending').prop('hidden', true);
				};
			});
		}

		function sms_set_recipient()
		{
			$(document).on('change','#sms_recipient',function()
			{
				var recipient = $(this).val();
				if(recipient == 'ALL')
				{
					$('#recipient_div').prop('class', 'col-md-10 mb-10');
					$('#sms_gender_div').prop('hidden', false);
					$('#sms_telephone_div').prop('hidden', true);
				}
				else
				{
					$('#recipient_div').prop('class', 'col-md-10 mb-10');
					$.ajax({
						url:'/layout/items/sms_get_recipient_telephone.php',
						method:'POST',
						data:{recipient:recipient},
						success:function(data)
						{
							$('#sms_telephone').val(data);
						}
					});	
					$('#sms_gender_div').prop('hidden', true);
					$('#sms_telephone_div').prop('hidden', false);
				}
			});
		}

		function sms_save()
		{
			$(document).on('click','#sms_save_btn',function(e){
				var sms_date = $('#sms_date').val();
				e.preventDefault();
				if (sms_date != "")
				{
					$.ajax({
						url:'/layout/items/sms_save.php',
						method:'POST',
						data:$('#sms_create_form').serialize(),
						success:function(data)
						{
							$('#sms_create_form').trigger('reset');
							$('#sms_create_modal').modal('hide');
							window.location.href="/layout/items/sms_list.php";
						}
					});	
				} 
				else 
				{
					$('#sms_create_form_msg').html('<h6 style=color:red;>Please the Date cannot be EMPTY!</h6>');
					$('#sms_create_form_msg').hide().slideDown().delay(2000).fadeOut();
				};
			});
		}

		function sms_send()
		{
			$(document).on('click','#sms_send_btn',function(e)
			{
				e.preventDefault();
				var sms_recipient = $('#sms_recipient').val();
				var sms_date = $('#sms_date').val();
				var telephone = $('#sms_telephone').val();
				var message = $('#sms_message').val();
				var category = $('#sms_category').val();
				if(category == 'BULK_MESSAGE')
				{
					if (sms_recipient == 'ALL' || (sms_recipient != 'ALL' && telephone !=''))
					{
						if (message != "")
						{
							if (sms_date != "")
							{
								$.ajax({
									url:'/layout/items/sms_sending.php',
									method:'POST',
									data:$('#sms_create_form').serialize(),
									success:function(data)
									{
										$('#sms_create_form').trigger('reset');
										$('#sms_create_modal').modal('hide');
										//alert(data+' messages sent')
										window.open('/layout/items/sms_send.php', '_blank');
									}
								});	
							} 
							else 
							{
								$('#sms_create_form_msg').html('<h6 style=color:red;>Please the Date cannot be EMPTY!</h6>');
								$('#sms_create_form_msg').hide().slideDown().delay(2000).fadeOut();
							};
						} 
						else 
						{
							$('#sms_create_form_msg').html('<h6 style=color:red;>Please the Message cannot be EMPTY!</h6>');
							$('#sms_create_form_msg').hide().slideDown().delay(2000).fadeOut();
						};
					} 
					else 
					{
						$('#sms_create_form_msg').html('<h6 style=color:red;>Please the Telephone cannot be EMPTY!</h6>');
						$('#sms_create_form_msg').hide().slideDown().delay(2000).fadeOut();
					};
				}
				else
				{
					$.ajax({
						url:'/layout/items/sms_sending.php',
						method:'POST',
						data:$('#sms_create_form').serialize(),
						success:function(data)
						{
							$('#sms_create_form').trigger('reset');
							$('#sms_create_modal').modal('hide');
							window.open('/layout/items/sms_send.php', '_blank');
						}
					});	
				};
			});
		}

		function sms_edit()
		{
			$(document).on('click','#btn_edit_sms',function()
			{
				var sms_id = $(this).attr('data-id');
				$.ajax({  
					url:'/layout/items/sms_edit.php',  
					method:'POST',  
					data:{
					sms_id:sms_id
					},
					datatype: 'JSON',
					success:function(data)
					{
						var res = $.parseJSON(data);
						$('#sms_id').val(res[0]);
						$('#sms_date').val(res[1]);
						$('#sms_qty_purchased').val(res[2]);
						$('#sms_qty_sent').val(res[3]);
						$('#sms_name').val(res[4]);
						$('#sms_status').val(res[5]);
						$('#sms_create_modal_header').html('SMS Edit');
						$('#sms_update_btn').show();
						$('#sms_save_btn').hide();
						$('#sms_create_modal').modal('show');
					}
				});
			});
		}

		function sms_update()
		{
			$(document).on('click','#sms_update_btn',function(e){
				var sms_date = $('#sms_date').val();
				e.preventDefault();
				if (sms_date != "")
				{
					$.ajax({
						url:'/layout/items/sms_update.php',
						method:'POST',
						data:$('#sms_create_form').serialize(),
						success:function(data)
						{
							$('#sms_create_form').trigger('reset');
							$('#sms_create_modal').modal('hide');
							window.location.href="/layout/items/sms_list.php";
						}
					});	
				} 
				else 
				{
					$('#sms_create_form_msg').html('<h6 style=color:red;>Please the Date cannot be EMPTY!</h6>');
					$('#sms_create_form_msg').hide().slideDown().delay(2000).fadeOut();
				};
			});
		}
			
		function sms_delete()
		{
			$(document).on('click','#btn_delete_sms',function(){
				var sms_id = $(this).attr('data-id');
				$('#item_delete_question').text('Are you sure you want to delete this SMS');
				$('#item_delete_modal').modal('show');
				$(document).on('click','#item_delete_yes',function(){
					$.ajax({  
						url:'/layout/items/sms_delete.php',  
						type:'POST',  
						data:{sms_id:sms_id},
						success:function(){
							$('#item_delete_modal').modal('hide');
							window.location.href="/layout/items/sms_list.php";
						}  
					});
				});
				$(document).on('click','#item_delete_no',function(){
					$('#item_delete_modal').modal('hide');
				});
			});
		}	

		
		//REFRIGERATOR
			function refrigerator_new_modal()
			{
				$(document).on('click','#new_refrigerator_icon',function()
				{
					$('#refrigerator_create_modal_header').html('Refrigerator Setup');
					$('#refrigerator_create_form').trigger('reset');
					$('#refrigerator_update_btn').hide();
					$('#refrigerator_save_btn').show();
					$('#refrigerator_status').val('Active');
					$('#refrigerator_create_modal').modal('show');
				});
			}
	
			function add_cubicle_row()
			{
				$(document).on('change','.cubicle',function(){ 
					var i = $('#cubicle_list_table tr:last').attr('id');
					i++;
					$.ajax({
						url:'/layout/items/refrigeration_cubicle_list.php',
						method:'POST',
						data:{i:i},
						success:function(data)
						{
							$('#cubicle_list_table').append(data);
						}
					});
				});
			}
	
			function delete_cubicle_row()
			{
				$(document).on('click', '#delete_cubicle', function()
				{  
					   var button_id = $(this).attr("data-id");
					   $('#'+button_id+'').remove();
				   });
			}
	
			function add_refrigerator_price_list_row()
			{
				$(document).on('change','.refrigerator_price_list_date',function(){ 
					var i = $('#refrigerator_price_list_table tr:last').attr('data-id');
					i++;
					$.ajax({
						url:'/layout/items/refrigerator_price_list_add_row.php',
						method:'POST',
						data:{i:i},
						success:function(data)
						{
							$('#refrigerator_price_list_table').append(data);
						}
					});
				});
			}
	
			function delete_refrigerator_price_list_row()
			{
				$(document).on('click', '.delete_refrigerator_price_list', function()
				{  
					var i = $(this).attr("data-id");
					$('#pl'+i+'').remove();
				});
			}
	
			function cancel_refrigerator_modal()
			{
				$(document).on('click','#refrigerator_cancel_btn',function()
				{
					var page = window.location.pathname;
					$('#refrigerator_create_form').trigger('reset');
					$('#refrigerator_create_modal').modal('hide');
					window.location.href= page;
				});
			}
	
			function refrigerator_save()
			{
				$(document).on('click','#refrigerator_save_btn',function(e)
				{
					var refrigerator_name = $('#refrigerator_name').val();
					var refrigerator_price = $('#refrigerator_price').val();
					e.preventDefault();
					if (refrigerator_name !== "")
					{
						if (refrigerator_price !== "")
						{
							$.ajax({
								url:'/layout/items/refrigerator_save.php',
								method:'POST',
								data:$('#refrigerator_create_form').serialize(),
								success:function(data)
								{
									$('#refrigerator_create_form').trigger('reset');
									$('#refrigerator_create_modal').modal('hide');
									window.location.href="/layout/items/refrigerator_list.php";
								}
							});
						} 
						else 
						{
							$('#refrigerator_create_form_msg').html('<h6 style=color:red;>Please the Refrigerator Price cannot be EMTY!</h6>');
							$('#refrigerator_create_form_msg').hide().slideDown().delay(2000).fadeOut();
						};
					} 
					else 
					{
						$('#refrigerator_create_form_msg').html('<h6 style=color:red;>Please the Refrigerator description cannot be EMTY!</h6>');
						$('#refrigerator_create_form_msg').hide().slideDown().delay(2000).fadeOut();
					};
				});
			}
	
			function refrigerator_edit()
			{
				$(document).on('click','#btn_edit_refrigerator',function()
				{
					var refrigerator_id = $(this).attr('data-id');
					$.ajax({  
						url:'/layout/items/refrigerator_edit.php',  
						method:'POST',  
						data:{
							refrigerator_id:refrigerator_id
						},
						datatype: 'JSON',
						success:function(data)
						{
							var res = $.parseJSON(data);
							$('#refrigerator_id').val(res[0]);
							$('#refrigerator_name').val(res[1]);
							$('#refrigerator_price').val(res[2]);
							$('#cubicle_list').html(res[3]);
							$('#refrigerator_price_list_div').html(res[4]);
							$('#refrigerator_create_modal_header').html('Refrigerator Edit');
							$('#refrigerator_update_btn').show();
							$('#refrigerator_save_btn').hide();
							$('#refrigerator_create_modal').modal('show');
						}
					});
				});
			}
	
			function refrigerator_update()
			{
				$(document).on('click','#refrigerator_update_btn',function(e)
				{
					var refrigerator_name = $('#refrigerator_name').val();
					var refrigerator_price = $('#refrigerator_price').val();
					e.preventDefault();
					if (refrigerator_name !== "")
					{
						if (refrigerator_price !== "")
						{
							$.ajax({
								url:'/layout/items/refrigerator_update.php',
								method:'POST',
								data:$('#refrigerator_create_form').serialize(),
								success:function(data)
								{
									$('#refrigerator_create_form').trigger('reset');
									$('#refrigerator_create_modal').modal('hide');
									window.location.href="/layout/items/refrigerator_list.php";
								}
							});
						} 
						else 
						{
							$('#refrigerator_create_form_msg').html('<h6 style=color:red;>Please the Refrigerator Price cannot be EMTY!</h6>');
							$('#refrigerator_create_form_msg').hide().slideDown().delay(2000).fadeOut();
						};
					} 
					else 
					{
						$('#refrigerator_create_form_msg').html('<h6 style=color:red;>Please the Refrigerator description cannot be EMTY!</h6>');
						$('#refrigerator_create_form_msg').hide().slideDown().delay(2000).fadeOut();
					};
				});
			}
	
		//TAG
			function tag_new_modal()
			{
				$(document).on('click','#new_tag_icon',function()
				{
					$('#tag_create_modal_header').html('Tag Setup');
					$('#tag_create_form').trigger('reset');
					$('#tag_update_btn').hide();
					$('#tag_save_btn').show();
					$('#tag_create_modal').modal('show');
				});
			}
	
			function tag_save()
			{
				$(document).on('click','#tag_save_btn',function(e){
					var tag = $('#tag').val();
					e.preventDefault();
					if (tag !== "")
					{
						$.ajax({
							url:'/layout/items/tag_save.php',
							method:'POST',
							data:$('#tag_create_form').serialize(),
							success:function(data)
							{
								$('#tag_create_form').trigger('reset');
								$('#tag_create_modal').modal('hide');
								window.location.href="/layout/items/tag_list.php";
							}
						});	
					} 
					else 
					{
						$('#tag_create_form_msg').html('<h6 style=color:red;>Please the tag Name cannot be EMPTY!</h6>');
						$('#tag_create_form_msg').hide().slideDown().delay(2000).fadeOut();
					};
				});
			}
	
			function tag_edit()
			{
				$(document).on('click','#btn_edit_tag',function()
				{
					var tag_id = $(this).attr('data-id');
					$.ajax({  
						url:'/layout/items/tag_edit.php',  
						method:'POST',  
						data:{
						tag_id:tag_id
						},
						datatype: 'JSON',
						success:function(data)
						{
							var res = $.parseJSON(data);
							$('#tag_id').val(res[0]);
							$('#tag').val(res[1]);
							$('#tag_create_modal_header').html('Tag Edit');
							$('#tag_update_btn').show();
							$('#tag_save_btn').hide();
							$('#tag_create_modal').modal('show');
						}
					});
				});
			}
	
			function tag_update()
			{
				$(document).on('click','#tag_update_btn',function(e){
					var tag = $('#tag').val();
					e.preventDefault();
					if (tag !== "")
					{
						$.ajax({
							url:'/layout/items/tag_update.php',
							method:'POST',
							data:$('#tag_create_form').serialize(),
							success:function(data)
							{
								$('#tag_create_form').trigger('reset');
								$('#tag_create_modal').modal('hide');
								window.location.href="/layout/items/tag_list.php";
							}
						});	
					} 
					else 
					{
						$('#tag_create_form_msg').html('<h6 style=color:red;>Please the tag Name cannot be EMPTY!</h6>');
						$('#tag_create_form_msg').hide().slideDown().delay(2000).fadeOut();
					};
				});
			}
	

	//USER_ULTRA_SUPER
		function user_ultra_super_new_modal()
		{
			$(document).on('click','#new_user_ultra_super_icon',function()
			{
				$('#user_ultra_super_create_form').trigger('reset');
				$('#user_ultra_super_update_btn').hide();
				$('#user_ultra_super_save_btn').show();
				$('#user_ultra_super_create_modal').modal('show');
			});
		}

		function user_ultra_super_save()
		{
			$(document).on('click','#user_ultra_super_save_btn',function(e){
				e.preventDefault();
				var name = $('#user_ultra_super_name').val();
				var email = $('#user_ultra_super_email').val();
				var password = $('#user_ultra_super_password').val();
				if (email !== '') 
				{
					if (name !== '') 
					{
						if (password !== '') 
						{
							$.ajax({
					             url:'/layout/items/user_ultra_super_save.php',
					             method:'POST',
					             data:$('#user_ultra_super_create_form').serialize(),
					             success:function(data)
					             {
					             	if (data == 'exist')
					             	{
					             		$('#user_form_msg').html('<h4 style=color:red;>Email NOT available!</h4>');
										$('#user_form_msg').hide().slideDown().delay(2000).fadeOut();
					             	} 
					             	else if (data == 'inserted')
					             	{
						             	$('#user_ultra_super_create_form').trigger('reset');
				             			$('#user_ultra_super_create_modal').modal('hide');
				             			window.location.href="/layout/items/user_ultra_super_list.php";
					             	};
					             }
					        });
						} 
						else 
						{
							$('#user_ultra_super_form_msg').html('<h6 style=color:red;>The Password cannot be EMPTY!</h6>');
							$('#user_ultra_super_form_msg').hide().slideDown().delay(2000).fadeOut();
						};
					} 
					else 
					{
						$('#user_ultra_super_form_msg').html('<h6 style=color:red;>The Name cannot be EMPTY!</h6>');
						$('#user_ultra_super_form_msg').hide().slideDown().delay(2000).fadeOut();
					};
				} 
				else 
				{
					$('#user_ultra_super_form_msg').html('<h6 style=color:red;>The Email cannot be EMPTY!</h6>');
					$('#user_ultra_super_form_msg').hide().slideDown().delay(2000).fadeOut();
				};
			});
		}

		function user_ultra_super_edit()
		{
			$(document).on('click','#btn_edit_user_ultra_super',function()
			{
				var user_id = $(this).attr('data-id');
				$.ajax({  
			             url:'/layout/items/user_ultra_super_edit.php',  
			             method:'POST',  
			             data:{
			             	user_id:user_id
			             },
			             datatype: 'JSON',
			             success:function(data){
		                 	var res = $.parseJSON(data);
		                 	$('#user_ultra_super_id').val(res[0]);
		                 	$('#user_ultra_super_name').val(res[1]);
		                 	$('#user_ultra_super_email').val(res[2]);
			             }  
		        	});
			});
		}

		function user_ultra_super_update()
		{
			$(document).on('click','#user_ultra_super_update_btn',function(e){
				e.preventDefault();
				var user_type = $('#user_type').val();
				var telephone = $('#telephone').val();
				var first_name = $('#first_name').val();
				var email = $('#email').val();
				if (email !== '') 
				{
					if (first_name !== '') 
					{
						if (user_type !== '') 
						{
							if (telephone !== '') 
							{
								$.ajax({
						             url:'/layout/items/user_update.php',
						             method:'POST',
						             data:$('#user_create_form').serialize(),
						             success:function(data)
							             {
							             	if (data == 'exist')
							             	{
							             		$('#user_form_msg').html('<h4 style=color:red;>Email NOT available!</h4>');
												$('#user_form_msg').hide().slideDown().delay(2000).fadeOut();
							             	} 
							             	else if (data == 'inserted')
							             	{
								             	$('#user_create_form').trigger('reset');
						             			$('#user_create_modal').modal('hide');
						             			window.location.href="/layout/items/user_list.php";
							             	};
							             }
						        });
						    } 
							else 
							{
								$('#user_form_msg').html('<h4 style=color:red;>Telephone cannot be EMPTY!</h4>');
								$('#user_form_msg').hide().slideDown().delay(2000).fadeOut();
							};
						} 
						else 
						{
							$('#user_form_msg').html('<h4 style=color:red;>User Type cannot be EMPTY!</h4>');
							$('#user_form_msg').hide().slideDown().delay(2000).fadeOut();
						};
					} 
					else 
					{
						$('#user_form_msg').html('<h4 style=color:red;>First Name cannot be EMPTY!</h4>');
						$('#user_form_msg').hide().slideDown().delay(2000).fadeOut();
					};
				} 
				else 
				{
					$('#user_form_msg').html('<h4 style=color:red;>Email cannot be EMPTY!</h4>');
					$('#user_form_msg').hide().slideDown().delay(2000).fadeOut();
				};
			});
		}

	//USER TYPES
		function user_type_new_modal()
		{
			$(document).on('click','#new_user_type_icon',function()
			{
				var id = "";
				$.ajax({
					url:'/layout/items/user_type_privilege_list.php',
					method:'POST',
					data:{
		             	id:id
		             },
					success:function(data)
		            {
		             	$('#user_type_create_form').trigger('reset');
		             	$('#user_type_privileges_div').html(data);
						$('#user_type_update_btn').hide();
						$('#user_type_save_btn').show();
						$('#user_type_create_modal').modal('show');
					}
			    });	
			}) 
		}

		function user_type_save()
		{
			$(document).on('click','#user_type_save_btn',function(e){
				e.preventDefault();
				var user_type_desc = $('#user_type_desc').val();
				if (user_type_desc != '') 
				{
					$.ajax({
			             url:'/layout/items/user_type_save.php',
			             method:'POST',
			             data:$('#user_type_create_form').serialize(),
			             success:function(data)
				             {
				             	$('#user_type_create_form').trigger('reset');
		             			$('#user_type_create_modal').modal('hide');
		             			window.location.href="/layout/items/user_type_list.php";
				             }
			        });	
				} 
				else 
				{
						$('#user_type_form_msg').html('<h6 style=color:red;>Description cannot be EMPTY!</h6>');
						$('#user_type_form_msg').hide().slideDown().delay(2000).fadeOut();
				};
					
			});
		}

		function user_type_edit()
		{
			$(document).on('click','#btn_edit_user_type',function()
			{
				var id = $(this).attr('data-id');
				$('#user_type_id').val(id);
				$.ajax({  
		             url:'/layout/items/user_type_edit.php',  
		             method:'POST',  
		             data:{
		             	id:id
		             },
		             datatype: 'JSON',
		             success:function(data){
	                 	var res = $.parseJSON(data);
	                 	$('#user_type_id').val(res[0]);
	                 	$('#user_type_desc').val(res[1]);
	                 	$.ajax({
							url:'/layout/items/user_type_privilege_list.php',
							method:'POST',
							data:{
				             	id:id
				            },
							success:function(data)
				            {
				             	$('#user_type_privileges_div').html(data);
			                 	$('#user_type_create_modal_header').html('User Type Edit');
								$('#user_type_update_btn').show();
								$('#user_type_save_btn').hide();
				             	$('#user_type_create_modal').modal('show');
							}
					    });

		             }  
	        	});
			});
		}

		function user_type_update()
		{
			$(document).on('click','#user_type_update_btn',function(e){
				e.preventDefault();
				var user_type_desc = $('#user_type_desc').val();
				if (user_type_desc != '') 
				{
					$.ajax({
			             url:'/layout/items/user_type_update.php',
			             method:'POST',
			             data:$('#user_type_create_form').serialize(),
			             success:function(data)
				             {
				             	$('#user_type_create_form').trigger('reset');
		             			$('#user_type_create_modal').modal('hide');
		             			window.location.href="/layout/items/user_type_list.php";
				             }
			        });	
				} 
				else 
				{
						$('#user_type_form_msg').html('<h6 style=color:red;>Description cannot be EMPTY!</h6>');
						$('#user_type_form_msg').hide().slideDown().delay(2000).fadeOut();
				};
					
			});
		}

	//USER PRIVILEGES
		function user_privilege_new_modal()
		{
			$(document).on('click','#new_user_privilege_icon',function()
			{
				$('#user_privilege_create_form').trigger('reset');
				$('#user_privilege_update_btn').hide();
				$('#user_privilege_save_btn').show();
				$('#user_privilege_create_modal').modal('show');
			}) 
		}

		function user_privilege_save()
		{
			$(document).on('click','#user_privilege_save_btn',function(e){
				e.preventDefault();
				var user_priv_page_id = $('#user_priv_page_id').val();
				var user_privilege_desc = $('#user_privilege_desc').val();
				if (user_privilege_desc != '') 
				{
					if (user_priv_page_id > 0) 
					{
						$.ajax({
				             url:'/layout/items/user_privilege_save.php',
				             method:'POST',
				             data:$('#user_privilege_create_form').serialize(),
				             success:function(data)
					             {
					             	$('#user_privilege_create_form').trigger('reset');
			             			$('#user_privilege_create_modal').modal('hide');
			             			window.location.href="/layout/items/user_privileges_list.php";
					             }
				        });	
					} 
					else 
					{
							$('#user_privilege_form_msg').html('<h6 style=color:red;>Page cannot be EMPTY!</h6>');
							$('#user_privilege_form_msg').hide().slideDown().delay(2000).fadeOut();
					};
				} 
				else 
				{
						$('#user_privilege_form_msg').html('<h6 style=color:red;>Privilege Description cannot be EMPTY!</h6>');
						$('#user_privilege_form_msg').hide().slideDown().delay(2000).fadeOut();
				};
					
			});
		}

		function user_privilege_edit()
		{
			$(document).on('click','#btn_user_privilege_edit',function()
			{
				var user_priv_id = $(this).attr('data-id');
				$('#user_privilege_id').val(user_priv_id);
				$.ajax({  
		             url:'/layout/items/user_privilege_edit.php',  
		             method:'POST',  
		             data:{
		             	user_priv_id:user_priv_id
		             },
		             datatype: 'JSON',
		             success:function(data){
	                 	var res = $.parseJSON(data);
	                 	$('#user_privilege_id').val(res[0]);
	                 	$('#user_privilege_desc').val(res[1]);
	                 	$('#user_priv_page_id').val(res[2]);
	                 	$('#user_privilege_create_modal_header').html('User Privilege Edit');
						$('#user_privilege_update_btn').show();
						$('#user_privilege_save_btn').hide();
		             	$('#user_privilege_create_modal').modal('show');
		             }  
	        	});
			});
		}

		function user_privilege_update()
		{
			$(document).on('click','#user_privilege_update_btn',function(e){
				e.preventDefault();
				var user_priv_page_id = $('#user_priv_page_id').val();
				var user_privilege_desc = $('#user_privilege_desc').val();
				if (user_privilege_desc != '') 
				{
					if (user_priv_page_id > 0) 
					{
						$.ajax({
				             url:'/layout/items/user_privilege_update.php',
				             method:'POST',
				             data:$('#user_privilege_create_form').serialize(),
				             success:function(data)
					             {
					             	$('#user_privilege_create_form').trigger('reset');
			             			$('#user_privilege_create_modal').modal('hide');
			             			window.location.href="/layout/items/user_privileges_list.php";
					             }
				        });	
					} 
					else 
					{
							$('#user_privilege_form_msg').html('<h6 style=color:red;>Page cannot be EMPTY!</h6>');
							$('#user_privilege_form_msg').hide().slideDown().delay(2000).fadeOut();
					};
				} 
				else 
				{
						$('#user_privilege_form_msg').html('<h6 style=color:red;>Privilege Description cannot be EMPTY!</h6>');
						$('#user_privilege_form_msg').hide().slideDown().delay(2000).fadeOut();
				};
			});
		}

	//USERS
		function user_sign_in()
		{
			$(document).on('click','#user_sign_in',function(e)
			{
				e.preventDefault();
				var email = $('#user_email').val();
				var password = $('#user_password').val();
				if (email != '') 
				{
					if (password != '') 
					{
						$.ajax({
							url:'/layout/items/user_sign_in.php',
							method:'POST',
							data:$('#user_sign_in_form').serialize(),
							datatype: 'JSON',
							success:function(data)
							{
								var res = $.parseJSON(data);
								if (res[2] == 'Normal_User') 
								{
									$('#user_sign_in_form').trigger('reset');
									if(res[3] == 9)
									{
										window.location.href="/layout/items/dining_table_display.php";
									}
									else
									{
										window.location.href="/welcome.php";
									};
								}
								else if (res[2] == 'Rejected')
								{
									$('#user_sign_in_msg').html('<h6 style=color:red;>User Credential Rejected by the Administrator!</h6>');
									$('#user_sign_in_msg').hide().slideDown().delay(2000).fadeOut();
								}
								else if (res[2] == 'Pending')
								{
									$('#user_sign_in_msg').html('<h6 style=color:red;>User Credential is still Pending Approval by the Administrator!</h6>');
									$('#user_sign_in_msg').hide().slideDown().delay(2000).fadeOut();
								}
								else if (res[2] == 'Revoked')
								{
									$('#user_sign_in_msg').html('<h6 style=color:red;>User Credential has been Revoked by the Administrator!</h6>');
									$('#user_sign_in_msg').hide().slideDown().delay(2000).fadeOut();
								} 
								else if (res[2] == 'Super_User')
								{
									$('#user_sign_in_form').trigger('reset');
									window.location.href="/layout/items/company_list.php";
								} 
								else if (res[2] == 'Ultra_Super_User')
								{
									$('#user_sign_in_form').trigger('reset');
									window.location.href="/layout/items/company_list.php";
								}
								else if (res[2] == 'User_Not_Registered')
								{
									$('#user_sign_in_msg').html('<h6 style=color:red;>Your Email and Password does not match!</h6>');
									$('#user_sign_in_msg').hide().slideDown().delay(2000).fadeOut();
								}
								else if (res[2] == 'Closed')
								{
									$('#user_sign_in_msg').html('<h6 style=color:red;>The Company is closed. Please the Administrator to open!</h6>');
									$('#user_sign_in_msg').hide().slideDown().delay(2000).fadeOut();
								}
								else if (res[2] == 'Expired_Closed')
								{
									$('#user_sign_in_msg').html('<h6 style=color:red;>The Company subscription has expired on '+ res[1]+' and login blocked. Please the Administrator!</h6>');
									$('#user_sign_in_msg').hide().slideDown().delay(2000).fadeOut();
								}
								else if (res[2] == 'Expired_Grace')
								{
									$('#user_sign_in_msg').html('<h6 style=color:red;>The Company subscription has expired '+res[1]+', login will be blocked on '+res[0]+'. Please the Administrator!</h6>');
									$('#user_sign_in_msg').hide().slideDown().delay(2000).fadeOut();
								}
								else if (res[2] == 'Invalid_Address_Email')
								{
									$('#user_sign_in_msg').html('<h4 style=color:red;>Invalid Email Address!</h4>');
									$('#user_sign_in_msg').hide().slideDown().delay(2000).fadeOut();
								};
							}
				        });
					}
					else 
					{
						$('#user_sign_in_msg').html('<h6 style=color:red;>Password Cannot Be EMPTY!</h6>');
						$('#user_sign_in_msg').hide().slideDown().delay(2000).fadeOut();
					};
				}
				else 
				{
					$('#user_sign_in_msg').html('<h6 style=color:red;>Email Cannot Be EMPTY!</h6>');
					$('#user_sign_in_msg').hide().slideDown().delay(2000).fadeOut();
				};
			}); 
		}

		function user_new_modal()
		{
			$(document).on('click','#new_user_icon',function()
			{
				var company_id = $('#session_company_id').val();
				var user_super_id = $('#session_user_super_id').val();
				var user_id = "";
				$.ajax({
					url:'/layout/items/user_privilege_list.php',
					method:'POST',
					data:{
		             	user_id:user_id
		             },
					success:function(data)
		            {
		            	$('#user_create_modal_header').html('User Setup');
						$('#user_create_form').trigger('reset');
						$('#ucm_company_id').val(company_id);
						$('#company_id_2').val(company_id);
						$('#company_id3').val(company_id);
						$('#ucm_user_super_id').val(user_super_id);
						$('#user_privileges_div').html(data);
						$('#user_update_btn').hide();
						$('#user_save_btn').show();
						$('#user_create_modal').modal('show');
					}
			    });	
			});
		}

		function user_save()
		{
			$(document).on('click','#user_save_btn',function(e){
				e.preventDefault();
				var user_type = $('#user_type').val();
				var telephone = $('#telephone').val();
				var first_name = $('#first_name').val();
				var email = $('#email').val();
				if (email !== '') 
				{
					if (first_name !== '') 
					{
						if (user_type !== '') 
						{
							if (telephone !== '') 
							{
								$.ajax({
						             url:'/layout/items/user_save.php',
						             method:'POST',
						             data:$('#user_create_form').serialize(),
						             success:function(data)
						             {
						             	if (data == 'exist')
						             	{
						             		$('#user_form_msg').html('<h4 style=color:red;>Email NOT available!</h4>');
											$('#user_form_msg').hide().slideDown().delay(2000).fadeOut();
						             	} 
						             	else if (data == 'inserted')
						             	{
							             	$('#user_create_form').trigger('reset');
					             			$('#user_create_modal').modal('hide');
					             			window.location.href="/layout/items/user_list.php";
						             	};
						             }
						        });
						    } 
							else 
							{
								$('#user_form_msg').html('<h4 style=color:red;>Telephone cannot be EMPTY!</h4>');
								$('#user_form_msg').hide().slideDown().delay(2000).fadeOut();
							};
						} 
						else 
						{
							$('#user_form_msg').html('<h4 style=color:red;>User Type cannot be EMPTY!</h4>');
							$('#user_form_msg').hide().slideDown().delay(2000).fadeOut();
						};
					} 
					else 
					{
						$('#user_form_msg').html('<h4 style=color:red;>First Name cannot be EMPTY!</h4>');
						$('#user_form_msg').hide().slideDown().delay(2000).fadeOut();
					};
				} 
				else 
				{
					$('#user_form_msg').html('<h4 style=color:red;>Email cannot be EMPTY!</h4>');
					$('#user_form_msg').hide().slideDown().delay(2000).fadeOut();
				};
			});
		}

		function user_edit()
		{
			$(document).on('click','#btn_edit_user',function()
			{
				var user_id = $(this).attr('data-id');
				$.ajax({  
					url:'/layout/items/user_edit.php',  
					method:'POST',  
					data:{
					user_id:user_id
					},
					datatype: 'JSON',
					success:function(data)
					{
					var res = $.parseJSON(data);
					$('#ucm_company_id').val(res[0]);
					$('#company_id_2').val(res[0]);
					$('#ucm_user_id').val(res[1]);
					$('#last_name').val(res[2]);
					$('#user_approval_status').val(res[3]);
					$('#email').val(res[4]);
					$('#telephone').val(res[5]);
					$('#address').val(res[6]);
					$('#location').val(res[7]);
					$('#photo').val(res[8]);
					$('#first_name').val(res[9]);
					$('#ucm_user_super_id').val(res[10]);
					$('#user_type').val(res[11]);
					$('#user_branch').val(res[12]);
					$('#warehouse').val(res[13]);
					$.ajax({
						url:'/layout/items/user_privilege_list.php',
						method:'POST',
						data:{
							user_id:user_id
							},
						success:function(data)
						{
							$('#user_create_modal_header').html('User Edit');
							$('#user_privileges_div').html(data);
							$('#user_update_btn').show();
							$('#user_save_btn').hide();
							$.ajax({
								url:'/layout/items/user_cash_ledger_edit.php',
								method:'POST',
								data:{user_id:user_id},
								success:function(data)
								{
									$('#user_cash_ledger_list').html(data);
								}
							});
							$('#user_create_modal').modal('show');
						}
					});
					}  
				});
			});
		}

		function user_update()
		{
			$(document).on('click','#user_update_btn',function(e){
				e.preventDefault();
				var user_type = $('#user_type').val();
				var telephone = $('#telephone').val();
				var first_name = $('#first_name').val();
				var email = $('#email').val();
				if (email !== '') 
				{
					if (first_name !== '') 
					{
						if (user_type !== '') 
						{
							if (telephone !== '') 
							{
								$.ajax({
						             url:'/layout/items/user_update.php',
						             method:'POST',
						             data:$('#user_create_form').serialize(),
						             success:function(data)
							             {
							             	if (data == 'exist')
							             	{
							             		$('#user_form_msg').html('<h4 style=color:red;>Email NOT available!</h4>');
												$('#user_form_msg').hide().slideDown().delay(2000).fadeOut();
							             	} 
							             	else if (data == 'inserted')
							             	{
								             	$('#user_create_form').trigger('reset');
						             			$('#user_create_modal').modal('hide');
						             			window.location.href="/layout/items/user_list.php";
							             	};
							             }
						        });
						    } 
							else 
							{
								$('#user_form_msg').html('<h4 style=color:red;>Telephone cannot be EMPTY!</h4>');
								$('#user_form_msg').hide().slideDown().delay(2000).fadeOut();
							};
						} 
						else 
						{
							$('#user_form_msg').html('<h4 style=color:red;>User Type cannot be EMPTY!</h4>');
							$('#user_form_msg').hide().slideDown().delay(2000).fadeOut();
						};
					} 
					else 
					{
						$('#user_form_msg').html('<h4 style=color:red;>First Name cannot be EMPTY!</h4>');
						$('#user_form_msg').hide().slideDown().delay(2000).fadeOut();
					};
				} 
				else 
				{
					$('#user_form_msg').html('<h4 style=color:red;>Email cannot be EMPTY!</h4>');
					$('#user_form_msg').hide().slideDown().delay(2000).fadeOut();
				};
			});
		}

		function user_change_user_type()
		{
			$(document).on('change','#user_type',function()
			{
				var user_type_id = $('#user_type').val();
				$.ajax({
					url:'/layout/items/user_change_user_type.php',
					method:'POST',
					data:{
		             	user_type_id:user_type_id
		             },
					success:function(data)
		            {
						$('#user_privileges_div').html(data);
					}
			    });	
			});
		}

		function add_user_cash_ledger_row()
		{
			$(document).on('change','.user_cash_ledger_id',function(){ 
				var i = $('#user_cash_ledger_list_table tr:last').attr('id');
				i++;
				$.ajax({
					url:'/layout/items/user_cash_ledger_list.php',
					method:'POST',
					data:{i:i},
					success:function(data)
					{
						$('#user_cash_ledger_list_table').append('<tr id="'+i+'">'+data+'</tr>');
					}
				});
			});
		}

		function delete_user_cash_ledger_row()
		{
			$(document).on('click', '#delete_user_cash_ledger', function()
			{
       			var button_id = $(this).attr("data-id");
           		$('#'+button_id+'').remove();
           	});
		}

		function user_change_branch()
		{
			$(document).on('change','.user_change_branch',function(){
				var user_id = $(this).attr('data-id');
				var branch_id = $('#user_change_branch'+user_id).val();
				$.ajax({
					url:'/layout/items/user_change_branch.php',
					type:'POST',  
					data:{user_id:user_id, branch_id:branch_id},
					success:function()
					{
						window.location.href="/layout/items/user_list.php";
					}
				});
		    }); 
		}

	//USERS-ADMIN
		function user_admin_new_sheet()
		{
			$(document).on('click','#u',function(e)
			{
				$('#user_create_modal_header').html('User Setup');
				$('#user_create_form').trigger('reset');
				$('#user_update_btn').hide();
				$('#user_save_btn').show();
				$('#user_create_modal').modal('show');
			}) 
		}

		function user_admin_save()
		{
			$(document).on('click','#user_admin_save_btn',function(e){
				e.preventDefault();
				var name = $('#user_admin_name').val();
				var user_email = $('#user_admin_email').val();
				var user_password = $('#user_admin_password').val();
				var password_confirm = $('#user_admin_password_confirm').val();
				var telephone = $('#user_admin_telephone').val();
				if (name != '') 
				{
					if (user_email != '') 
					{
						if (user_password != '') 
							{
								if (password_confirm != '') 
								{
									if (telephone != '') 
									{
										if (user_password == password_confirm) 
										{
											$.ajax({
												url:'/layout/items/user_admin_save.php',
												method:'POST',
												data:$('#user_admin_create_form').serialize(),
												success:function(data)
												{
													if (data == 'exist')
													{
														$('#user_admin_form_msg').html('<h4 style=color:red;>Email NOT available!</h4>');
														$('#user_admin_form_msg').hide().slideDown().delay(2000).fadeOut();
													}
													else if (data == 'inserted')
													{
			             								$.ajax({
												             url:'/layout/items/user_sign_in.php',
												             method:'POST',
												             data:{user_email:user_email,user_password:user_password},
												             success:function(data)
												             {
												             	window.location.href="/layout/items/company_list.php";
												             }
												        });
													}
													else if (data == 'Invalid_Address_Email')
													{
														$('#user_admin_form_msg').html('<h4 style=color:red;>Invalid Email Address!</h4>');
														$('#user_admin_form_msg').hide().slideDown().delay(2000).fadeOut();
													};
												}
									        });
										}
										else
										{
											$('#user_admin_form_msg').html('<h4 style=color:red;>Password does NOT match!</h4>');
										    $('#user_admin_form_msg').hide().slideDown().delay(2000).fadeOut();
										};
									} 
									else 
									{
										$('#user_admin_form_msg').html('<h4 style=color:red;>Telephone cannot be EMPTY!</h4>');
										$('#user_admin_form_msg').hide().slideDown().delay(2000).fadeOut();
									};
								} 
								else 
								{
									$('#user_admin_form_msg').html('<h4 style=color:red;>Password Confirm cannot be EMPTY!</h4>');
									$('#user_admin_form_msg').hide().slideDown().delay(2000).fadeOut();
								};
							} 
							else 
							{
								$('#user_admin_form_msg').html('<h4 style=color:red;>Password cannot be EMPTY!</h4>');
								$('#user_admin_form_msg').hide().slideDown().delay(2000).fadeOut();
							};
					} 
					else 
					{
						$('#user_admin_form_msg').html('<h4 style=color:red;>Email cannot be EMPTY!</h4>');
						$('#user_admin_form_msg').hide().slideDown().delay(2000).fadeOut();
					};
				} 
				else 
				{
					$('#user_admin_form_msg').html('<h4 style=color:red;>Name cannot be EMPTY!</h4>');
					$('#user_admin_form_msg').hide().slideDown().delay(2000).fadeOut();
				};
					
			});
		}

		function user_admin_edit()
		{
			$(document).on('click','#btn_edit_user_admin',function()
			{
				var user_id = $(this).attr('data-id');
				$.ajax({  
			             url:'/layout/items/user_admin_edit.php',  
			             method:'POST',  
			             data:{
			             	user_id:user_id
			             },
			             datatype: 'JSON',
			             success:function(data){
		                 	var res = $.parseJSON(data);
		                 	$('#company_id').val(res[0]);
		                 	$('#user_id').val(res[1]);
		                 	$('#username').val(res[2]);
		                 	$('#password').val(res[3]);
		                 	$('#email').val(res[4]);
		                 	$('#telephone').val(res[5]);
		                 	$('#address').val(res[6]);
		                 	$('#location').val(res[7]);
		                 	$('#photo').val(res[8]);
		                 	$('#full_name').val(res[9]);
		                 	$('#user_create_modal_header').html('User Edit');
							$('#user_update_btn').show();
							$('#user_save_btn').hide();
			             	$('#user_create_modal').modal('show');
			             }  
		        	});
			});
		}

		function user_admin_update()
		{
			$(document).on('click','#user_admin_update_btn',function(e){
				e.preventDefault();
					$.ajax({
			             url:'/layout/items/user_admin_update.php',
			             method:'POST',
			             data:$('#user_create_form').serialize(),
			             success:function(data)
				             {
				             	$('#user_create_form').trigger('reset');
		             			$('#user_create_modal').modal('hide');
		             			window.location.href="/layout/items/user_admin_list.php";
				             }
			        });	
			});
		}

	//USERS-PERSONAL
		function user_personal_new_modal()
		{
			$(document).on('click','#new_user_link',function(e)
			{
				var company_id = $('#session_company_id').val();
				var user_super_id = $('#session_user_super_id').val();
				$('#user_personal_create_modal_header').html('User Setup');
				$('#user_personal_create_form').trigger('reset');
				$('#user_personal_company_id').val(company_id);
				$('#user_personal_company_id_2').val(company_id);
				$('#user_personal_user_super_id').val(user_super_id)
				$('#user_personal_update_btn').hide();
				$('#user_personal_save_btn').show();
				$('#user_personal_create_modal').modal('show');
			}) 
		}

		function user_personal_save()
		{
			$(document).on('click','#user_personal_save_btn',function(e){
				e.preventDefault();
				var name = $('#user_personal_full_name').val();
				var email = $('#user_personal_email').val();
				var password = $('#user_personal_password').val();
				var password_confirm = $('#user_personal_password_confirm').val();
				var telephone = $('#user_personal_telephone').val();
				if (name != '') 
				{
					if (email != '') 
					{
						if (password != '') 
						{
							if (password_confirm != '') 
							{
								if (telephone != '') 
								{
									if (password == password_confirm) 
									{
										$.ajax({
											url:'/layout/items/user_personal_save.php',
											method:'POST',
											data:$('#user_personal_create_form').serialize(),
											success:function(data)
											{
												if (data == 'exist')
												{
													$('#user_personal_form_msg').html('<h6 style=color:red;>Email NOT available!</h6>');
													$('#user_personal_form_msg').hide().slideDown().delay(2000).fadeOut();
												}
												else if (data == 'inserted')
												{
													$('#user_personal_create_form').trigger('reset');
													$('#user_personal_create_modal').modal('hide');
													$('#user_personal_form_msg').html('<h6 style=color:red;>User created successfully!</h6>');
													$('#user_personal_form_msg').hide().slideDown().delay(2000).fadeOut();
												};
											}
								        });
									}
									else
									{
										$('#user_personal_form_msg').html('<h6 style=color:red;>Password does NOT match!</h6>');
									    $('#user_personal_form_msg').hide().slideDown().delay(2000).fadeOut();
									};
								} 
								else 
								{
									$('#user_personal_form_msg').html('<h6 style=color:red;>Telephone cannot be EMPTY!</h6>');
									$('#user_personal_form_msg').hide().slideDown().delay(2000).fadeOut();
								};
							} 
							else 
							{
								$('#user_personal_form_msg').html('<h6 style=color:red;>Password Confirm cannot be EMPTY!</h6>');
								$('#user_personal_form_msg').hide().slideDown().delay(2000).fadeOut();
							};
						} 
						else 
						{
							$('#user_personal_form_msg').html('<h6 style=color:red;>Password cannot be EMPTY!</h6>');
							$('#user_personal_form_msg').hide().slideDown().delay(2000).fadeOut();
						};
					} 
					else 
					{
						$('#user_personal_form_msg').html('<h6 style=color:red;>Email cannot be EMPTY!</h6>');
						$('#user_personal_form_msg').hide().slideDown().delay(2000).fadeOut();
					};
				} 
				else 
				{
					$('#user_personal_form_msg').html('<h6 style=color:red;>Name cannot be EMPTY!</h6>');
					$('#user_personal_form_msg').hide().slideDown().delay(2000).fadeOut();
				};
					
			});
		}

		function user_personal_change_password_modal()
		{
			$(document).on('click','#change_password_link',function(e)
			{
				$('#user_personal_change_password_form').trigger('reset');
				$('#user_personal_change_password_update_btn').show();
				$('#user_personal_change_password_modal').modal('show');
			}) 
		}

		function user_personal_change_password_update()
		{
			$(document).on('click','#user_personal_change_password_update_btn',function(e){
				e.preventDefault();
				var password_old = $('#user_personal_change_password_old').val();
				var password_new = $('#user_personal_change_password_new').val();
				var password_confirm = $('#user_personal_change_password_confirm').val();
				if (password_old != '') 
				{
					if (password_new != '') 
					{
						if (password_confirm != '') 
						{
								if (password_new == password_confirm) 
								{
									$.ajax({
										url:'/layout/items/user_personal_change_password_update.php',
										method:'POST',
										data:$('#user_personal_change_password_form').serialize(),
										success:function(data)
										{
											if (data == 'no_user_match')
											{
												$('#user_personal_change_password_form_msg').html('<h6 style=color:red;>User not found!</h6>');
												$('#user_personal_change_password_form_msg').hide().slideDown().delay(2000).fadeOut();
											}
											else if (data == 'old_password_not_match')
											{
												$('#user_personal_change_password_form_msg').html('<h6 style=color:red;>User old password does not match!</h6>');
												$('#user_personal_change_password_form_msg').hide().slideDown().delay(2000).fadeOut();
											}
											else if (data == 'password_not_updated')
											{
												$('#user_personal_change_password_form_msg').html('<h6 style=color:red;>User password not updated!</h6>');
												$('#user_personal_change_password_form_msg').hide().slideDown().delay(2000).fadeOut();
											}
											else if (data == 'password_updated')
											{
												$('#user_personal_change_password_form').trigger('reset');
												$('#user_personal_change_password_form_msg').html('<h6 style=color:red;>Password updated successfully!</h6>');
												$('#user_personal_change_password_form_msg').hide().slideDown().delay(2000).fadeOut();
												$('#user_personal_change_password_modal').modal('hide');
											};
										}
							        });
								}
								else
								{
									$('#user_personal_change_password_form_msg').html('<h6 style=color:red;>Password does NOT match!</h6>');
								    $('#user_personal_change_password_form_msg').hide().slideDown().delay(2000).fadeOut();
								};
						} 
						else 
						{
							$('#user_personal_change_password_form_msg').html('<h6 style=color:red;>Password Confirm cannot be EMPTY!</h6>');
							$('#user_personal_change_password_form_msg').hide().slideDown().delay(2000).fadeOut();
						};			} 
					else 
					{
						$('#user_personal_change_password_form_msg').html('<h6 style=color:red;>New Password cannot be EMPTY!</h6>');
						$('#user_personal_change_password_form_msg').hide().slideDown().delay(2000).fadeOut();
					};
				} 
				else 
				{
					$('#user_personal_change_password_form_msg').html('<h6 style=color:red;>Old Password cannot be EMPTY!</h6>');
					$('#user_personal_change_password_form_msg').hide().slideDown().delay(2000).fadeOut();
				};
					
			});
		}

		function user_personal_reset_password_modal()
		{
			$(document).on('click','#btn_reset_user',function()
			{
				var user_id = $(this).attr('data-id');
				$('#user_personal_reset_password_form').trigger('reset');
				$('#user_personal_reset_password_user_id').val(user_id);
				$('#user_personal_reset_password_email').val(user_id);
				$('#user_personal_reset_password_email_2').val(user_id);
				$('#user_personal_reset_password_update_btn').show();
				$('#user_personal_reset_password_modal').modal('show');
			});
		}

		function user_personal_reset_password_update()
		{
			$(document).on('click','#user_personal_reset_password_update_btn',function(e){
				e.preventDefault();
				var password_new = $('#user_personal_reset_password_new').val();
				var password_confirm = $('#user_personal_reset_password_confirm').val();
				if (password_new != '') 
				{
					if (password_confirm != '') 
					{
							if (password_new == password_confirm) 
							{
								$.ajax({
									url:'/layout/items/user_personal_reset_password_update.php',
									method:'POST',
									data:$('#user_personal_reset_password_form').serialize(),
									success:function(data)
									{
										if (data == 'no_user_match')
										{
											$('#user_personal_reset_password_form_msg').html('<h6 style=color:red;>User not found!</h6>');
											$('#user_personal_reset_password_form_msg').hide().slideDown().delay(2000).fadeOut();
										}
										else if (data == 'password_do_not_match')
										{
											$('#user_personal_reset_password_form_msg').html('<h6 style=color:red;>User old password does not match!</h6>');
											$('#user_personal_reset_password_form_msg').hide().slideDown().delay(2000).fadeOut();
										}
										else if (data == 'password_not_updated')
										{
											$('#user_personal_reset_password_form_msg').html('<h6 style=color:red;>User password not updated!</h6>');
											$('#user_personal_reset_password_form_msg').hide().slideDown().delay(2000).fadeOut();
										}
										else if (data == 'password_updated')
										{
											$('#user_personal_reset_password_form').trigger('reset');
											$('#user_personal_reset_password_form_msg').html('<h6 style=color:red;>Password updated successfully!</h6>');
											$('#user_personal_reset_password_form_msg').hide().slideDown().delay(2000).fadeOut();
											$('#user_personal_reset_password_modal').modal('hide');
										};
									}
								});
							}
							else
							{
								$('#user_personal_reset_password_form_msg').html('<h6 style=color:red;>Password does NOT match!</h6>');
								$('#user_personal_reset_password_form_msg').hide().slideDown().delay(2000).fadeOut();
							};
					} 
					else 
					{
						$('#user_personal_reset_password_form_msg').html('<h6 style=color:red;>Password Confirm cannot be EMPTY!</h6>');
						$('#user_personal_reset_password_form_msg').hide().slideDown().delay(2000).fadeOut();
					};
				} 
				else 
				{
					$('#user_personal_reset_password_form_msg').html('<h6 style=color:red;>New Password cannot be EMPTY!</h6>');
					$('#user_personal_reset_password_form_msg').hide().slideDown().delay(2000).fadeOut();
				};
			});
		}

	//LEDGER
		function save_ledger()
		{
			$(document).on('click','#ledger_save_btn',function(){
				var company_id = $('#session_company_id').val();
				var user_super_id = $('#session_user_super_id').val();
				var user_id = $('#session_user_id').val();
				$('#company_id').val(company_id);
				$('#user_id').val(user_id);
				$('#user_super_id').val(user_super_id);

				$.ajax({
		             url:'/layout/items/ledger_insert.php',
		             method:'POST',
		             data:$('#ledger_create_form').serialize(),
		             success:function()
		             {
		             	window.location.href="/layout/items/ledger_list.php";
		             }
		        });
		    });
		}

		function tb_2_list()
		{
			$(document).on('change','#tb_1',function()
			{
				var tb_1 = $('#tb_1').val();
				$.ajax(
				{
					url: '/layout/items/tb_2_list.php',
					method: 'POST',
					data: {tb_1:tb_1},
					datatype: 'JSON',
					success: function(data)
					{
						var res = $.parseJSON(data);
						$('#tb_2').html('<option value="0">Please select</option>');
						for (var i=0, l=res.length; i<l;i+=2)
						{
							var oddPositionVal = res[i];
							var evenPositionVal = res[i+1];
							var rowhtml = '<option value=' + oddPositionVal + '>' + evenPositionVal + '</option>';
							$('#tb_2').append(rowhtml);
						}
					}
				});
				
			});
		}

		function tb_3_list()
		{
			$(document).on('change','#tb_2',function()
			{
				var tb_2 = $('#tb_2').val();
				$.ajax(
				{
					url: '/layout/items/tb_3_list.php',
					method: 'POST',
					data: {tb_2:tb_2},
					datatype: 'JSON',
					success: function(data)
					{
						var res = $.parseJSON(data);
						$('#tb_3').html('<option value="0">Please select</option>');
						for (var i=0, l=res.length; i<l;i+=2)
						{
							var oddPositionVal = res[i];
							var evenPositionVal = res[i+1];
							var rowhtml = '<option value=' + oddPositionVal + '>' + evenPositionVal + '</option>';
							$('#tb_3').append(rowhtml);
						}
						if(tb_2 == 1){$('#ledger_opening_state').val('Dr');$('#ledger_opening_state_up').val('Dr');}
						else if(tb_2 == 2){$('#ledger_opening_state').val('Cr');$('#ledger_opening_state_up').val('Cr');}
						else if(tb_2 == 3){$('#ledger_opening_state').val('Cr');$('#ledger_opening_state_up').val('Cr');}
						else if(tb_2 == 4){$('#ledger_opening_state').val('Dr');$('#ledger_opening_state_up').val('Dr');}
					}
				});
			});
		}

		function tb_4_list()
		{
			$(document).on('change','#tb_3',function()
			{
				var tb_3 = $('#tb_3').val();
				$.ajax(
				{
					url: '/layout/items/tb_4_list.php',
					method: 'POST',
					data: {tb_3:tb_3},
					datatype: 'JSON',
					success: function(data)
					{
						var res = $.parseJSON(data);
						$('#tb_4').html('<option value="0">Please select</option>');
						for (var i=0, l=res.length; i<l;i+=2)
						{
							var oddPositionVal = res[i];
							var evenPositionVal = res[i+1];
							var rowhtml = '<option value=' + oddPositionVal + '>' + evenPositionVal + '</option>';
							$('#tb_4').append(rowhtml);
						}
					}
				});
				
			});
		}

		function tb_5_list()
		{
			$(document).on('change','#tb_4',function()
			{
				var tb_4 = $('#tb_4').val();
				$.ajax(
				{
					url: '/layout/items/tb_5_list.php',
					method: 'POST',
					data: {tb_4:tb_4},
					datatype: 'JSON',
					success: function(data)
					{
						var res = $.parseJSON(data);
						$('#tb_5').html('<option value="0">Please select</option>');
						for (var i=0, l=res.length; i<l;i+=2)
						{
							var oddPositionVal = res[i];
							var evenPositionVal = res[i+1];
							var rowhtml = '<option value=' + oddPositionVal + '>' + evenPositionVal + '</option>';
							$('#tb_5').append(rowhtml);
						}
					}
				});
			});
		}

		function show_ledger_type()
		{
			$(document).on('change','#tb_5',function()
			{
				var tb_5 = $('#tb_5').val();
				
				if (tb_5==1)
				{
					$('#ledger_type_div').show();
					$("ledger_type_div").addClass("col-md-4 mb-4");
					$("ledger_code_div").addClass("col-md-2 mb-2");
				}
				else
				{
					$('#ledger_type_div').hide();
					$("ledger_code_div").addClass("col-md-6 mb-6");
				};
			});
		}

		function new_ledger_modal()
		{
			$(document).on('click','#new_ledger_icon',function()
			{
				var company_id = $('#session_company_id').val();
				var user_super_id = $('#session_user_super_id').val();
				var user_id = $('#session_user_id').val();
				$('#ledger_create_form').trigger('reset');
				$('#ledger_company_id').val(company_id);
				$('#ledger_user_super_id').val(user_super_id);
				$('#ledger_user_id').val(user_id);

				$('#ledger_create_modal_header').html('Ledger Setup');
				$('#ledger_update_btn').hide();
				$('#ledger_execute_btn').hide();
				$('.trial_balance_group').show();
				$('#ledger_save_btn').show();
				$('#ledgercreatemodal').modal('show');
			});
		}

		function ledger_modal()
		{
			$(document).on('click','#new_customer_ledger, #new_supplier_ledger, #new_cash_ledger, #new_bank_ledger, #new_expense_ledger',function()
			{
				var type = $(this).attr('data-id');
				var company_id = $('#session_company_id').val();
				var user_super_id = $('#session_user_super_id').val();
				var user_id = $('#session_user_id').val();
				$('#ledger_create_form').trigger('reset');
				$('#ledger_company_id').val(company_id);
				$('#ledger_user_super_id').val(user_super_id);
				$('#ledger_user_id').val(user_id);
				$('.trial_balance_group').hide();
				if(type == 'customer')
				{
					$('#ledger_create_modal_header').html('Customer/Debtor Setup');
					$('#ledger_type').val('customer');
					$('#ledger_opening_state').val('Dr');
				}else if(type == 'supplier')
				{
					$('#ledger_create_modal_header').html('Supplier/Creditor Setup');
					$('#ledger_type').val('supplier');
					$('#ledger_opening_state').val('Cr');
				}else if(type == 'cash')
				{
					$('#ledger_create_modal_header').html('Cash Account Setup');
					$('#ledger_type').val('cash');
					$('#ledger_opening_state').val('Dr');
				}else if(type == 'bank')
				{
					$('#ledger_create_modal_header').html('Bank Account Setup');
					$('#ledger_type').val('bank');
					$('#ledger_opening_state').val('Dr');
				}else if(type == 'expense')
				{
					$('#ledger_create_modal_header').html('Expense Ledger Setup');
					$('#ledger_type').val('expense');
					$('#ledger_opening_state').val('Dr');
				};

				$('#ledger_update_btn').hide();
				$('#ledger_save_btn').hide();
				$('#ledger_execute_btn').show();
				$('#ledgercreatemodal').modal('show');
			});
		}

		function execute_ledger()
		{
			$(document).on('click','#ledger_execute_btn',function(){
				$.ajax({
					url:'/layout/items/ledger_execute.php',
					method:'POST',
					data:$('#ledger_create_form').serialize(),
					success:function()
					{
						window.location.href="/layout/items/ledger_list.php";
					}
		        });
		    });
		}

		function edit_ledger()
		{
			$(document).on('click','#btn_edit_ledger',function()
			{
				var ledger_id = $(this).attr('data-id');
				$.ajax(
				{
					url: '/layout/items/ledger_get_data.php',
					method: 'POST',
					data: {ledger_id:ledger_id},
					datatype: 'JSON',
					success: function(data)
					{
						var res = $.parseJSON(data);
						$('#ledgerid_up').val(res[0]);
						$('#ledgerdesc_up').val(res[1]);
						$('#ledgerCode_up').val(res[2]);
						$('#tb_1_up').val(res[3]);
						$('#tb_2_up').val(res[5]);
						$('#tb_3_up').val(res[7]);
						$('#tb_4_up').val(res[9]);
						$('#tb_5_up').val(res[11]);
						$('#ledgertype_up').val(res[13]);
						$('#ledgeraddress_up').val(res[14]);
						$('#ledgeremail_up').val(res[15]);
						$('#ledgerphone_up').val(res[16]);
						$('#ledgerstatus_up').val(res[17]);
						$('#show_balance_up').val(res[18]);
						$('#ledger_edit_modal_header').html('Ledger Update');
						if (res[11] == 1)
						{
							$('#ledger_type_div_up').show();
							$("ledger_type_div_up").addClass("col-md-4 mb-4");
							$("ledger_code_div_up").addClass("col-md-2 mb-2");
						}
						else{
							$('#ledger_type_div_up').hide();
							$("ledger_code_div_up").addClass("col-md-6 mb-6");
						};
						$('#ledger_opening_balance_up').val(res[19]);
						$('#ledger_opening_date_up').val(res[20]);
						$('#ledger_opening_state_up').val(res[21]);
						$('#ledger_branch_id_up').val(res[22]);
						$('#ledger_update_btn').show();
						$('#ledger_save_btn').hide();
						$('#ledgereditmodal').modal('show');
					}
				})
			}) 
		}

		function update_ledger()
		{
			$(document).on('click','#ledger_update_btn',function(){
				$.ajax({
					url:'/layout/items/ledger_update.php',
					method:'POST',
					data:$('#ledger_edit_form').serialize(),
					success:function()
					{
						window.location.href="/layout/items/ledger_list.php";
					}
		        });
		    });
		}

		function search_ledger_by_name()
		{
			$(document).on('keyup','#ledger_search',function(e){
				e.preventDefault();
				var company_id = $('#session_company_id').val();
				var ledger_search = $('#ledger_search').val();

				$.ajax({
		             url:'/layout/items/ledger_search_by_name.php',
		             method:'POST',
		             data:{ledger_search:ledger_search,company_id:company_id},
		             success:function(data)
		             {
		             	$('#ledger_list_card_body').html(data);
		             }
		        });
			});
		}

		function ledger_help()
		{
			$(document).on('click','#new_ledger_help',function(e){
				window.open('/help/ledger_help.pdf', '_blank');
			});
		}
		
		function delete_ledger()
		{
			$(document).on('click','#btn_delete_ledger',function(){
				var ledger_id = $(this).attr('data-id');
				var currentRow=$(this).closest("tr");
				var ledger = currentRow.find("td:eq(1)").text();
				$('#item_delete_modal_title').text('Ledger Deletion!');
				$('#item_delete_question').text('Are you sure you want to delete ' + ledger + '?');
				$('#item_delete_modal').modal('show');
				$(document).on('click','#item_delete_yes',function(){
					$.ajax({  
		                 url:'/layout/items/ledger_delete.php',  
		                 type:'POST',  
		                 data:{ledger_id:ledger_id},
		                 success:function(data)
						 {
							if(data == 'deleted')
							{
								$('#item_delete_question').text(ledger +' deleted successfully!');
								$('#item_delete_no').hide();
								$('#item_delete_yes').text('OK');
								$(document).on('click','#item_delete_yes',function()
								{
									$('#item_delete_modal').modal('hide');
									window.location.href="/layout/items/ledger_list.php";
								})
							}
							else if(data == 'used')
							{
								$('#item_delete_question').text(ledger +' has been used for transactions, deletion is declined!');
								$('#item_delete_no').hide();
								$('#item_delete_yes').text('OK');
								$(document).on('click','#item_delete_yes',function()
								{
									$('#item_delete_modal').modal('hide');
									window.location.href="/layout/items/ledger_list.php";
								});
							};
		                 }
		            });
			      });
				$(document).on('click','#item_delete_no',function(){
					$('#item_delete_modal').modal('hide');
				});
			});
		}
		
	//CUSTOMER
		function customer_new_modal()
		{
			$(document).on('click','#new_customer_icon',function()
			{
				var type = $(this).attr('data-id');
				$('#customer_create_modal_header').html('Customer Setup');
				$('#customer_create_form').trigger('reset');
				$('#customer_entry_type').val(type);
				$('#customer_update_btn').hide();
				$('#customer_save_btn').show();
				$('#customer_create_modal').modal('show');
			}) 
		}

		function customer_save()
		{
			$(document).on('click','#customer_save_btn',function(e){
				var customer_first_name = $('#customer_first_name').val();
				var customer_sex = $('#customer_sex').val();
				var customer_dob = $('#customer_dob').val();
				var customer_phone_number = $('#customer_phone_number').val();
				var customer_id_number = $('#customer_id_number').val();
				var customer_entry_type = $('#customer_entry_type').val();
				e.preventDefault();
				if (customer_first_name != "")
				{
					if (customer_sex != "")
					{
						if (customer_dob != "")
						{
							if (customer_phone_number != "")
							{
								if (customer_id_number != "")
								{
									$.ajax({
										url:'/layout/items/customer_save.php',
										method:'POST',
										data:$('#customer_create_form').serialize(),
										success:function(data)
										{
											$('#customer_create_form').trigger('reset');
											$('#customer_create_modal').modal('hide');
											if(customer_entry_type == 'customer')
											{
												window.location.href="/layout/items/customer_list.php";
											}
											else if(customer_entry_type == 'invoice')
											{
												$('#stock_sales_invoice_customer_details').html(data);
											};
										}
									});
								} 
								else 
								{
									$('#customer_create_form_msg').html('<h6 style=color:red;>Please the ID Number cannot be EMPTY!</h6>');
									$('#customer_create_form_msg').hide().slideDown().delay(2000).fadeOut();
								};
							} 
							else 
							{
								$('#customer_create_form_msg').html('<h6 style=color:red;>Please the Phone Number cannot be EMPTY!</h6>');
								$('#customer_create_form_msg').hide().slideDown().delay(2000).fadeOut();
							};
						} 
						else 
						{
							$('#customer_create_form_msg').html('<h6 style=color:red;>Please the Date of Birth cannot be EMPTY!</h6>');
							$('#customer_create_form_msg').hide().slideDown().delay(2000).fadeOut();
						};
					} 
					else 
					{
						$('#customer_create_form_msg').html('<h6 style=color:red;>Please the Sex cannot be EMPTY!</h6>');
						$('#customer_create_form_msg').hide().slideDown().delay(2000).fadeOut();
					};
				} 
				else 
				{
					$('#customer_create_form_msg').html('<h6 style=color:red;>Please the Name cannot be EMPTY!</h6>');
					$('#customer_create_form_msg').hide().slideDown().delay(2000).fadeOut();
				};
			});
		}

		function customer_edit()
		{
			$(document).on('click','#btn_edit_customer',function()
			{
				var customer_id = $(this).attr('data-id');
				$.ajax({  
					url:'/layout/items/customer_edit.php',  
					method:'POST',  
					data:{
						customer_id:customer_id
					},
					datatype: 'JSON',
					success:function(data)
					{
						var res = $.parseJSON(data);
						$('#customer_id').val(res[0]);
						$('#customer_first_name').val(res[1]);
						$('#customer_last_name').val(res[2]);
						$('#customer_dob').val(res[3]);
						$('#customer_phone_number').val(res[4]);
						$('#customer_address').val(res[5]);
						$('#customer_location').val(res[6]);
						$('#customer_email').val(res[7]);
						$('#customer_marital_status').val(res[8]);
						$('#customer_sex').val(res[9]);
						$('#customer_occupation').val(res[10]);
						$('#customer_religion').val(res[11]);
						$('#customer_id_number').val(res[12]);
						$('#customer_id_type').val(res[13]);
						$('#customer_other_info').val(res[14]);
						$('#customer_allergies').val(res[15]);
						$('#customer_branch').val(res[16]);
						$('#customer_create_modal_header').html('Customer Edit');
						$('#customer_update_btn').show();
						$('#customer_save_btn').hide();
						$('#customer_create_modal').modal('show');
					}
				});
			});
		}

		function customer_update()
		{
			$(document).on('click','#customer_update_btn',function(e){
				e.preventDefault();
				var customer_first_name = $('#customer_first_name').val();
				var customer_sex = $('#customer_sex').val();
				var customer_dob = $('#customer_dob').val();
				var customer_phone_number = $('#customer_phone_number').val();
				var customer_id_number = $('#customer_id_number').val();
				if (customer_first_name != "")
				{
					if (customer_sex != "")
					{
						if (customer_dob != "")
						{
							if (customer_phone_number != "")
							{
								if (customer_id_number != "")
								{
									$.ajax({
										url:'/layout/items/customer_update.php',
										method:'POST',
										data:$('#customer_create_form').serialize(),
										success:function(data)
										{
											$('#customer_create_form').trigger('reset');
											$('#customer_create_modal').modal('hide');
											window.location.href="/layout/items/customer_list.php";
										}
									});
								} 
								else 
								{
									$('#customer_create_form_msg').html('<h6 style=color:red;>Please the ID Number cannot be EMPTY!</h6>');
									$('#customer_create_form_msg').hide().slideDown().delay(2000).fadeOut();
								};
							} 
							else 
							{
								$('#customer_create_form_msg').html('<h6 style=color:red;>Please the Phone Number cannot be EMPTY!</h6>');
								$('#customer_create_form_msg').hide().slideDown().delay(2000).fadeOut();
							};
						} 
						else 
						{
							$('#customer_create_form_msg').html('<h6 style=color:red;>Please the Date of Birth cannot be EMPTY!</h6>');
							$('#customer_create_form_msg').hide().slideDown().delay(2000).fadeOut();
						};
					} 
					else 
					{
						$('#customer_create_form_msg').html('<h6 style=color:red;>Please the Sex cannot be EMPTY!</h6>');
						$('#customer_create_form_msg').hide().slideDown().delay(2000).fadeOut();
					};
				} 
				else 
				{
					$('#customer_create_form_msg').html('<h6 style=color:red;>Please the Name cannot be EMPTY!</h6>');
					$('#customer_create_form_msg').hide().slideDown().delay(2000).fadeOut();
				};
			});
		}

		function customer_search_modal()
		{
			$(document).on('click','#search_customer_icon',function()
			{
				$('#customer_search').prop('id','item_search');
				$('#customer_list_table').html('');
				$('#item_search_modal_header').text('Customer Search');
				$('#item_search_modal_form').trigger('reset');
				$('#item_search_modal').modal('show');
			});
		}

		function customer_find()
		{
			$(document).on('click','#nds_sales_find_customer',function()
			{
				$('#nds_customer_search_div').prop('hidden', false);
			});
		}

		function customer_search()
		{
			$(document).on('keyup','#customer_search_name',function(e)
			{
				e.preventDefault();
				var search = $(this).val();
				var criteria = $('#customer_search_name_criteria').val();
				$.ajax({
					url:'/layout/items/customer_search.php',
					method:'POST',
					data:{
						search:search,
						criteria:criteria
					},
					success:function(data)
					{
						$('#customer_table').prop('hidden', false);
						$('#customer_table').html(data);
					}
				});
			});
		}

		function customer_search_save()
		{
			$(document).on('click','#search_customer_save',function(e)
			{
				e.preventDefault();
				var customer_id = $(this).attr('data-id');
				$.ajax({
					url:'/layout/items/customer_search_save.php',
					method:'POST',
					data:{
						customer_id:customer_id
					},
					success:function(data)
					{
						$('#item_search_modal_form').trigger('reset');
						$('#item_search_modal').modal('hide');
						$('#stock_sales_invoice_customer_details').html(data);
					}
				});
			});
		}

		function customer_insert()
		{
			$(document).on('click','#btn_insert_customer',function()
			{
				var customer_id = $(this).attr('data-customer_id');
				var customer_name = $(this).attr('data-customer_name');
				var phone_number = $(this).attr('data-phone_number');
				$('#nds_sales_customer_select').val(customer_id);
				$('#nds_sales_telephone').val(phone_number);
				$('#waybill_customer_id').val(customer_id);
				$('#waybill_customer_phone').val(phone_number);
				$('#waybill_customer_phoneD').val(phone_number);
				$('#waybill_customer_name').val(customer_name);
				$('#nds_customer_search_div').prop('hidden', true);
					$.ajax({
						url:'/layout/vouchers/waybill_customer_item_list.php',
						method:'POST',
						data:{customer_id:customer_id},
						success:function(data)
						{
							$('#waybill_customer_phone').val(phone_number);
							$('#waybill_customer_phoneD').val(phone_number);
							$('#waybill_customer_name').val(customer_name);
							$('#waybill_items_list').html(data);
						}
					});
			});
		}
		
	//SERVICE
		function service_new_modal()
		{
			$(document).on('click','#new_service_icon',function()
			{
				$('#service_create_modal_header').html('Service Setup');
				$('#service_create_form').trigger('reset');
				$('#service_update_btn').hide();
				$('#service_save_btn').show();
				$('#beanch_status').val('Active');
				$('#service_create_modal').modal('show');
			});
		}

		function service_save()
		{
			$(document).on('click','#service_save_btn',function(e)
			{
				e.preventDefault();
				var service_name = $('#service_name').val();
				var service_price = $('#service_price').val();
				if (service_name !== "")
				{
					if (service_price !== "")
					{
						$.ajax({
							url:'/layout/items/service_save.php',
							method:'POST',
							data:$('#service_create_form').serialize(),
							success:function(data)
							{
								$('#service_create_form').trigger('reset');
								$('#service_create_modal').modal('hide');
								window.location.href="/layout/items/service_list.php";
							}
						});
					} 
					else 
					{
						$('#service_create_form_msg').html('<h6 style=color:red;>Please the Price cannot be EMPTY!</h6>');
						$('#service_create_form_msg').hide().slideDown().delay(2000).fadeOut();
					};
				} 
				else 
				{
					$('#service_create_form_msg').html('<h6 style=color:red;>Please the Service cannot be EMPTY!</h6>');
					$('#service_create_form_msg').hide().slideDown().delay(2000).fadeOut();
				};
			});
		}

		function service_edit()
		{
			$(document).on('click','#btn_edit_service',function()
			{
				var service_id = $(this).attr('data-id');
				$.ajax({  
					url:'/layout/items/service_edit.php',  
					method:'POST',  
					data:{
					service_id:service_id
					},
					datatype: 'JSON',
					success:function(data)
					{
						var res = $.parseJSON(data);
						$('#service_id').val(res[0]);
						$('#service_name').val(res[1]);
						$('#service_price').val(res[2]);
						$('#service_create_modal_header').html('Service Edit');
						$('#service_update_btn').show();
						$('#service_save_btn').hide();
						$('#service_create_modal').modal('show');
					}
				});
			});
		}

		function service_update()
		{
			$(document).on('click','#service_update_btn',function(e){
				e.preventDefault();
				var service_name = $('#service_name').val();
				var service_price = $('#service_price').val();
				if (service_name !== "")
				{
					if (service_price !== "")
					{
						$.ajax({
							url:'/layout/items/service_update.php',
							method:'POST',
							data:$('#service_create_form').serialize(),
							success:function(data)
							{
								$('#service_create_form').trigger('reset');
								$('#service_create_modal').modal('hide');
								window.location.href="/layout/items/service_list.php";
							}
						});
					} 
					else 
					{
						$('#service_create_form_msg').html('<h6 style=color:red;>Please the Price cannot be EMPTY!</h6>');
						$('#service_create_form_msg').hide().slideDown().delay(2000).fadeOut();
					};
				} 
				else 
				{
					$('#service_create_form_msg').html('<h6 style=color:red;>Please the service Name cannot be EMPTY!</h6>');
					$('#service_create_form_msg').hide().slideDown().delay(2000).fadeOut();
				};
			});
		}
		
		function service_delete()
		{
			$(document).on('click','#btn_delete_service',function(){
				var service_id = $(this).attr('data-id');
				var currentRow=$(this).closest("tr");
				var item = currentRow.find("td:eq(0)").text();
				$('#item_delete_modal_title').text('Service Deletion!');
				$('#item_delete_question').text('Are you sure you want to delete : ' + item + '?');
				$('#item_delete_modal').modal('show');
				$(document).on('click','#item_delete_yes',function()
				{
					$.ajax({  
		                 url:'/layout/items/service_delete.php',  
		                 type:'POST',  
		                 data:{service_id:service_id},
		                 success:function(data)
						 {
							if(data == 'deleted')
							{
								$('#item_delete_question').text(item +' deleted successfully!');
								$('#item_delete_no').hide();
								$('#item_delete_yes').text('OK');
								$(document).on('click','#item_delete_yes',function()
								{
									$('#item_delete_modal').modal('hide');
									window.location.href="/layout/items/service_list.php";
								})
							}
							else if(data == 'used')
							{
								$('#item_delete_question').text(item +' has been used for transactions, deletion is declined!');
								$('#item_delete_no').hide();
								$('#item_delete_yes').text('OK');
								$(document).on('click','#item_delete_yes',function()
								{
									$('#item_delete_modal').modal('hide');
									window.location.href="/layout/items/service_list.php";
								});
							};
		                 }
		            });
			      });
				$(document).on('click','#item_delete_no',function(){
					$('#item_delete_modal').modal('hide');
				});
			});
		}

	//STOCK ITEM TYPE
		function stock_item_type_new_modal()
		{
			$(document).on('click','#new_stock_item_type_icon',function()
			{
				$('#stock_item_type_create_modal_header').html('Stock Type Setup');
				$('#stock_item_type_create_form').trigger('reset');
				$('#stock_item_type_update_btn').hide();
				$('#stock_item_type_save_btn').show();
				$('#stock_item_type_create_modal').modal('show');
			});
		}

		function stock_item_type_save()
		{
			$(document).on('click','#stock_item_type_save_btn',function(e)
			{
				e.preventDefault();
				var stock_item_type = $('#stock_item_type').val();
				if (stock_item_type !== "")
				{
					$.ajax({
						url:'/layout/items/stock_item_type_save.php',
						method:'POST',
						data:$('#stock_item_type_create_form').serialize(),
						success:function(data)
						{
							$('#stock_item_type_create_form').trigger('reset');
							$('#stock_item_type_create_modal').modal('hide');
							window.location.href="/layout/items/stock_item_type_list.php";
						}
					});
				} 
				else 
				{
					$('#stock_item_type_create_form_msg').html('<h6 style=color:red;>Please the Stock Item Type cannot be EMPTY!</h6>');
					$('#stock_item_type_create_form_msg').hide().slideDown().delay(2000).fadeOut();
				};
			});
		}

		function stock_item_type_edit()
		{
			$(document).on('click','#btn_edit_stock_item_type',function()
			{
				var stock_item_type_id = $(this).attr('data-id');
				$.ajax({  
					url:'/layout/items/stock_item_type_edit.php',  
					method:'POST',  
					data:{
					stock_item_type_id:stock_item_type_id
					},
					datatype: 'JSON',
					success:function(data)
					{
						var res = $.parseJSON(data);
						$('#stock_item_type_id').val(res[0]);
						$('#stock_item_type').val(res[1]);
						$('#stock_item_type_create_modal_header').html('Stock Item Type Edit');
						$('#stock_item_type_update_btn').show();
						$('#stock_item_type_save_btn').hide();
						$('#stock_item_type_create_modal').modal('show');
					}
				});
			});
		}

		function stock_item_type_update()
		{
			$(document).on('click','#stock_item_type_update_btn',function(e){
				e.preventDefault();
				var stock_item_type = $('#stock_item_type').val();
				if (stock_item_type !== "")
				{
					$.ajax({
						url:'/layout/items/stock_item_type_update.php',
						method:'POST',
						data:$('#stock_item_type_create_form').serialize(),
						success:function(data)
						{
							$('#stock_item_type_create_form').trigger('reset');
							$('#stock_item_type_create_modal').modal('hide');
							window.location.href="/layout/items/stock_item_type_list.php";
						}
					});
				} 
				else 
				{
					$('#stock_item_type_create_form_msg').html('<h6 style=color:red;>Please the Stock Item Name cannot be EMPTY!</h6>');
					$('#stock_item_type_create_form_msg').hide().slideDown().delay(2000).fadeOut();
				};
			});
		}
		
		function stock_item_type_delete()
		{
			$(document).on('click','#btn_delete_stock_item_type',function(){
				var stock_item_type_id = $(this).attr('data-id');
				var currentRow=$(this).closest("tr");
				var item = currentRow.find("td:eq(0)").text();
				$('#item_delete_modal_title').text('Stock Item Type Deletion!');
				$('#item_delete_question').text('Are you sure you want to delete : ' + item + '?');
				$('#item_delete_modal').modal('show');
				$(document).on('click','#item_delete_yes',function()
				{
					$.ajax({  
						url:'/layout/items/stock_item_type_delete.php',  
						type:'POST',  
						data:{stock_item_type_id:stock_item_type_id},
						success:function(data)
						{
							if(data == 'deleted')
							{
								$('#item_delete_question').text(item +' deleted successfully!');
								$('#item_delete_no').hide();
								$('#item_delete_yes').text('OK');
								$(document).on('click','#item_delete_yes',function()
								{
									$('#item_delete_modal').modal('hide');
									window.location.href="/layout/items/stock_item_type_list.php";
								})
							}
							else if(data == 'used')
							{
								$('#item_delete_question').text(item +' has been used for some Stock Items, deletion is declined!');
								$('#item_delete_no').hide();
								$('#item_delete_yes').text('OK');
								$(document).on('click','#item_delete_yes',function()
								{
									$('#item_delete_modal').modal('hide');
									window.location.href="/layout/items/stock_item_type_list.php";
								});
							};
						}
					});
				});
				$(document).on('click','#item_delete_no',function(){
					$('#item_delete_modal').modal('hide');
				});
			});
		}
	
	//STOCK_ITEMS
		function new_stock_item_modal()
		{
			$(document).on('click','#new_stock_item_icon',function()
			{
				$("#stock_item_detail_div").attr('class', 'col-md-12 mb-12');
				$("#stock_item_image_div").attr('hidden', true);
				$('#stock_item_update_btn').hide();
				$('#stock_item_save_btn').show();
				$('#stock_item_cancel_btn').show();
				$('#stock_item_create_form').trigger('reset');
				$('#block_neg').val('No');
				$('#batch').val('No');
				$('#expiry_date').val('No');
				$('#days_prompt').val(90);
				$('#min_level').val(100);
				$('#max_level').val(1000);
				//$('#re_order_level').val(500);
				$('#eoq').val(600);
				$('#stock_item_create_modal').modal('show');
			});
		}

		function cancel_stock_item_modal()
		{
			$(document).on('click','#stock_item_cancel_btn',function()
			{
				$('#stock_item_create_modal').modal('hide');
				window.location.href="/layout/items/stock_item_list.php";
			});
		}

		function stock_item_add_component()
		{
			$(document).on('click','#add_stock_item_component',function()
			{
				var i = $('#stock_item_component_list_table tr:last').attr('id');
				$.ajax({
					url:'/layout/items/stock_item_add_component.php',
					method:'POST',
					data:{i:i},
					success:function(data)
					{
						$('#stock_item_component_list_table').append(data);
					}
				});
			});
		}

		function stock_item_component_price()
		{
			$(document).on('click','.stock_item_component_id',function(){
				var i = $('#stock_item_component_list_table tr:last').attr('id');
				var component_id = $('#stock_item_component_id'+i+'').val();
				$.ajax({
					url:'/layout/items/stock_item_component_price.php',
					method:'POST',
					data:{component_id:component_id},
					datatype:'JSON',
					success:function(data)
					{
						var res = $.parseJSON(data);
						$('#stock_item_component_price'+i+'').val(res[0]);
						$('#stock_item_component_priceD'+i+'').val(res[0]);
					}
		        });
			});
		}

		function stock_item_sum_component_amount()
		{
			$(document).on('keyup change', '.stock_item_component_price, .stock_item_component_gram', function()
			{  
				var button_id = $(this).closest('tr').attr('id');
				var component = $('#stock_item_component_id'+button_id).val();
				var price = $('#stock_item_component_price'+button_id).val();
				var gram = $('#stock_item_component_gram'+button_id).val();
				
				var item_gram = $('#grams').val();
				
				if(component != '' && component > 0)
				{
					var amount = 0;
					var amount = gram * price;
					$('#stock_item_component_amount'+button_id).val(amount);
					$('#stock_item_component_amountD'+button_id).val(amount);

					var total_gram = 0;
					var total_amount = 0;
					$(".stock_item_component_gram").each(function(){
						total_gram += +$(this).val();
					});
					$(".stock_item_component_amount").each(function(){
						total_amount += +$(this).val();
					});
					var price_per_gram = total_amount/total_gram;
					$("#stock_item_component_grams_total").val(total_gram);
					$("#stock_item_component_amount_total").val(total_amount);
					$("#grams").val(total_gram);
					$("#price_per_gram").val(price_per_gram.toFixed(2));
					$("#price_cash").val(total_amount);
				}
				else
				{
					$(this).val(0);
					alert('Please select the Component first!');
				};
			});
		}

		function stock_item_delete_component()
		{
			$(document).on('click', '.btn_delete_stock_item_component', function()
			{  
				var tr_id = $(this).closest("tr").attr("id");
				$('#'+tr_id+'').remove();
				
				var total_gram = 0;
				var total_amount = 0;
				$(".stock_item_component_gram").each(function(){
					total_gram += +$(this).val();
				});
				$(".stock_item_component_amount").each(function(){
					total_amount += +$(this).val();
				});
				var price_per_gram = total_amount/total_gram;
				$("#stock_item_component_grams_total").val(total_gram);
				$("#stock_item_component_amount_total").val(total_amount);
				$("#grams").val(total_gram);
				$("#price_per_gram").val(price_per_gram.toFixed(2));
				$("#price_cash").val(total_amount);
			});
		}

		function stock_item_pricing()
		{
			$(document).on('keyup','#grams, #price_per_gram',function(e){
				e.preventDefault();
				if(isNaN($('#grams').val()))
				{
					var grams = 0;
				}
				else
				{
					var grams = $('#grams').val();
				};

				if(isNaN($('#price_per_gram').val()))
				{
					var price_per_gram = 0;
				}
				else
				{
					var price_per_gram = $('#price_per_gram').val();
				};
				$.ajax({
					url:'/layout/items/stock_item_pricing.php',
					method:'POST',
					data:{
						grams:grams,
						price_per_gram:price_per_gram
					},
					success:function(data)
					{
						$('#price_cash').val(data);
					}
				});
			});
		}

		function save_new_stock_item()
		{
			$(document).on('click','#stock_item_save_btn',function(){
				var stock_item_name = $('#stock_item_name').val();
				if (stock_item_name !="") 
				{
					$.ajax({
						url:'/layout/items/stock_item_save.php',
						method:'POST',
						data:$('#stock_item_create_form').serialize(),
						success:function()
						{
				         	$('#stock_item_create_modal').modal('hide');
				         	$('#stock_item_create_form').trigger('reset');
							window.location.href="/layout/items/stock_item_list.php";
				        }
				    });
				} 
				else 
				{
					alert('Please the Stock Item Description cannot be EMPTY!');
				};
		    });
		}

		function edit_stock_item()
		{
			$(document).on('click','#btn_edit_stock_item',function()
			{
				var stock_item_id = $(this).attr('data-id');
				
				$.ajax({
			         url:'/layout/items/stock_item_edit.php',
			         method:'POST',
			         data:{stock_item_id:stock_item_id},
			         datatype: 'JSON',
			         success:function(data)
					 {
			         	var res = $.parseJSON(data);
			         	$('#stock_item_id').val(res[0]);
			         	$('#stock_item_name').val(res[2]);
			         	$('#type').val(res[1]);
			         	$('#price_cash').val(res[3]);
			         	$('#unit_of_measure').val(res[4]);
			         	$('#manufacturer').val(res[5]);
			         	$('#block_neg').val(res[6]);
			         	$('#expiry_date').val(res[7]);
			         	$('#batch').val(res[8]);
			         	$('#days_prompt').val(res[9]);
			         	$('#eoq').val(res[10]);
			         	$('#min_level').val(res[11]);
			         	$('#max_level').val(res[12]);
			         	$('#re_order_level').val(res[13]);
			         	$('#grams').val(res[16]);
			         	$('#price_per_gram').val(res[17]);
			         	$('#stock_item_type_id').val(res[20]);
			         	$('#margin_mtce').val(res[22]);
			         	$('#margin_site').val(res[23]);
						
						$('#stock_item_image').html('');
						if(res[15] == 'pdf')
						{
							$('#stock_item_image').append('<iframe src="'+res[14]+'" width="250" height="200"></iframe>');
						}
						else
						{
							$('#stock_item_image').append('<img src="'+res[14]+'" width="250" height="200">');
						};
						$('#component_list_div').html(res[18]);
						$('#stock_item_component_total_div').html(res[19]);
						$("#stock_item_detail_div").attr('class', 'col-md-9 mb-9');
						$("#stock_item_image_div").attr('hidden', false);
						if(res[21] ==6 || res[21] ==7 ||res[21] ==8)
						{
							$("#component_list_div").attr('hidden', true);
							$("#stock_item_component_total_div").attr('hidden', true);
						};
			         	$('#stock_item_update_btn').show();
						$('#stock_item_save_btn').hide();
						$('#stock_item_create_modal_header').html('Stock Item Edit');
						$('#stock_item_create_modal').modal('show');
			        }
			    });
			});
		}

		function update_stock_item()
		{
			$(document).on('click','#stock_item_update_btn',function(){
				var stock_item_name = $('#stock_item_name').val();
				if (stock_item_name !=="") 
				{
					$.ajax({
				         url:'/layout/items/stock_item_update.php',
				         method:'POST',
				         data:$('#stock_item_create_form').serialize(),
				         success:function(data){
				         	$('#stock_item_create_modal').modal('hide');
				         	$('#stock_item_create_form').trigger('reset');
							window.location.href="/layout/items/stock_item_list.php";
				         }
				     });
				} 
				else 
				{
					alert('Please the Stock Item Description cannot be EMPTY!');
				};
			});
		}

		function stock_item_image_modal()
		{
			$(document).on('click','#stock_item_file_insert_btn',function()
			{
				var stock_item_id = $(this).attr('data-id');
				var currentRow=$(this).closest("tr");
				var name = currentRow.find("td:eq(0)").text();
				$('#stock_item_img_upload_modal_title').html('Upload Image for '+name);
				$('#stock_item_id_img').val(stock_item_id);
				$('#stock_item_img_upload_modal').modal('show');
			});
		}
		
		function stock_item_image_trigger_click()
		{
			$(document).on('click','#stock_item_image_display',function()
			{
				$('#stock_item_img_file').click();
			});
		}
		
		function stock_item_image_display_before_upload()
		{
			$(document).on('change','#stock_item_img_file',function()
			{
				if(this.files[0])
				{
					var reader = new FileReader();
					reader.onload = function(e)
					{
						$('#stock_item_image_display').attr('src', e.target.result);
					}
					reader.readAsDataURL(this.files[0]);
				};
			});
		}
		
		function stock_item_img_display_clear()
		{
			$(document).on('click','#delete_stock_item_image',function()
			{
				var stock_item_id = $(this).attr('data-id');
				var stock_item_img_id = $(this).attr('data-id1');
				$('#item_delete_question').text('Are you sure you want to delete this Stock Item Image?');
				$('#item_delete_modal').modal('show');
				$(document).on('click','#item_delete_yes',function()
				{
					$('#item_delete_modal').modal('hide');
					$.ajax({  
						url:'/layout/items/stock_item_img_display_clear.php',
						method:'POST',
						datatype: 'JSON',
						data:{
							stock_item_img_id:stock_item_img_id,
							stock_item_id:stock_item_id
						},
						success:function(data)
						{
							var res = $.parseJSON(data);
							$('#stock_item_images_list').html('');
							for(var i = 0; i < res.length; i += 4) 
							{
								if(res[i+3] == 'pdf')
								{
									$('#stock_item_images_list').append('<iframe src="'+res[i]+'" width="300" height="200"></iframe><a href="#" id="delete_stock_item_image" data-id="'+res[i+2]+'" data-id1="'+res[i+1]+'">Clear</a>');
								}
								else
								{
									$('#stock_item_images_list').append('<img src="'+res[i]+'" width="300" height="200"><a href="#" id="delete_stock_item_image" data-id="'+res[i+2]+'" data-id1="'+res[i+1]+'">Clear</a>');
								};
							};

						}
					});
			    });
				$(document).on('click','#item_delete_no',function()
				{
					$('#item_delete_modal').modal('hide');
				});
				
			}); 
		}
		
		function delete_stock_item()
		{
			$(document).on('click','#btn_delete_stock_item',function(){
				var stock_item_id = $(this).attr('data-id');
				var currentRow=$(this).closest("tr");
				var item = currentRow.find("td:eq(0)").text();
				$('#item_delete_modal_title').text('Stock Item Deletion!');
				$('#item_delete_question').text('Are you sure you want to delete Stok Item: ' + item + '?');
				$('#item_delete_modal').modal('show');
				$(document).on('click','#item_delete_yes',function(){
					$.ajax({  
		                 url:'/layout/items/stock_item_delete.php',  
		                 type:'POST',  
		                 data:{stock_item_id:stock_item_id},
		                 success:function(data)
						 {
							if(data == 'deleted')
							{
								$('#item_delete_question').text(item +' deleted successfully!');
								$('#item_delete_no').hide();
								$('#item_delete_yes').text('OK');
								$(document).on('click','#item_delete_yes',function()
								{
									$('#item_delete_modal').modal('hide');
									window.location.href="/layout/items/stock_item_list.php";
								})
							}
							else if(data == 'used')
							{
								$('#item_delete_question').text(item +' has been used for transactions, deletion is declined!');
								$('#item_delete_no').hide();
								$('#item_delete_yes').text('OK');
								$(document).on('click','#item_delete_yes',function()
								{
									$('#item_delete_modal').modal('hide');
									window.location.href="/layout/items/stock_item_list.php";
								});
							};
		                 }
		            });
			      });
				$(document).on('click','#item_delete_no',function(){
					$('#item_delete_modal').modal('hide');
				});
			});
		}
		
		function stock_item_auto_update_price_modal()
		{
			$(document).on('click','#auto_update_price_icon',function()
			{
				$('#stock_item_auto_price_modal_form').trigger('reset');
				$('#product_type_div').show();
				$('#component_div').hide();
				$('#stock_item_auto_price_modal').modal('show');
			});
		}

		function stock_item_auto_update_price_modal_component()
		{
			$(document).on('click','#auto_update_price_component_icon',function()
			{
				$('#stock_item_auto_price_modal_form').trigger('reset');
				$('#product_type_div').hide();
				$('#component_div').show();
				$('#stock_item_auto_price_modal').modal('show');
			});
		}
		
		function stock_item_auto_update_price_save()
		{
			$(document).on('click','#stock_item_auto_price_modal_ok_btn',function(){
				var component_id = $('#stock_item_auto_price_modal_component_id').val();
				var type = $('#stock_item_auto_price_modal_type').val();
				var category = $('#stock_item_auto_price_modal_category').val();
				var amount = $('#stock_item_auto_price_modal_amount').val();
				if(category != '' || (component_id !='' && component_id > 0))
				{
					if(type != '')
					{
						if(amount != '' && amount != 0)
						{
							$('#stock_item_auto_price_modal').modal('hide');
							$('#item_delete_modal_title').text('Stock Item Price Update!');
							$('#item_delete_question').text('Are you sure you want to Update ' + category + ' Stock Items ' + type +' by '+ amount + '?');
							$('#item_delete_modal').modal('show');
							$(document).on('click','#item_delete_yes',function()
							{
								$.ajax({
									url:'/layout/items/stock_item_auto_price_update.php',  
									type:'POST',  
									data:{
										type:type,
										amount:amount,
										component_id:component_id,
										category:category
									},
									success:function(data)
									{
										$('#item_delete_question').text(data +' Stock Items updated successfully!');
										$('#item_delete_no').hide();
										$('#item_delete_yes').text('OK');
										$('#item_delete_yes').prop('id','item_delete_ok');
										$(document).on('click','#item_delete_ok',function()
										{
											$('#item_delete_modal').modal('hide');
											window.location.href="/layout/items/stock_item_list.php";
										})
									}
								});
							});
							$(document).on('click','#item_delete_no',function(){
								$('#item_delete_modal').modal('hide');
							});
						}
						else
						{
							$('#stock_item_auto_price_modal_warning').html('<h6 style=color:red;>Please the Amount cannot be EMPTY or zero!</h6>');
							$('#stock_item_auto_price_modal_warning').hide().slideDown().delay(2000).fadeOut();
						};
					}
					else
					{
						$('#stock_item_auto_price_modal_warning').html('<h6 style=color:red;>Please the Type of Price Update cannot be EMPTY!</h6>');
						$('#stock_item_auto_price_modal_warning').hide().slideDown().delay(2000).fadeOut();
					};
				}
				else
				{
					$('#stock_item_auto_price_modal_warning').html('<h6 style=color:red;>Please the Type of Product OR the Component cannot be EMPTY!</h6>');
					$('#stock_item_auto_price_modal_warning').hide().slideDown().delay(2000).fadeOut();
				};
			});
		}

		function search_stock_item_by_name()
		{
			$(document).on('keyup','#stock_item_search',function()
			{
				var stock_item_search = $(this).val();

				$.ajax({
		             url:'/layout/items/stock_item_search_by_name.php',
		             method:'POST',
		             data:{stock_item_search:stock_item_search},
		             success:function(data)
		             {
		             	$('#stock_item_list_table').html(data);
		             }
		        });
			});
		}
	


	//PRICE LEVEL
	function price_level_new_modal()
	{
		$(document).on('click','#new_price_level_icon',function()
		{
			$('#price_level_create_modal_header').html('Price Level Setup');
			$('#price_level_create_form').trigger('reset');
			$('#price_level_update_btn').hide();
			$('#price_level_save_btn').show();
			$('#price_level_create_modal').modal('show');
		});
	}

	function cancel_price_level_modal()
	{
		$(document).on('click','#price_level_cancel_btn',function()
		{
			var page = window.location.pathname;
			$('#price_level_create_form').trigger('reset');
			$('#price_level_create_modal').modal('hide');
			window.location.href= page;
		});
	}

	function price_level_add_stock_item_row()
	{
		$(document).on('change','.price_level_stock_item_id',function()
		{ 
			var i = $(this).attr('data-id');
			i++;
			$.ajax({
				url:'/layout/items/price_level_stock_add.php',
				method:'POST',
				data:{i:i},
				success:function(data)
				{
					$('#price_list_table').append(data);
				}
			});
		});
	}

	function price_level_delete_stock_item_row()
	{
		$(document).on('click', '.delete_price_list_stock_item', function()
		{  
			   var i = $(this).attr("data-id");
			   $('#'+i).remove();
		   });
	}

	function price_level_save()
	{
		$(document).on('click','#price_level_save_btn',function(e)
		{
			e.preventDefault();
			var price_level = $('#price_level').val();
			if (price_level !== "")
			{
				$.ajax({
					url:'/layout/items/price_level_save.php',
					method:'POST',
					data:$('#price_level_create_form').serialize(),
					success:function(data)
					{
						$('#price_level_create_form').trigger('reset');
						$('#price_level_create_modal').modal('hide');
						window.location.href="/layout/items/price_level_list.php";
					}
				});
			} 
			else 
			{
				$('#price_level_create_form_msg').html('<h6 style=color:red;>Please the Stock Item Type cannot be EMPTY!</h6>');
				$('#price_level_create_form_msg').hide().slideDown().delay(2000).fadeOut();
			};
		});
	}

	function price_level_edit()
	{
		$(document).on('click','#btn_edit_price_level',function()
		{
			var price_level_id = $(this).attr('data-id');
			$.ajax({  
				url:'/layout/items/price_level_edit.php',  
				method:'POST',  
				data:{
				price_level_id:price_level_id
				},
				datatype: 'JSON',
				success:function(data)
				{
					var res = $.parseJSON(data);
					$('#price_level_id').val(res[0]);
					$('#price_level_description').val(res[1]);
					$('#price_level_date').val(res[2]);
					$('#price_level_branch_id').val(res[3]);
					$('#price_list_div').html(res[4]);
					$('#price_level_create_modal_header').html('Price Level Edit');
					$('#price_level_update_btn').show();
					$('#price_level_save_btn').hide();
					$('#price_level_create_modal').modal('show');
				}
			});
		});
	}

	function price_level_update()
	{
		$(document).on('click','#price_level_update_btn',function(e){
			e.preventDefault();
			var price_level = $('#price_level').val();
			if (price_level !== "")
			{
				$.ajax({
					url:'/layout/items/price_level_update.php',
					method:'POST',
					data:$('#price_level_create_form').serialize(),
					success:function(data)
					{
						$('#price_level_create_form').trigger('reset');
						$('#price_level_create_modal').modal('hide');
						window.location.href="/layout/items/price_level_list.php";
					}
				});
			} 
			else 
			{
				$('#price_level_create_form_msg').html('<h6 style=color:red;>Please the Stock Item Name cannot be EMPTY!</h6>');
				$('#price_level_create_form_msg').hide().slideDown().delay(2000).fadeOut();
			};
		});
	}
	
	function price_level_delete()
	{
		$(document).on('click','#btn_delete_price_level',function(){
			var price_level_id = $(this).attr('data-id');
			var currentRow=$(this).closest("tr");
			var item = currentRow.find("td:eq(2)").text();
			$('#item_delete_modal_title').text('Price Level Deletion!');
			$('#item_delete_question').text('Are you sure you want to delete : ' + item + '?');
			$('#item_delete_modal').modal('show');
			$(document).on('click','#item_delete_yes',function()
			{
				$.ajax({  
					url:'/layout/items/price_level_delete.php',  
					type:'POST',  
					data:{price_level_id:price_level_id},
					success:function(data)
					{
						if(data == 'deleted')
						{
							$('#item_delete_question').text(item +' deleted successfully!');
							$('#item_delete_no').hide();
							$('#item_delete_yes').text('OK');
							$(document).on('click','#item_delete_yes',function()
							{
								$('#item_delete_modal').modal('hide');
								window.location.href="/layout/items/price_level_list.php";
							})
						}
						else if(data == 'used')
						{
							$('#item_delete_question').text(item +' has been used for some Stock Items, deletion is declined!');
							$('#item_delete_no').hide();
							$('#item_delete_yes').text('OK');
							$(document).on('click','#item_delete_yes',function()
							{
								$('#item_delete_modal').modal('hide');
								window.location.href="/layout/items/price_level_list.php";
							});
						};
					}
				});
			});
			$(document).on('click','#item_delete_no',function(){
				$('#item_delete_modal').modal('hide');
			});
		});
	}

	function search_price_level_by_name()
	{
		/*$(document).on('keyup','#stock_item_search',function(e){
			e.preventDefault();
			var stock_item_search = $(this).val();

			$.ajax({
				url:'/layout/items/stock_item_search_by_name.php',
				method:'POST',
				data:{stock_item_search:stock_item_search},
				success:function(data)
				{
					$('#stock_item_list_table').html(data);
				}
			});
		});*/
	}
		
	//COMPONENT
		function component_new_modal()
		{
			$(document).on('click','#new_component_icon',function()
			{
				$('#component_create_modal_header').html('Component Setup');
				$('#component_create_form').trigger('reset');
				$('#component_update_btn').hide();
				$('#component_save_btn').show();
				$('#component_create_modal').modal('show');
			});
		}

		function component_save()
		{
			$(document).on('click','#component_save_btn',function(e)
			{
				e.preventDefault();
				var component = $('#component').val();
				var price_per_gram = $('#price_per_gram').val();
				if (component !== "")
				{
					if (price_per_gram !== "")
					{
						$.ajax({
							url:'/layout/items/component_save.php',
							method:'POST',
							data:$('#component_create_form').serialize(),
							success:function(data)
							{
								$('#component_create_form').trigger('reset');
								$('#component_create_modal').modal('hide');
								window.location.href="/layout/items/component_list.php";
							}
						});	
					} 
					else 
					{
						$('#component_create_form_msg').html('<h6 style=color:red;>Please the Price Per Gram cannot be EMPTY!</h6>');
						$('#component_create_form_msg').hide().slideDown().delay(2000).fadeOut();
					};
				} 
				else 
				{
					$('#component_create_form_msg').html('<h6 style=color:red;>Please the Component cannot be EMPTY!</h6>');
					$('#component_create_form_msg').hide().slideDown().delay(2000).fadeOut();
				};
			});
		}

		function component_edit()
		{
			$(document).on('click','#btn_edit_component',function()
			{
				var component_id = $(this).attr('data-id');
				$.ajax({  
					url:'/layout/items/component_edit.php',  
					method:'POST',  
					data:{
						component_id:component_id
					},
					datatype: 'JSON',
					success:function(data)
					{
						var res = $.parseJSON(data);
						$('#component_id').val(res[0]);
						$('#component').val(res[1]);
						$('#price_per_gram').val(res[2]);
						$('#component_create_modal_header').html('Component Edit');
						$('#component_update_btn').show();
						$('#component_save_btn').hide();
						$('#component_create_modal').modal('show');
					}
				});
			});
		}

		function component_update()
		{
			$(document).on('click','#component_update_btn',function(e)
			{
				var component = $('#component').val();
				var price_per_gram = $('#price_per_gram').val();
				e.preventDefault();
				if (component !== "")
				{
					if (price_per_gram !== "")
					{
						$.ajax({
							url:'/layout/items/component_update.php',
							method:'POST',
							data:$('#component_create_form').serialize(),
							success:function(data)
							{
								$('#component_create_form').trigger('reset');
								$('#component_create_modal').modal('hide');
								window.location.href="/layout/items/component_list.php";
							}
						});	
					} 
					else 
					{
						$('#component_create_form_msg').html('<h6 style=color:red;>Please the Price Per Gram cannot be EMPTY!</h6>');
						$('#component_create_form_msg').hide().slideDown().delay(2000).fadeOut();
					};
				} 
				else 
				{
					$('#component_create_form_msg').html('<h6 style=color:red;>Please the Component cannot be EMPTY!</h6>');
					$('#component_create_form_msg').hide().slideDown().delay(2000).fadeOut();
				};
			});
		}
	
		function component_delete()
		{
			$(document).on('click','#btn_delete_component',function(){
				var component_id = $(this).attr('data-id');
				var currentRow=$(this).closest("tr");
				var item = currentRow.find("td:eq(0)").text();
				$('#item_delete_modal_title').text('Stock Item Deletion!');
				$('#item_delete_question').text('Are you sure you want to delete Stok Item: ' + item + '?');
				$('#item_delete_modal').modal('show');
				$(document).on('click','#item_delete_yes',function(){
					$.ajax({  
							url:'/layout/items/component_delete.php',  
							type:'POST',  
							data:{component_id:component_id},
							success:function(data)
							{
							if(data == 'deleted')
							{
								$('#item_delete_question').text(item +' deleted successfully!');
								$('#item_delete_no').hide();
								$('#item_delete_yes').text('OK');
								$(document).on('click','#item_delete_yes',function()
								{
									$('#item_delete_modal').modal('hide');
									window.location.href="/layout/items/component_list.php";
								})
							}
							else if(data == 'used')
							{
								$('#item_delete_question').text(item +' has been used for transactions, deletion is declined!');
								$('#item_delete_no').hide();
								$('#item_delete_yes').text('OK');
								$(document).on('click','#item_delete_yes',function()
								{
									$('#item_delete_modal').modal('hide');
									window.location.href="/layout/items/component_list.php";
								});
							};
							}
					});
					});
				$(document).on('click','#item_delete_no',function(){
					$('#item_delete_modal').modal('hide');
				});
			});
		}

	//WAREHOUSE
		function new_warehouse_modal()
		{
			$(document).on('click','#new_warehouse_icon',function()
			{
				$('#warehouse_update_btn').hide();
				$('#warehouse_save_btn').show();
				$('#warehouse_cancel_btn').show();
				$('#warehouse_create_form').trigger('reset');
				$('#warehouse_create_modal').modal('show');
			});
		}

		function save_new_warehouse()
		{
			$(document).on('click','#warehouse_save_btn',function(){
				var warehouse_name = $('#warehouse_name').val();
				if (warehouse_name !=="") 
				{
					$.ajax({
				         url:'/layout/items/warehouse_save.php',
				         method:'POST',
				         data:$('#warehouse_create_form').serialize(),
				         success:function(data){
				         	$('#warehouse_create_modal').modal('hide');
				         	$('#warehouse_create_form').trigger('reset');
				         	$('#warehouse_list_table').html(data);
				         }
				     });
				} 
				else 
				{
					alert('Please the Warehouse Description cannot be EMPTY!');
				};
		    });
		}

		function edit_warehouse()
		{
			$(document).on('click','#btn_edit_warehouse',function()
			{
				var warehouse_id = $(this).attr('data-id');
				$.ajax({
			         url:'/layout/items/warehouse_edit.php',
			         method:'POST',
			         data:{warehouse_id:warehouse_id},
			         datatype: 'JSON',
			         success:function(data){
			         	var res = $.parseJSON(data);
			         	$('#warehouse_id').val(res[0]);
			         	$('#warehouse_name').val(res[1]);
			         	$('#warehouse_location').val(res[2]);
			         	$('#warehouse_update_btn').show();
						$('#warehouse_save_btn').hide();
						$('#warehouse_create_modal_header').html('Warehouse Edit');
						$('#warehouse_create_modal').modal('show');
			         }
			     });
			});
		}

		function update_warehouse()
		{
			$(document).on('click','#warehouse_update_btn',function(){
				var warehouse_name = $('#warehouse_name').val();
				if (warehouse_name !=="") 
				{
					$.ajax({
				         url:'/layout/items/warehouse_update.php',
				         method:'POST',
				         data:$('#warehouse_create_form').serialize(),
				         success:function(data){
				         	$('#warehouse_create_modal').modal('hide');
				         	$('#warehouse_create_form').trigger('reset');
				         	$('#warehouse_list_table').html(data);
				         }
				     });
				} 
				else 
				{
					alert('Please the Warehouse Description cannot be EMPTY!');
				};
			});
		}

	//SITES
		function new_site_modal()
		{
			$(document).on('click','#new_site_icon',function()
			{
				$('#site_update_btn').hide();
				$('#site_save_btn').show();
				$('#site_cancel_btn').show();
				$('#site_create_form').trigger('reset');
				$('#site_create_modal').modal('show');
			});
		}

		function save_site()
		{
			$(document).on('click','#site_save_btn',function(){
				var site_name = $('#site_name').val();
				if (site_name !=="") 
				{
					$.ajax({
				         url:'/layout/items/site_save.php',
				         method:'POST',
				         data:$('#site_create_form').serialize(),
				         success:function(data){
				         	$('#site_create_modal').modal('hide');
				         	$('#site_create_form').trigger('reset');
				         	$('#site_list_table').html(data);
				         }
				     });
				} 
				else 
				{
					alert('Please the Site Description cannot be EMPTY!');
				};
		    });
		}

		function edit_site()
		{
			$(document).on('click','#btn_edit_site',function()
			{
				var site_id = $(this).attr('data-id');
				$.ajax({
			         url:'/layout/items/site_edit.php',
			         method:'POST',
			         data:{site_id:site_id},
			         datatype: 'JSON',
			         success:function(data){
			         	var res = $.parseJSON(data);
			         	$('#site_id').val(res[0]);
			         	$('#site_name').val(res[1]);
			         	$('#site_location').val(res[2]);
			         	$('#site_update_btn').show();
						$('#site_save_btn').hide();
						$('#site_create_modal_header').html('Site Edit');
						$('#site_create_modal').modal('show');
			         }
			     });
			});
		}

		function update_site()
		{
			$(document).on('click','#site_update_btn',function(){
				var site_name = $('#site_name').val();
				if (site_name !=="") 
				{
					$.ajax({
				         url:'/layout/items/site_update.php',
				         method:'POST',
				         data:$('#site_create_form').serialize(),
				         success:function(data){
				         	$('#site_create_modal').modal('hide');
				         	$('#site_create_form').trigger('reset');
				         	$('#site_list_table').html(data);
				         }
				     });
				} 
				else 
				{
					alert('Please the Site Description cannot be EMPTY!');
				};
			});
		}

	//ASSETS
		function new_asset_modal()
		{
			$(document).on('click','#new_asset_icon',function()
			{
				$('#asset_update_btn').hide();
				$('#asset_save_btn').show();
				$('#asset_cancel_btn').show();
				$('#asset_create_form').trigger('reset');
				$('#asset_create_modal').modal('show');
			});
		}

		function save_asset()
		{
			$(document).on('click','#asset_save_btn',function(){
				var asset_ledger_id = $('#asset_ledger_id').val();
				var asset_brand = $('#asset_brand').val();
				var asset_model = $('#asset_model').val();
				var asset_serial_no = $('#asset_serial_no').val();
				var asset_manu_date = $('#asset_manu_date').val();
				if (asset_ledger_id !=="") 
				{
					if (asset_brand !=="") 
					{
						if (asset_model !=="") 
						{
							if (asset_serial_no !=="") 
							{
								$.ajax({
							         url:'/layout/items/asset_save.php',
							         method:'POST',
							         data:$('#asset_create_form').serialize(),
							         success:function(data){
							         	$('#asset_create_modal').modal('hide');
							         	$('#asset_create_form').trigger('reset');
							         	$('#asset_list_table').html(data);
							         }
							     });
							} 
							else 
							{
								alert('Please the Serial No cannot be EMPTY!');
							};
						} 
						else 
						{
							alert('Please the Model cannot be EMPTY!');
						};
					} 
					else 
					{
						alert('Please the Brand cannot be EMPTY!');
					};
				} 
				else 
				{
					alert('Please the Ledger cannot be EMPTY!');
				};
		    });
		}

		function edit_asset()
		{
			$(document).on('click','#btn_edit_asset',function()
			{
				var asset_id = $(this).attr('data-id');
				$.ajax({
			         url:'/layout/items/asset_edit.php',
			         method:'POST',
			         data:{asset_id:asset_id},
			         datatype: 'JSON',
			         success:function(data){
			         	var res = $.parseJSON(data);
			         	$('#asset_id').val(res[0]);
			         	$('#asset_ledger_id').val(res[1]);
			         	$('#asset_brand').val(res[2]);
			         	$('#asset_model').val(res[3]);
			         	$('#asset_serial_no').val(res[4]);
			         	$('#asset_manu_date').val(res[5]);
			         	$('#asset_rate_per_hour').val(res[6]);
			         	$('#asset_update_btn').show();
						$('#asset_save_btn').hide();
						$('#asset_create_modal_header').html('Asset Edit');
						$('#asset_create_modal').modal('show');
			         }
			     });
			});
		}

		function update_asset()
		{
			$(document).on('click','#asset_update_btn',function(){
				
				var asset_ledger_id = $('#asset_ledger_id').val();
				var asset_brand = $('#asset_brand').val();
				var asset_model = $('#asset_model').val();
				var asset_serial_no = $('#asset_serial_no').val();
				var asset_manu_date = $('#asset_manu_date').val();
				if (asset_ledger_id !=="") 
				{
					if (asset_brand !=="") 
					{
						if (asset_model !=="") 
						{
							if (asset_serial_no !=="") 
							{
								$.ajax({
							         url:'/layout/items/asset_update.php',
							         method:'POST',
							         data:$('#asset_create_form').serialize(),
							         success:function(data){
							         	$('#asset_create_modal').modal('hide');
							         	$('#asset_create_form').trigger('reset');
							         	$('#asset_list_table').html(data);
							         }
							     });
							} 
							else 
							{
								alert('Please the Serial No cannot be EMPTY!');
							};
						} 
						else 
						{
							alert('Please the Model cannot be EMPTY!');
						};
					} 
					else 
					{
						alert('Please the Brand cannot be EMPTY!');
					};
				} 
				else 
				{
					alert('Please the Ledger cannot be EMPTY!');
				};
			});
		}


	//DINNING TABLE
		function dining_table_new_modal()
		{
			$(document).on('click','#new_dining_table_icon',function()
			{
				$('#dining_table_create_modal_header').html('Dining Table Setup');
				$('#dining_table_create_form').trigger('reset');
				$('#dining_table_update_btn').hide();
				$('#dining_table_save_btn').show();
				$('#dining_table_create_modal').modal('show');
			});
		}

		function dining_table_save()
		{
			$(document).on('click','#dining_table_save_btn',function(e)
			{
				e.preventDefault();
				var dining_table = $('#dining_table').val();
				if (dining_table !== "")
				{
					$.ajax({
						url:'/layout/items/dining_table_save.php',
						method:'POST',
						data:$('#dining_table_create_form').serialize(),
						success:function(data)
						{
							$('#dining_table_create_form').trigger('reset');
							$('#dining_table_create_modal').modal('hide');
							window.location.href="/layout/items/dining_table_list.php";
						}
					});
				} 
				else 
				{
					$('#dining_table_create_form_msg').html('<h6 style=color:red;>Please the Stock Item Type cannot be EMPTY!</h6>');
					$('#dining_table_create_form_msg').hide().slideDown().delay(2000).fadeOut();
				};
			});
		}

		function dining_table_edit()
		{
			$(document).on('click','#btn_edit_dining_table',function()
			{
				var dining_table_id = $(this).attr('data-id');
				$.ajax({  
					url:'/layout/items/dining_table_edit.php',  
					method:'POST',  
					data:{
					dining_table_id:dining_table_id
					},
					datatype: 'JSON',
					success:function(data)
					{
						var res = $.parseJSON(data);
						$('#dining_table_id').val(res[0]);
						$('#dining_table').val(res[1]);
						$('#dining_table_type').val(res[2]);
						$('#dining_table_create_modal_header').html('Stock Item Type Edit');
						$('#dining_table_update_btn').show();
						$('#dining_table_save_btn').hide();
						$('#dining_table_create_modal').modal('show');
					}
				});
			});
		}

		function dining_table_update()
		{
			$(document).on('click','#dining_table_update_btn',function(e){
				e.preventDefault();
				var dining_table = $('#dining_table').val();
				if (dining_table !== "")
				{
					$.ajax({
						url:'/layout/items/dining_table_update.php',
						method:'POST',
						data:$('#dining_table_create_form').serialize(),
						success:function(data)
						{
							$('#dining_table_create_form').trigger('reset');
							$('#dining_table_create_modal').modal('hide');
							window.location.href="/layout/items/dining_table_list.php";
						}
					});
				} 
				else 
				{
					$('#dining_table_create_form_msg').html('<h6 style=color:red;>Please the Stock Item Name cannot be EMPTY!</h6>');
					$('#dining_table_create_form_msg').hide().slideDown().delay(2000).fadeOut();
				};
			});
		}
		
		function dining_table_delete()
		{
			$(document).on('click','#btn_delete_dining_table',function(){
				var dining_table_id = $(this).attr('data-id');
				var currentRow=$(this).closest("tr");
				var item = currentRow.find("td:eq(0)").text();
				$('#item_delete_modal_title').text('Stock Item Type Deletion!');
				$('#item_delete_question').text('Are you sure you want to delete : ' + item + '?');
				$('#item_delete_modal').modal('show');
				$(document).on('click','#item_delete_yes',function()
				{
					$.ajax({  
						url:'/layout/items/dining_table_delete.php',  
						type:'POST',  
						data:{dining_table_id:dining_table_id},
						success:function(data)
						{
							if(data == 'deleted')
							{
								$('#item_delete_question').text(item +' deleted successfully!');
								$('#item_delete_no').hide();
								$('#item_delete_yes').text('OK');
								$(document).on('click','#item_delete_yes',function()
								{
									$('#item_delete_modal').modal('hide');
									window.location.href="/layout/items/dining_table_list.php";
								})
							}
							else if(data == 'used')
							{
								$('#item_delete_question').text(item +' has been used for some Stock Items, deletion is declined!');
								$('#item_delete_no').hide();
								$('#item_delete_yes').text('OK');
								$(document).on('click','#item_delete_yes',function()
								{
									$('#item_delete_modal').modal('hide');
									window.location.href="/layout/items/dining_table_list.php";
								});
							};
						}
					});
				});
				$(document).on('click','#item_delete_no',function(){
					$('#item_delete_modal').modal('hide');
				});
			});
		}

		function search_dining_table_by_name()
		{
			$(document).on('keyup','#dining_table_search',function(e){
				e.preventDefault();
				var dining_table_search = $(this).val();

				$.ajax({
					url:'/layout/items/dining_table_search_by_name.php',
					method:'POST',
					data:{dining_table_search:dining_table_search},
					success:function(data)
					{
						$('#dining_table_list_table').html(data);
					}
				});
			});
		}

		function dining_table_new_order()
		{
			$(document).on('click','.table_add_order_btn, .table_new_order_btn',function()
			{
				var dining_table_id = $(this).attr('data-table');
				$('#order_dining_table_id').val(dining_table_id);
				$('#order_dining_table_idD').val(dining_table_id);
				$('#order_table_list_div').prop('hidden',true);
				$('#order_dining_table_id').prop('hidden',true);
				$('#order_dining_table_idD').prop('hidden', false);
				$('#table_order_item_list_div').prop('class','col-md-7 mb-7 form-group');
				$('#order_customer_id').val(40);
				$('#order_update_btn').hide();
				$('#order_save_pay_btn').hide();
				$('#order_save_btn').show();
				$('#order_create_modal').modal('show');
			});
		}
//FINANCIALS
	//ADMISSION
		function new_admission_voucher_modal()
		{
			$(document).on('click','#new_admission_icon',function()
			{
				$('#admission_update_btn').hide();
				$('#admission_save_bill_btn').hide();
				$('#admission_save_btn').show();
				$('#admission_create_form').trigger('reset');
				$('.adm').prop('hidden', false);
				$('#admission_create_modal').modal('show');
			});
		}

		function admission_additional_bill_modal()
		{
			$(document).on('click','#btn_add_bill',function()
			{
				var admission_id = $(this).attr('data-id');
				$('#admission_update_btn').hide();
				$('#admission_save_bill_btn').show();
				$('#admission_save_btn').hide();
				$('#admission_create_form').trigger('reset');
				$('#admission_id').val(admission_id);
				$('#admission_create_modal_header').text('Additional Bills');
				$('#admission_date').prop('hidden', true);
				$('#admission_dateD').prop('hidden', false);
				$('#admission_create_modal').modal('show');
			});
		}

		function admission_refrigerator_cubicle()
		{
			$(document).on('change','#admission_refrigerator_initial',function()
			{ 
				var refrigerator_id = $('#admission_refrigerator_initial').val();
				
				if(refrigerator_id > 0)
				{
					$.ajax({
						url:'/layout/vouchers/admission_refrigerator_cubicle.php',
						method:'POST',
						data:{refrigerator_id:refrigerator_id},
						success:function(data)
						{
							$('#admission_refrigerator_cubible_initial_div').prop('hidden', false);
							$('#admission_refrigerator_initial_div').prop('class','col-md-2 mb-2');
							$('#admission_refrigerator_cubible_initial_div').html(data);
						}
					});
				}
				else
				{
					$('#admission_refrigerator_cubible_initial_div').prop('hidden', true);
					$('#admission_refrigerator_initial_div').prop('class','col-md-4 mb-4');
				};
			});
		}

		function admission_refrigerator_list_cubicle()
		{
			$(document).on('change','.admission_refrigerator_id',function()
			{ 
				var i = $(this).attr('data-id');
				var refrigerator_id = $('#admission_refrigerator_id'+i).val();
				if(refrigerator_id > 0)
				{
					$.ajax({
						url:'/layout/vouchers/admission_refrigerator_list_cubicle.php',
						method:'POST',
						data:{refrigerator_id:refrigerator_id,i:i},
						success:function(data)
						{
							$('#admission_refrigerator_cubicle_div'+i).html(data);
						}
					});
				};
			});
		}

		function admission_refrigerator_cubicle_transfer()
		{
			$(document).on('change','#admission_transfer_new_refrigerator_id',function()
			{ 
				var refrigerator_id = $('#admission_transfer_new_refrigerator_id').val();
				
				if(refrigerator_id > 0)
				{
					$.ajax({
						url:'/layout/vouchers/admission_refrigerator_cubicle_transfer.php',
						method:'POST',
						data:{refrigerator_id:refrigerator_id},
						success:function(data)
						{
							$('#admission_transfer_new_refrigerator_cubible_div').prop('hidden', false);
							$('#admission_transfer_new_refrigerator_div').prop('class','col-md-5 mb-5');
							$('#admission_transfer_new_refrigerator_cubible_div').html(data);
						}
					});
				}
				else
				{
					$('#admission_transfer_new_refrigerator_cubible_div').prop('hidden', true);
					$('#admission_transfer_new_refrigerator_div').prop('class','col-md-10 mb-10');
				};
			});
		}

		function admission_refrigerator_transfer()
		{
			$(document).on('click','#btn_transfer_admission',function()
			{ 
				var admission_id = $(this).attr('data-id');
					$.ajax({
						url:'/layout/vouchers/admission_refrigerator_transfer.php',
						method:'POST',
						data:{admission_id:admission_id},
						success:function(data)
						{
							var res = $.parseJSON(data);
							$('#admission_transfer_create_form').trigger('reset');
							$('#admission_transfer_list_id').val(res[0]);
							$('#admission_transfer_current_refrigerator_id').val(res[1]);
							$('#admission_transfer_current_refrigerator_idD').val(res[1]);
							$('#admission_transfer_current_cubible_id').val(res[2]);
							$('#admission_transfer_current_cubible_idD').val(res[2]);
							$('#admission_transfer_current_admission_date').val(res[3]);
							$('#admission_transfer_current_admission_dateD').val(res[3]);
							$('#admission_transfer_admission_id').val(res[4]);
							$('#admission_transfer_update_btn').hide();
							$('#admission_transfer_save_btn').show();
							$('#admission_transfer_create_modal').modal('show');
						}
					});
			});
		}

		function admission_refrigerator_transfer_save()
		{
			$(document).on('click','#admission_transfer_save_btn',function()
			{ 
				var page = window.location.pathname;
				$.ajax({
					url:'/layout/vouchers/admission_refrigerator_transfer_save.php',
					method:'POST',
					data:$('#admission_transfer_create_form').serialize(),
					success:function(data)
					{
						window.location.href= page;
					}
				});
			});
		}

		function add_admission_stock_item_row()
		{
			$(document).on('change','.admission_stock_item_id',function()
			{ 
				var i = $(this).attr('data-id');
				i++;
				$.ajax({
					url:'/layout/vouchers/admission_stock_add.php',
					method:'POST',
					data:{i:i},
					success:function(data)
					{
						$('#admission_stock_list_table').append(data);
					}
				});
			});
		}

		function add_admission_servivce_item_row()
		{
			$(document).on('change','.admission_ledger_id',function()
			{ 
				var i = $(this).attr('data-id');
				var id = $(this).attr('data-id');
				var qty = $('#admission_service_qty'+id).val();
				i++;
				$.ajax({
					url:'/layout/vouchers/admission_service_add.php',
					method:'POST',
					data:{i:i},
					success:function(data)
					{
						$('#admission_service_list_table').append(data);
						if(qty < 1)
						{
							var qty_issued = 1;
						}
						else
						{
							var qty_issued = qty;
						};
						$('#admission_service_qty'+id).val(qty_issued);
					}
				});
			});
		}

		function admission_stock_item_price()
		{
			$(document).on('change','.admission_stock_item_id',function()
			{ 
				var stock_item_id = $(this).val();
				var i = $(this).attr('data-id');
				var qty = $('#admission_stock_qty'+i).val();
				$.ajax({
					url:'/layout/vouchers/admission_stock_price.php',
					method:'POST',
					data:{stock_item_id:stock_item_id},
					success:function(data)
					{
						$('#admission_stock_price'+i).val(data);
						if(qty < 1)
						{
							var qty_issued = 1;
						}
						else
						{
							var qty_issued = qty;
						};
							$('#admission_stock_qty'+i).val(qty_issued);
							var amount = qty_issued * data;
							$('#admission_stock_amount'+i).val(amount);
							$('#admission_stock_amountD'+i).val(amount);

							var service_sum = 0;
							$('.admission_service_amount').each(function()
							{
								var service_num = $(this).val().replace(',','');
								if(service_num !=0)
								{
									service_sum += parseFloat(service_num);
								};
							});
							$('#admission_total_service_amount').val(service_sum);
							$('#admission_total_service_amountD').val(service_sum);
							$('#admission_service_total').val(service_sum);
							$('#admission_service_totalD').val(service_sum);
							
							var stock_sum = 0;
							$('.admission_stock_amount').each(function()
							{
								var stock_num = $(this).val().replace(',','');
								if(stock_num !=0)
								{
									stock_sum += parseFloat(stock_num);
								};
							});
							$('#admission_total_stock_amount').val(stock_sum);
							$('#admission_total_stock_amountD').val(stock_sum);
							$('#admission_stock_total').val(stock_sum);
							$('#admission_stock_totalD').val(stock_sum);
			
							var total = service_sum + stock_sum;
							$('#admission_total_amount').val(total);
							$('#admission_total_amountD').val(total);
					}
				});
			});
		}

		function admission_service_amount()
		{
			$(document).on('keyup', '.admission_service_qty, .admission_service_price', function()
			{  
       			var id = $(this).attr("data-id");
				var price = $('#admission_service_price'+id).val();
				var qty = $('#admission_service_qty'+id).val();
				if(isNaN(parseFloat(price)=='true')){var price = 0;}else{var price = parseFloat(price);};
				if(isNaN(parseFloat(qty)=='true')){var qty = 0;}else{var qty = parseFloat(qty);};
				var amount = qty * price;
				
				$('#admission_service_amount'+id).val(amount);
				$('#admission_service_amountD'+id).val(amount);
           		var service_sum = 0;
				$('.admission_service_amount').each(function()
				{
					var service_num = $(this).val().replace(',','');
					if(service_num !=0)
					{
						service_sum += parseFloat(service_num);
					};
				});
				$('#admission_total_service_amount').val(service_sum);
				$('#admission_total_service_amountD').val(service_sum);
				$('#admission_service_total').val(service_sum);
				$('#admission_service_totalD').val(service_sum);
				
           		var stock_sum = 0;
				$('.admission_stock_amount').each(function()
				{
					var stock_num = $(this).val().replace(',','');
					if(stock_num !=0)
					{
						stock_sum += parseFloat(stock_num);
					};
				});
				$('#admission_total_stock_amount').val(stock_sum);
				$('#admission_total_stock_amountD').val(stock_sum);
				$('#admission_stock_total').val(stock_sum);
				$('#admission_stock_totalD').val(stock_sum);

				var total = service_sum + stock_sum;
				$('#admission_total_amount').val(total);
				$('#admission_total_amountD').val(total);
           	});
		}

		function admission_stock_amount()
		{
			$(document).on('keyup', '.admission_stock_qty, .admission_stock_price', function()
			{  
       			var id = $(this).attr("data-id");
				var price = $('#admission_stock_price'+id).val();
				var qty = $('#admission_stock_qty'+id).val();
				if(isNaN(parseFloat(price)=='true')){var price = 0;}else{var price = parseFloat(price);};
				if(isNaN(parseFloat(qty)=='true')){var qty = 0;}else{var qty = parseFloat(qty);};
				var amount = qty * price;
				
				$('#admission_stock_amount'+id).val(amount);
				$('#admission_stock_amountD'+id).val(amount);

           		var service_sum = 0;
				$('.admission_service_amount').each(function()
				{
					var service_num = $(this).val().replace(',','');
					if(service_num !=0)
					{
						service_sum += parseFloat(service_num);
					};
				});
				$('#admission_total_service_amount').val(service_sum);
				$('#admission_total_service_amountD').val(service_sum);
				$('#admission_service_total').val(service_sum);
				$('#admission_service_totalD').val(service_sum);
				
           		var stock_sum = 0;
				$('.admission_stock_amount').each(function()
				{
					var stock_num = $(this).val().replace(',','');
					if(stock_num !=0)
					{
						stock_sum += parseFloat(stock_num);
					};
				});
				$('#admission_total_stock_amount').val(stock_sum);
				$('#admission_total_stock_amountD').val(stock_sum);
				$('#admission_stock_total').val(stock_sum);
				$('#admission_stock_totalD').val(stock_sum);

				var total = service_sum + stock_sum;
				$('#admission_total_amount').val(total);
				$('#admission_total_amountD').val(total);
           	});
		}

		function delete_admission_service_item_row()
		{
			$(document).on('click', '#delete_admission_service', function()
			{  
       			var button_id = $(this).attr("data-id");
           		$('#svr'+button_id).remove();

           		var service_sum = 0;
				$('.admission_service_amount').each(function()
				{
					var service_num = $(this).val().replace(',','');
					if(service_num !=0)
					{
						service_sum += parseFloat(service_num);
					};
				});
				$('#admission_total_service_amount').val(service_sum);
				$('#admission_total_service_amountD').val(service_sum);
				$('#admission_service_total').val(service_sum);
				$('#admission_service_totalD').val(service_sum);
				
           		var stock_sum = 0;
				$('.admission_stock_amount').each(function()
				{
					var stock_num = $(this).val().replace(',','');
					if(stock_num !=0)
					{
						stock_sum += parseFloat(stock_num);
					};
				});
				$('#admission_total_stock_amount').val(stock_sum);
				$('#admission_total_stock_amountD').val(stock_sum);
				$('#admission_stock_total').val(stock_sum);
				$('#admission_stock_totalD').val(stock_sum);

				var total = service_sum + stock_sum;
				$('#admission_total_amount').val(total);
				$('#admission_total_amountD').val(total);
           	});
		}

		function delete_admission_stock_item_row()
		{
			$(document).on('click', '#delete_admission_stock', function(){  
       			var button_id = $(this).attr("data-id");
           		$('#stk'+button_id).remove();
           		
           		var service_sum = 0;
				$('.admission_service_amount').each(function()
				{
					var service_num = $(this).val().replace(',','');
					if(service_num !=0)
					{
						service_sum += parseFloat(service_num);
					};
				});
				$('#admission_total_service_amount').val(service_sum);
				$('#admission_total_service_amountD').val(service_sum);
				$('#admission_service_total').val(service_sum);
				$('#admission_service_totalD').val(service_sum);
				
           		var stock_sum = 0;
				$('.admission_stock_amount').each(function()
				{
					var stock_num = $(this).val().replace(',','');
					if(stock_num !=0)
					{
						stock_sum += parseFloat(stock_num);
					};
				});
				$('#admission_total_stock_amount').val(stock_sum);
				$('#admission_total_stock_amountD').val(stock_sum);
				$('#admission_stock_total').val(stock_sum);
				$('#admission_stock_totalD').val(stock_sum);

				var total = service_sum + stock_sum;
				$('#admission_total_amount').val(total);
				$('#admission_total_amountD').val(total);
           	});
		}

		function add_admission_refrigerator_list_row()
		{
			$(document).on('change','.admission_refrigerator_id',function()
			{ 
				var i = $(this).attr('data-id');
				i++;
				$.ajax({
					url:'/layout/vouchers/admission_refrigerator_add.php',
					method:'POST',
					data:{i:i},
					success:function(data)
					{
						$('#admission_refrigerator_list_table').append(data);
					}
				});
			});
		}

		function delete_admission_refrigerator_list_row()
		{
			$(document).on('click', '.delete_admission_refrigerator_list_row', function()
			{  
       			var button_id = $(this).attr("data-id");
           		$('#ref'+button_id).remove();
           	});
		}

		function cancel_admission_voucher_modal()
		{
			$(document).on('click','#admission_cancel_btn',function()
			{
				var page = window.location.pathname;
				$('#admission_create_form').trigger('reset');
				$('#admission_create_modal').modal('hide');
				window.location.href= page;
				//window.location.href="/layout/vouchers/admission_list.php";
			});
		}

		function save_admission_voucher()
		{
			$(document).on('click','#admission_save_btn',function(e)
			{
				e.preventDefault();
				var admission_deseased = $('#admission_deseased').val();
				var admission_tag = $('#admission_tag').val();
				var admission_refrigerator = $('#admission_refrigerator_initial').val();
				var admission_date = $('#admission_date').val();
				var admission_cause_of_death = $('#admission_cause_of_death').val();
				var admission_certificate = $('#admission_certificate').val();
				var admission_relative = $('#admission_relative').val();
				var admission_attendant = $('#admission_attendant').val();
				var admission_total_amount = $('#admission_total_amount').val();
				var page = window.location.pathname;
				if (admission_deseased != "")
				{
					if (admission_date != "")
					{
						//if (admission_tag != "")
						//{
							if (admission_refrigerator != "") 
							{
								if (admission_cause_of_death != "") 
								{
									if (admission_certificate != "") 
									{
										if (admission_relative != "") 
										{
											if (admission_attendant != "") 
											{
												//if (admission_total_amount != "") 
												//{
													$.ajax({
														url:'/layout/vouchers/admission_save.php',
														method:'POST',
														data:$('#admission_create_form').serialize(),
														success:function(data)
														{
															$('#admission_create_form').trigger('reset');
															window.location.href= page;
															window.open('/layout/vouchers/admission_pdf.php', '_blank');
														}
													});
												/*} 
												else 
												{
													alert('Please select Item or Service!');
												};*/
											} 
											else 
											{
												alert('Please the Attendant Name cannot be EMPTY!');
											};
										} 
										else 
										{
											alert('Please the Relative Name cannot be EMPTY!');
										};
								    } 
									else 
									{
										alert('Please the Death Certificate cannot be EMPTY!');
									};
								} 
								else 
								{
									alert('Please type the Cause of Death!');
								};
							} 
							else 
							{
								alert('Please select the Refrigerator!');
							};
						/*} 
						else 
						{
							alert('Please select the tag number!');
						};*/
					} 
					else 
					{
						alert('Please select the date of admission!');
					};
				} 
				else 
				{
					alert('Please the deseased name cannot be EMPTY!');
				};
			});
		}

		function edit_admission_voucher()
		{
			$(document).on('click','#btn_edit_admission',function()
			{
				var admission_id = $(this).attr('data-id');
				$.ajax({
					url:'/layout/vouchers/admission_edit.php',
					method:'POST',
					data:{admission_id:admission_id},
					datatype:'JSON',
					success:function(data)
					{
						var res = $.parseJSON(data);
						$('#admission_create_modal_header').text('Admission Voucher Edit');
						$('#admission_id').val(res[0]);
						$('#admission_deseased').val(res[1]);
						$('#admission_refrigerator_initial').val(res[2]);
						$('#admission_refrigerator_cubible_initial').val(res[3]);
						$('#admission_tag').val(res[4]);
						$('#admission_date').val(res[5]);
						$('#discharge_date').val(res[6]);
						$('#discharge_dateD').val(res[6]);
						$('#admission_gender').val(res[7]);
						$('#admission_age').val(res[8]);
						$('#admission_cause_of_death').val(res[9]);
						$('#admission_certificate').val(res[10]);
						$('#admission_place_of_death').val(res[11]);
						$('#admission_pathologist').val(res[12]);
						$('#admission_relative').val(res[13]);
						$('#admission_relative_phone').val(res[14]);
						$('#admission_relative_address').val(res[15]);
						$('#admission_attendant').val(res[16]);
						$('#admission_total_stock_amount').val(res[17]);
						$('#admission_total_stock_amountD').val(res[17]);
						$('#admission_stock_total').val(res[17]);
						$('#admission_stock_totalD').val(res[17]);
						$('#admission_total_service_amount').val(res[18]);
						$('#admission_total_service_amountD').val(res[18]);
						$('#admission_service_total').val(res[18]);
						$('#admission_service_totalD').val(res[18]);
						$('#admission_total_amount').val(res[19]);
						$('#admission_total_amountD').val(res[19]);
						$('#admission_service_list').html(res[20]);
						$('#admission_stock_list').html(res[21]);
						$('#admission_refrigerator_initial_div').prop('class','col-md-2 mb-2 form-group');
						$('#admission_refrigerator_cubible_initial_div').prop('hidden',false);
						$('#admission_refrigerator_cubible_initial_div').html(res[22]);
						$('#admission_refrigerator_list').html(res[23]);
						$('#admission_update_btn').show();
						$('#admission_save_btn').hide();
						$('#admission_save_bill_btn').hide();
						$('#admission_create_modal').modal('show');
					}
				});
			});
		}

		function update_admission_voucher()
		{
			$(document).on('click','#admission_update_btn',function(e)
			{
				e.preventDefault();
				var admission_deseased = $('#admission_deseased').val();
				//var admission_tag = $('#admission_tag').val();
				var admission_refrigerator = $('#admission_refrigerator_initial').val();
				var admission_date = $('#admission_date').val();
				var admission_cause_of_death = $('#admission_cause_of_death').val();
				var admission_certificate = $('#admission_certificate').val();
				var admission_relative = $('#admission_relative').val();
				var admission_attendant = $('#admission_attendant').val();
				var admission_total_amount = $('#admission_total_amount').val();
				var page = window.location.pathname;
				if (admission_deseased !="") 
				{
					if (admission_date !="") 
					{
						//if (admission_tag !="") 
						//{
							if (admission_refrigerator !="") 
							{
								if (admission_cause_of_death !="") 
								{
									if (admission_certificate != "") 
									{
										if (admission_relative != "") 
										{
											if (admission_attendant != "") 
											{
												//if (admission_total_amount != "") 
												//{
													$.ajax({
														url:'/layout/vouchers/admission_update.php',
														method:'POST',
														data:$('#admission_create_form').serialize(),
														success:function()
														{
															$('#admission_create_form').trigger('reset');
															window.location.href= page;
															window.open('/layout/vouchers/admission_pdf.php', '_blank');
														}
													});
												/*} 
												else 
												{
													alert('Please select Item or Service!');
												};*/
											} 
											else 
											{
												alert('Please the Attendant Name cannot be EMPTY!');
											};
										} 
										else 
										{
											alert('Please the Relative Name cannot be EMPTY!');
										};
								    } 
									else 
									{
										alert('Please the Death Certificate cannot be EMPTY!');
									};
								} 
								else 
								{
									alert('Please type the Cause of Death!');
								};
							} 
							else 
							{
								alert('Please select the Refrigerator!');
							};
						/*} 
						else 
						{
							alert('Please select the tag number!');
						};*/
					} 
					else 
					{
						alert('Please select the date for the admission voucher!');
					};
				} 
				else 
				{
					alert('Please the deseased name cannot be EMPTY!');
				};
			});
		}

		function save_additional_bills()
		{
			$(document).on('click','#admission_save_bill_btn',function(e)
			{
				e.preventDefault();
				var stock_last_tr_id = $("#admission_stock_list_table tr:last").attr("id");
				var service_last_tr_id = $("#admission_service_list_table tr:last").attr("id");
				var stock_last_tr_select = $("#admission_stock_list_table tr:last option:selected").val();
				var service_last_tr_select = $("#admission_service_list_table tr:last option:selected").val();

				if(stock_last_tr_select =="" || stock_last_tr_select ==0)
				{
					$('#'+stock_last_tr_id+'').remove();
				};
				if(service_last_tr_select =="" || service_last_tr_select ==0)
				{
					$('#'+service_last_tr_id+'').remove();
				};
				var admission_date = $('#admission_date').val();
				var page = window.location.pathname;
				if (admission_date != "")
				{
					$.ajax({
						url:'/layout/vouchers/admission_save_additional_bills.php',
						method:'POST',
						data:$('#admission_create_form').serialize(),
						success:function(data)
						{
							$('#admission_create_form').trigger('reset');
							$('#admission_create_modal').modal('hide');
							window.location.href= page;
							window.open('/layout/vouchers/admission_pdf.php', '_blank');
						}
					});
				} 
				else 
				{
					alert('Please the date cannot be EMPTY!');
				};
			});
		}

		function reprint_admission()
		{
			$(document).on('click','#btn_admission_reprint',function(e){
				var admission_id = $(this).attr('data-id');
				$.ajax({
					url:'/layout/vouchers/admission_reprint.php',
					method:'POST',
					data:{admission_id:admission_id},
					success:function()
					{
						window.open('/layout/vouchers/admission_pdf.php', '_blank');
					}
		        });
			});
		}
		
		function discharge_modal()
		{
			$(document).on('click','#btn_discharge_admission',function()
			{
				var admission_id = $(this).attr('data-id');
				var date_admitted = $(this).attr('data-id1');
				var refrigerator_id = $(this).attr('data-id2');
				$('#admission_discharge_form').trigger('reset');
				$('#admission_id_discharge').val(admission_id);
				$('#admission_date_discharge').val(date_admitted);
				$('#admission_date_dischargeD').val(date_admitted);
				$('#refrigerator_id_discharge').val(refrigerator_id);
				$('#admission_discharge_modal').modal('show');
			});
		}
		
		function save_discharge()
		{
			$(document).on('click','#admission_discharge_btn',function(e)
			{
				e.preventDefault();
				var admission_date = $('#admission_date').val();
				var discharge_date = $('#discharge_date').val();
				var page = window.location.pathname;
				if (admission_date != "") 
				{
					if (discharge_date != "") 
					{
						if (discharge_date >= admission_date) 
						{
							$.ajax({
								url:'/layout/vouchers/admission_discharge_save.php',
								method:'POST',
								data:$('#admission_discharge_form').serialize(),
								success:function(data)
								{
									if(data == 'admission')
									{
										$('#admission_discharge_form').trigger('reset');
										window.location.href= page;
										window.open('/layout/vouchers/admission_pdf.php', '_blank');
									}
									else if(data == 'exist')
									{
										alert('The admission has been discharged already!');
									};
								}
							});
						} 
						else 
						{
							alert('Please the Discharge Date cannot be less than the Admission Date!');
						};
					} 
					else 
					{
						alert('Please the Discharge Date cannot be EMPTY!');
					};
				} 
				else 
				{
					alert('Please the Admission Date cannot be EMPTY!');
				};
			});
		}

		function delete_admission()
		{
			$(document).on('click','#btn_delete_admission',function(){
				var admission_id = $(this).attr('data-id');
				var currentRow=$(this).closest("tr");
				var admission_date = currentRow.find("td:eq(1)").text();
				$('#admission_delete_question').text('Are you sure you want to delete admission of ' + admission_date + '?');
				$('#admission_delete_modal').modal('show');
				$(document).on('click','#admission_delete_yes',function()
				{
					$.ajax({  
						url:'/layout/vouchers/admission_delete.php',  
						type:'POST',  
						data:{admission_id:admission_id},
						success:function()
						{
							$('#admission_delete_modal').modal('hide');
							window.location.href="/layout/vouchers/admission_list.php";
						}  
		            });
			    });
				$(document).on('click','#admission_delete_no',function(){
					$('#admission_delete_modal').modal('hide');
				});
			});
		}

		function search_admission_by_date()
		{
			$(document).on('change','#admission_search_from, #admission_search_to',function(e){
				e.preventDefault();
				var start_date = $('#admission_search_from').val();
				var end_date = $('#admission_search_to').val();

				$.ajax({
		             url:'/layout/vouchers/admission_search_by_date.php',
		             method:'POST',
		             data:{start_date:start_date,end_date:end_date},
		             success:function(data)
					{
						$('#admission_list_table').html(data);
					}
		        });
			});
		}

		function search_admission_by_name()
		{
			$(document).on('keyup','#admission_search_name',function(e){
				e.preventDefault();
				var search = $('#admission_search_name').val();

				$.ajax({
		             url:'/layout/vouchers/admission_search_by_name.php',
		             method:'POST',
		             data:{search:search},
		             success:function(data)
			             {
			             	$('#admission_list_table').html(data);
			             }
		        });
			});
		}

		function search_admission_by_branch()
		{
			$(document).on('change','#admission_search_by_branch',function(e){
				var branch_id = $('#admission_search_by_branch').val();
				var start_date = $('#admission_search_from').val();
				var end_date = $('#admission_search_to').val();

				$.ajax({
		             url:'/layout/vouchers/admission_search_by_branch.php',
		             method:'POST',
		             data:{
						start_date:start_date,
						end_date:end_date,
						branch_id:branch_id
					},
		             success:function(data)
					{
						$('#admission_list_table').html(data);
					}
		        });
			});
		}

	//DISCOUNT
		function new_discount_voucher_modal()
		{
			$(document).on('click','#new_discount_icon, #btn_discount_admission',function()
			{
				var id = $(this).attr('id');
				$('#discount_create_form').trigger('reset');
				if(id == 'btn_discount_admission')
				{
					var admission_id = $(this).attr('data-id');
					var deseased = $(this).attr('data-id1');
					$('#discount_admission_id').val(admission_id);
					$('#discount_name').val(deseased);
					$('#discount_debit_ledger').val(7);
					$('#discount_credit_ledger').val(40);
				};
				$('#discount_update_btn').hide();
				$('#discount_save_btn').show();
				$('#discount_create_modal').modal('show');
			});
		}

		function cancel_discount_voucher_modal()
		{
			$(document).on('click','#discount_cancel_btn',function()
			{
				var page = window.location.pathname;
				$('#discount_create_form').trigger('reset');
				$('#discount_create_modal').modal('hide');
				window.location.href= page;
				//window.location.href="/layout/vouchers/discount_list.php";
			});
		}

		function save_discount_voucher()
		{
			$(document).on('click','#discount_save_btn',function(e){
				e.preventDefault();
				var discount_date = $('#discount_date').val();
				var discount_amount = $('#discount_amount').val();
				var discount_narration = $('#discount_narration').val();
				var page = window.location.pathname;
				if (discount_date !=="") 
				{
					if (discount_amount > 0) 
					{
						if (discount_narration !== "") 
						{
							$.ajax({
								url:'/layout/vouchers/discount_save.php',
								method:'POST',
								data:$('#discount_create_form').serialize(),
								success:function(data)
								{
									$('#discount_create_form').trigger('reset');
									$('#discount_create_modal').modal('hide');
									window.location.href= page;
									//window.location.href="/layout/vouchers/discount_list.php";
								}
							});
						} 
						else 
						{
							alert('Please the Narration cannot be EMPTY!');
						}
					} 
					else 
					{
						alert('Please provide amount for debit ledgers selected!');
					};
				} 
				else 
				{
					alert('Please select the date for the discount voucher!');
				};
			});
		}

		function edit_discount_voucher()
		{
			$(document).on('click','#btn_edit_discount',function(){
				var discount_id = $(this).attr('data-id');
				$.ajax({
						url:'/layout/vouchers/discount_edit.php',
						method:'POST',
						data:{discount_id:discount_id},
						datatype:'JSON',
						success:function(data)
						{
							var res = $.parseJSON(data);
							$('#discount_id').val(res[0]);
							$('#discount_credit_ledger').val(res[1]);
							$('#discount_admission_id').val(res[2]);
							$('#discount_debit_ledger').val(res[3]);
							$('#discount_date').val(res[4]);
							$('#discount_amount').val(res[5]);
							$('#discount_amountD').val(res[5]);
							$('#discount_narration').val(res[6]);
							$('#discount_update_btn').show();
							$('#discount_save_btn').hide();
							$('#discount_create_modal').modal('show');
							
						}
					});
				
			});
		}

		function update_discount_voucher()
		{
			$(document).on('click','#discount_update_btn',function(e){
				e.preventDefault();
				var discount_date = $('#discount_date').val();
				var discount_amount = $('#discount_amount').val();
				var discount_narration = $('#discount_narration').val();
				var page = window.location.pathname;
				if (discount_date !=="") 
				{
					if (discount_amount > 0) 
					{
						if (discount_narration !== "") 
						{
							$.ajax({
								url:'/layout/vouchers/discount_update.php',
								method:'POST',
								data:$('#discount_create_form').serialize(),
								success:function(data)
								{
									$('#discount_create_form').trigger('reset');
									window.location.href= page;
									//window.location.href="/layout/vouchers/discount_list.php";
								}
							});
						} 
						else 
						{
							alert('Please the Narration cannot be EMPTY!');
						}
					} 
					else 
					{
						alert('Please provide amount for debit ledgers selected!');
					};
				} 
				else 
				{
					alert('Please select the date for the discount voucher!');
				};
			});
		}

		function search_discount_by_name()
		{
			$(document).on('keyup','#discount_search_name',function(e){
				e.preventDefault();
				var company_id = $('#session_company_id').val();
				var discount_search_name = $('#discount_search_name').val();

				$.ajax({
					url:'/layout/vouchers/discount_search_by_name.php',
					method:'POST',
					data:{discount_search_name:discount_search_name,company_id:company_id},
					success:function(data)
						{
							$('#discount_list_card_body').html(data);
						}
				});
			});
		}

		function search_discount_by_date()
		{
			$(document).on('click','#discount_search_icon',function(e){
				e.preventDefault();
				var company_id = $('#session_company_id').val();
				var start_date = $('#discount_search_from').val();
				var end_date = $('#discount_search_to').val();

				$.ajax({
					url:'/layout/vouchers/discount_search_by_date.php',
					method:'POST',
					data:{start_date:start_date,end_date:end_date,company_id:company_id},
					success:function(data)
						{
							$('#discount_list_card_body').html(data);
						}
				});
			});
		}

		function delete_discount()
		{
			$(document).on('click','#btn_delete_discount',function(){
				var discount_id = $(this).attr('data-id');
				var currentRow=$(this).closest("tr");
				var discount_date = currentRow.find("td:eq(1)").text();
				$('#discount_delete_question').text('Are you sure you want to delete discount of ' + discount_date + '?');
				$('#discount_delete_modal').modal('show');
				$(document).on('click','#discount_delete_yes',function()
				{
					$.ajax({  
						url:'/layout/vouchers/discount_delete.php',  
						type:'POST',  
						data:{discount_id:discount_id},
						success:function()
						{
							$('#discount_delete_modal').modal('hide');
							window.location.href="/layout/vouchers/discount_list.php";
						}  
					});
				});
				$(document).on('click','#discount_delete_no',function(){
					$('#discount_delete_modal').modal('hide');
				});
			});
		}

	//RECEIPT
		function new_receipt_voucher_modal()
		{
			$(document).on('click','#new_receipt_icon, #new_receipt_from_job_card, #new_receipt_from_admission_icon',function()
			{
				var id = $(this).attr('id');
				$('#receipt_update_btn').hide();
				$('#receipt_save_btn').show();
				$('#receipt_create_form').trigger('reset');
				if(id == 'new_receipt_from_job_card')
				{
					var job_card_id = $(this).attr('data-id');
					var customer_ledger = $(this).attr('data-id1');
					var date = $(this).attr('data-id3');
					var amount = $(this).attr('data-id2');
					var customer = $(this).attr('data-id4');
					$('#receipt_job_card_id').val(job_card_id);
					$('#receipt_led_cr1').val(customer_ledger);
					$('#receipt_cr_amt1').val(amount);
					$('#receipt_date').val(date);
					$('#receipt_received_from').val(customer);
					$('#receipt_mode').val('cash');
					$('#receipt_narration').val('AMOUNT PAID FOR CLEANING/WASHING');
					$('#receipt_cr_narration1').val('AMOUNT PAID FOR CLEANING/WASHING');
					$('#receipt_ref').val(job_card_id);
					$('#receipt_amount').val(amount);
					$('#receipt_amountD').val(amount);
				}
				else if(id == 'new_receipt_from_admission_icon')
				{
					var admission_id = $(this).attr('data-id');
					var amount = $(this).attr('data-id1');
					var customer = $(this).attr('data-id2');
					var cash_ledger_id = $(this).attr('data-id3');
					$('#receipt_admission_id').val(admission_id);
					$('#receipt_debit_ledger').val(cash_ledger_id);
					$('#receipt_led_cr1').val(40);
					$('#receipt_cr_amt1').val(amount);
					$('#receipt_received_from').val(customer);
					$('#receipt_mode').val('cash');
					$('#receipt_narration').val('BILL PAYMENT');
					$('#receipt_cr_narration1').val('BILL PAYMENT');
					$('#receipt_ref').val(admission_id);
					$('#receipt_amount').val(amount);
					$('#receipt_amountD').val(amount);
				};
				$('#receipt_create_modal').modal('show');
			});
		}

		function receipt_mode_bank_details()
		{
			$(document).on('change keyup','#receipt_mode',function()
			{
				var payment_mode = $('#receipt_mode').val();
				if(payment_mode =='cheque')
				{
					$("#bank_details_div").prop("hidden",false);
				}else
				{
					$("#bank_details_div").prop("hidden",true);
				};
			});
		}

		/*function mask_receipt_amt()
			{
				$('.receipt_item_amt').mask('#,###,###,###.##',{reverse : true});
			}*/

		function sum_receipt_item_amount()
		{
			$(document).on('keyup','.receipt_cr_amt',function(){ 
					var sum=0;
					$('.receipt_cr_amt').each(function(){
						var num = $(this).val().replace(',','');
						if(num !=0){
							sum += parseFloat(num);
						}
					});
					$('#receipt_amount').val(sum);
					$('#receipt_amountD').val(sum);
				});
		}

		function add_receipt_item_row()
		{
			$(document).on('change','.receipt_led_cr',function(){ 
				var company_id = $('#session_company_id').val();
				var i = $('#receipt_cr_list_table tr:last').attr('id');
				var ledger_id = $('#receipt_led_cr'+i).val();
				if(ledger_id > 0)
				{
					i++;
					$.ajax({
						url:'/layout/vouchers/receipt_cr_list.php',
						method:'POST',
						data:{i:i,company_id:company_id},
						success:function(data)
						{
							$('#receipt_cr_list_table').append('<tr id="'+i+'">'+data+'</tr>');
						}
					});
				}
			});
		}

		function delete_receipt_item_row()
		{
			$(document).on('click', '#delete_receipt_cr', function(){  
       			var button_id = $(this).attr("data-id");
           		$('#'+button_id+'').remove();
           		var sum=0;
				$('.receipt_cr_amt').each(function(){
					var num = $(this).val().replace(',','');
					if(num !=0){
						sum += parseFloat(num);
					}
				});
				$('#receipt_amount').val(sum);
				$('#receipt_amountD').val(sum);
           	});
		}

		function cancel_receipt_voucher_modal()
		{
			$(document).on('click','#receipt_cancel_btn',function()
			{
				var page = window.location.pathname;
				$('#receipt_create_form').trigger('reset');
				$('#receipt_create_modal').modal('hide');
				window.location.href= page;
				//window.location.href="/layout/vouchers/receipt_list.php";
			});
		}

		function save_receipt_voucher()
		{
			$(document).on('click','#receipt_save_btn',function(e){
				e.preventDefault();
				var last_tr_id = $("#receipt_cr_list_table tr:last").attr("id");
				var last_tr_select = $("#receipt_cr_list_table tr:last option:selected").val();
				var receipt_debit_ledger = $('#receipt_debit_ledger').val();
				var receipt_mode = $('#receipt_mode').val();
				var receipt_date = $('#receipt_date').val();
				var receipt_received_from = $('#receipt_received_from').val();
				var receipt_amount = $('#receipt_amount').val();
				var page = window.location.pathname;
				if (receipt_debit_ledger !=="") 
				{
					if (receipt_date !=="") 
					{
						if (receipt_mode !=="") 
						{
							if (receipt_received_from !=="") 
							{
								if (receipt_amount > 0) 
								{
									if(last_tr_select =="" || last_tr_select ==0)
									{
										$('#'+last_tr_id+'').remove();
									};
									$.ajax({
							             url:'/layout/vouchers/receipt_save.php',
							             method:'POST',
							             data:$('#receipt_create_form').serialize(),
							             success:function(data)
								             {
								             	$('#receipt_create_form').trigger('reset');
												$('#receipt_create_modal').modal('hide');
								             	//window.open('/layout/vouchers/receipt_pdf.php', '_blank');
								             	//window.location.href= page;
												 $('#receipt_reprint_modal_title').text('Print Receipt');
												 $('#receipt_reprint_question').text('How do you want to print the receipt?');
												 $('#receipt_reprint_a5').text('A5');
												 $('#receipt_reprint_pos').text('POS');
												 $('#receipt_reprint_modal').modal('show');
												 $(document).on('click','#receipt_reprint_a5',function(){
													 $('#receipt_reprint_modal').modal('hide');
													 window.open('/layout/vouchers/receipt_pdf.php', '_blank');
												 });
												 $(document).on('click','#receipt_reprint_pos',function(){
													 $('#receipt_reprint_modal').modal('hide');
													 window.open('/layout/vouchers/receipt_pos_pdf.php', '_blank');
												 });
								             }
							        });		
								} 
								else 
								{
									alert('Please provide amount for credit ledgers selected!');
								}
							} 
							else 
							{
								alert('Please type the name of the person the receipt is being made to!');
							}
						} 
						else 
						{
							alert('Please select the mode of receipt!');
						}
					} 
					else 
					{
						alert('Please select the date for the receipt voucher!');
					}
				} 
				else 
				{
					alert('Please select the ledger from which receipt is being made!');
				};
			});
		}

		function edit_receipt_voucher()
		{
			$(document).on('click','#btn_edit_receipt',function(){
				var receipt_id = $(this).attr('data-id');
				$.ajax({
					url:'/layout/vouchers/receipt_edit.php',
					method:'POST',
					data:{receipt_id:receipt_id},
					datatype:'JSON',
					success:function(data)
					{
						var res = $.parseJSON(data);
						$('#receipt_id').val(res[1]);
						$('#receipt_company_id').val(res[2]);
						$('#receipt_user_id').val(res[3]);
						$('#receipt_user_super_id').val(res[0]);
						$('#receipt_debit_ledger').val(res[4]);
						$('#receipt_ref').val(res[10]);
						$('#receipt_date').val(res[7]);
						$('#receipt_amount').val(res[8]);
						$('#receipt_amountD').val(res[8]);
						$('#receipt_mode').val(res[11]);
						$('#receipt_inst_no').val(res[14]);
						$('#receipt_bank').val(res[12]);
						$('#receipt_branch').val(res[13]);
						$('#receipt_received_from').val(res[6]);
						$('#receipt_narration').val(res[9]);
						$('#receipt_branch_id').val(res[15]);
						$('#receipt_branch_idD').val(res[15]);
						$('#receipt_job_card_id').val(res[16]);
						$('#receipt_admission_id').val(res[11]);
						$.ajax({
							url:'/layout/vouchers/receipt_cr_edit.php',
							method:'POST',
							data:{receipt_id:receipt_id},
							success:function(data)
							{
								$('#receipt_cr_list').html(data);
							}
						});
						$('#receipt_update_btn').show();
						$('#receipt_save_btn').hide();
						$('#receipt_create_modal').modal('show');
					}
				});
			});
		}

		function update_receipt_voucher()
		{
			$(document).on('click','#receipt_update_btn',function(e){
				e.preventDefault();
				var last_tr_id = $("#receipt_cr_list_table tr:last").attr("id");
				var last_tr_select = $("#receipt_cr_list_table tr:last option:selected").val();
				var receipt_debit_ledger = $('#receipt_debit_ledger').val();
				var receipt_mode = $('#receipt_mode').val();
				var receipt_date = $('#receipt_date').val();
				var receipt_received_from = $('#receipt_received_from').val();
				var receipt_amount = $('#receipt_amount').val();
				var page = window.location.pathname;
				if (receipt_debit_ledger !=="") 
				{
					if (receipt_date !=="") 
					{
						if (receipt_mode !=="") 
						{
							if (receipt_received_from !=="") 
							{
								if (receipt_amount > 0) 
								{
									if(last_tr_select =="" || last_tr_select ==0)
									{
										$('#'+last_tr_id+'').remove();
									};
									$.ajax({
							             url:'/layout/vouchers/receipt_update.php',
							             method:'POST',
							             data:$('#receipt_create_form').serialize(),
							             success:function(data)
								             {
								             	$('#receipt_create_form').trigger('reset');
								             	window.location.href= page;
								             	//window.location.href="/layout/vouchers/receipt_list.php";
								             }
							        });		
								} 
								else 
								{
									alert('Please provide amount for credit ledgers selected!');
								}
							} 
							else 
							{
								alert('Please type the name of the person the receipt is being made to!');
							}
						} 
						else 
						{
							alert('Please select the mode of receipt!');
						}
					} 
					else 
					{
						alert('Please select the date for the receipt voucher!');
					}
				} 
				else 
				{
					alert('Please select the ledger from which receipt is being made!');
				};
			});
		}

		function search_receipt_by_name()
		{
			$(document).on('keyup','#receipt_search_name',function(e){
				e.preventDefault();
				var company_id = $('#session_company_id').val();
				var receipt_search_name = $('#receipt_search_name').val();

				$.ajax({
					url:'/layout/vouchers/receipt_search_by_name.php',
					method:'POST',
					data:{receipt_search_name:receipt_search_name,company_id:company_id},
					success:function(data)
					{
						$('#receipt_list_card_body').html(data);
					}
		        });
			});
		}

		function search_receipt_by_date()
		{
			$(document).on('click','#receipt_search_icon',function(e){
				e.preventDefault();
				var company_id = $('#session_company_id').val();
				var start_date = $('#receipt_search_from').val();
				var end_date = $('#receipt_search_to').val();

				$.ajax({
		             url:'/layout/vouchers/receipt_search_by_date.php',
		             method:'POST',
		             data:{start_date:start_date,end_date:end_date,company_id:company_id},
		             success:function(data)
			             {
			             	$('#receipt_list_card_body').html(data);
			             }
		        });
			});
		}

		function search_receipt_by_branch()
		{
			$(document).on('click','#receipt_search_by_branch',function(e)
			{
				e.preventDefault();
				var branch_id = $('#receipt_search_by_branch').val();
				var start_date = $('#receipt_search_from').val();
				var end_date = $('#receipt_search_to').val();

				$.ajax({
					url:'/layout/vouchers/receipt_search_by_branch.php',
					method:'POST',
					data:{
						start_date:start_date,
						end_date:end_date,
						branch_id:branch_id
					},
		            success:function(data)
					{
						$('#receipt_list_card_body').html(data);
					}
		        });
			});
		}

		function reprint_receipt()
		{
			$(document).on('click','#btn_receipt_reprint',function(e){
				var receipt_id = $(this).attr('data-id');
				var company_id = $('#session_company_id').val();

				$.ajax({
		             url:'/layout/vouchers/receipt_reprint.php',
		             method:'POST',
		             data:{
		             	receipt_id:receipt_id,
		             	company_id:company_id
		             },
		             success:function(data)
		             {
						$('#receipt_reprint_modal_title').text('Print Receipt');
						$('#receipt_reprint_question').text('How do you want to print the receipt?');
						$('#receipt_reprint_a5').text('A5');
						$('#receipt_reprint_pos').text('POS');
						$('#receipt_reprint_modal').modal('show');
						$(document).on('click','#receipt_reprint_a5',function(){
							$('#receipt_reprint_modal').modal('hide');
							window.open('/layout/vouchers/receipt_pdf.php', '_blank');
						});
						$(document).on('click','#receipt_reprint_pos',function(){
							$('#receipt_reprint_modal').modal('hide');
							window.open('/layout/vouchers/receipt_pos_pdf.php', '_blank');
						});
		             }
		        });
			});
		}

		function delete_receipt()
		{
			$(document).on('click','#btn_delete_receipt',function(){
				var receipt_id = $(this).attr('data-id');
				var currentRow=$(this).closest("tr");
				var receipt_date = currentRow.find("td:eq(1)").text();
				//var Supplier = currentRow.find("td:eq(3)").text();
				$('#receipt_delete_modal_title').text('Delete Receipt');
				$('#receipt_delete_yes').text('Yes');
				$('#receipt_delete_no').text('No');
				$('#receipt_delete_question').text('Are you sure you want to delete receipt of ' + receipt_date + '?');
				$('#receipt_delete_modal').modal('show');
				$(document).on('click','#receipt_delete_yes',function(){
					$.ajax({  
		                 url:'/layout/vouchers/receipt_delete.php',  
		                 type:'POST',  
		                 data:{receipt_id:receipt_id},
		                 success:function(){
		                 	$('#receipt_delete_modal').modal('hide');
		                 	window.location.href="/layout/vouchers/receipt_list.php";
		                 }  
		            });
			      });
				$(document).on('click','#receipt_delete_no',function(){
					$('#receipt_delete_modal').modal('hide');
				});
			});
		}

	//REFUND
		function new_refund_voucher_modal()
		{
			$(document).on('click','#btn_refund_receipt',function()
			{
				var receipt_id = $(this).attr('data-id');
				var amount = $(this).attr('data-id1');
				var credit = $(this).attr('data-id2');
				var debit = $(this).attr('data-id3');
				var name = $(this).attr('data-id4');
				$('#refund_create_form').trigger('reset');
				$('#refund_receipt_id').val(receipt_id);
				$('#refund_receipt_amount').val(amount);
				$('#refund_debit_ledger').val(debit);
				$('#refund_credit_ledger').val(credit);
				$('#refund_name').val(name);
				$('#refund_update_btn').hide();
				$('#refund_save_btn').show();
				$('#refund_create_modal').modal('show');
			});
		}

		function cancel_refund_voucher_modal()
		{
			$(document).on('click','#refund_cancel_btn',function()
			{
				var page = window.location.pathname;
				$('#refund_create_form').trigger('reset');
				$('#refund_create_modal').modal('hide');
				window.location.href= page;
				//window.location.href="/layout/vouchers/refund_list.php";
			});
		}

		function save_refund_voucher()
		{
			$(document).on('click','#refund_save_btn',function(e)
			{
				e.preventDefault();
				var receipt_amount = parseFloat($('#refund_receipt_amount').val());
				var refund_credit_ledger = $('#refund_credit_ledger').val();
				var refund_mode = $('#refund_mode').val();
				var refund_date = $('#refund_date').val();
				var refund_name = $('#refund_name').val();
				var refund_amount = parseFloat($('#refund_amount').val());
				var refund_narration = $('#refund_narration').val();
				if (receipt_amount >= refund_amount) 
				{
					if (refund_credit_ledger !=="") 
					{
						if (refund_date !=="") 
						{
							if (refund_mode !=="") 
							{
								if (refund_name !=="") 
								{
									if (refund_amount > 0) 
									{
										if (refund_narration !== "") 
										{
											$.ajax({
												url:'/layout/vouchers/refund_save.php',
												method:'POST',
												data:$('#refund_create_form').serialize(),
												success:function(data)
												{
													$('#refund_create_form').trigger('reset');
													window.location.href="/layout/vouchers/refund_list.php";
												}
											});
										} 
										else 
										{
											alert('Please the Narration cannot be EMPTY!');
										}
									} 
									else 
									{
										alert('Please provide amount for debit ledgers selected!');
									}
								} 
								else 
								{
									alert('Please type the name of the person the payment is being made to!');
								}
							} 
							else 
							{
								alert('Please select the mode of refund!');
							}
						} 
						else 
						{
							alert('Please select the date for the refund voucher!');
						}l
					} 
					else 
					{
						alert('Please select the ledger from which payment is being made!');
					};
				} 
				else 
				{
					alert('Please the refund amount:'+ refund_amount + ' cannot be more than the receipt amount:' +receipt_amount+'!');
				};
			});
		}

		function edit_refund_voucher()
		{
			$(document).on('click','#btn_edit_refund',function(){
				var refund_id = $(this).attr('data-id');
				$.ajax({
					url:'/layout/vouchers/refund_edit.php',
					method:'POST',
					data:{refund_id:refund_id},
					datatype:'JSON',
					success:function(data)
					{
						var res = $.parseJSON(data);
						$('#refund_id').val(res[0]);
						$('#refund_receipt_id').val(res[1]);
						$('#refund_receipt_amount').val(res[2]);
						$('#refund_credit_ledger').val(res[3]);
						$('#refund_debit_ledger').val(res[4]);
						$('#refund_date').val(res[5]);
						$('#refund_amount').val(res[6]);
						$('#refund_narration').val(res[7]);
						$('#refund_name').val(res[8]);
						$('#refund_update_btn').show();
						$('#refund_save_btn').hide();
						$('#refund_create_modal').modal('show');
					}
				});
			});
		}

		function update_refund_voucher()
		{
			$(document).on('click','#refund_update_btn',function(e)
			{
				e.preventDefault();
				var receipt_amount = parseFloat($('#refund_receipt_amount').val());
				var refund_credit_ledger = $('#refund_credit_ledger').val();
				var refund_mode = $('#refund_mode').val();
				var refund_date = $('#refund_date').val();
				var refund_name = $('#refund_name').val();
				var refund_amount = parseFloat($('#refund_amount').val());
				var refund_narration = $('#refund_narration').val();
				if (receipt_amount >= refund_amount) 
				{
					if (refund_credit_ledger !=="") 
					{
						if (refund_date !=="") 
						{
							if (refund_mode !=="") 
							{
								if (refund_name !=="") 
								{
									if (refund_amount > 0) 
									{
										if (refund_narration !== "") 
										{
											$.ajax({
												url:'/layout/vouchers/refund_update.php',
												method:'POST',
												data:$('#refund_create_form').serialize(),
												success:function(data)
												{
													$('#refund_create_form').trigger('reset');
													window.location.href="/layout/vouchers/refund_list.php";
												}
											});
										} 
										else 
										{
											alert('Please the Narration cannot be EMPTY!');
										}
									} 
									else 
									{
										alert('Please provide amount for debit ledgers selected!');
									}
								} 
								else 
								{
									alert('Please type the name of the person the payment is being made to!');
								}
							} 
							else 
							{
								alert('Please select the mode of refund!');
							}
						} 
						else 
						{
							alert('Please select the date for the refund voucher!');
						}l
					} 
					else 
					{
						alert('Please select the ledger from which payment is being made!');
					};
				} 
				else 
				{
					alert('Please the refund amount:'+ refund_amount + ' cannot be more than the receipt amount:' +receipt_amount+'!');
				};
			});
		}
		
		function search_refund_by_name()
		{
			$(document).on('keyup','#refund_search_name',function(e){
				e.preventDefault();
				var refund_search_name = $('#refund_search_name').val();

				$.ajax({
					url:'/layout/vouchers/refund_search_by_name.php',
					method:'POST',
					data:{refund_search_name:refund_search_name},
					success:function(data)
					{
						$('#refund_list_card_body').html(data);
					}
				});
			});
		}

		function search_refund_by_date()
		{
			$(document).on('click','#refund_search_icon',function(e){
				e.preventDefault();
				var company_id = $('#session_company_id').val();
				var start_date = $('#refund_search_from').val();
				var end_date = $('#refund_search_to').val();

				$.ajax({
					url:'/layout/vouchers/refund_search_by_date.php',
					method:'POST',
					data:{start_date:start_date,end_date:end_date,company_id:company_id},
					success:function(data)
						{
							$('#refund_list_card_body').html(data);
						}
				});
			});
		}

		function search_refund_by_branch()
		{
			$(document).on('click','#refund_search_by_branch',function(e){
				e.preventDefault();
				var branch_id = $('#refund_search_by_branch').val();
				var start_date = $('#refund_search_from').val();
				var end_date = $('#refund_search_to').val();

				$.ajax({
					url:'/layout/vouchers/refund_search_by_date.php',
					method:'POST',
					data:{
						start_date:start_date,
						end_date:end_date,
						branch_id:branch_id
					},
					success:function(data)
						{
							$('#refund_list_card_body').html(data);
						}
				});
			});
		}

		function delete_refund()
		{
			$(document).on('click','#btn_delete_refund',function(){
				var refund_id = $(this).attr('data-id');
				var currentRow=$(this).closest("tr");
				var refund_date = currentRow.find("td:eq(0)").text();
				$('#refund_delete_question').text('Are you sure you want to delete refund of ' + refund_date + '?');
				$('#refund_delete_modal').modal('show');
				$(document).on('click','#refund_delete_yes',function()
				{
					$.ajax({  
						url:'/layout/vouchers/refund_delete.php',  
						type:'POST',  
						data:{refund_id:refund_id},
						success:function()
						{
							$('#refund_delete_modal').modal('hide');
							window.location.href="/layout/vouchers/refund_list.php";
						}  
					});
				});
				$(document).on('click','#refund_delete_no',function(){
					$('#refund_delete_modal').modal('hide');
				});
			});
		}

	//PAYMENT
		function new_payment_voucher_modal()
		{
			$(document).on('click','#new_payment_icon',function()
			{
				var company_id = $('#session_company_id').val();
				var user_super_id = $('#session_user_super_id').val();
				var user_id = $('#session_user_id').val();
				$('#company_id').val(company_id);
				$('#user_super_id').val(user_super_id);
				$('#user_id').val(user_id);
				$('#payment_update_btn').hide();
				$('#payment_save_btn').show();
				$('#payment_create_form').trigger('reset');
				$('#payment_create_modal').modal('show');
			});
		}

		function payment_mode_bank_details()
		{
			$(document).on('change keyup','#payment_mode',function()
			{
				var payment_mode = $('#payment_mode').val();
				if(payment_mode =='cheque')
				{
					$("#bank_details_div").prop("hidden",false);
				}else
				{
					$("#bank_details_div").prop("hidden",true);
				};
			});
		}

		/*function mask_payment_amt()
			{
				$('.payment_item_amt').mask('#,###,###,###.##',{reverse : true});
			}*/

		function sum_payment_item_amount()
		{
			$(document).on('keyup','.payment_dr_amt',function(){ 
					var sum=0;
					$('.payment_dr_amt').each(function(){
						var num = $(this).val().replace(',','');
						if(num !=0){
							sum += parseFloat(num);
						}
					});
					$('#payment_amount').val(sum);
					$('#payment_amountD').val(sum);
				});
		}

		function add_payment_item_row()
		{
			$(document).on('change','.payment_led_dr',function(){ 
				var company_id = $('#session_company_id').val();
				var i = $('#payment_dr_list_table tr:last').attr('id');
				var ledger_id = $('#payment_led_dr'+i).val();
				if(ledger_id > 0)
				{
					i++;
					$.ajax({
						url:'/layout/vouchers/payment_dr_list.php',
						method:'POST',
						data:{i:i,company_id:company_id},
						success:function(data)
						{
							$('#payment_dr_list_table').append('<tr id="'+i+'">'+data+'</tr>');
						}
					});
				}
			});
		}

		function delete_payment_item_row()
		{
			$(document).on('click', '#delete_payment_dr', function(){  
       			var button_id = $(this).attr("data-id");
           		$('#'+button_id+'').remove();
           		var sum=0;
				$('.payment_dr_amt').each(function(){
					var num = $(this).val().replace(',','');
					if(num !=0){
						sum += parseFloat(num);
					}
				});
				$('#payment_amount').val(sum);
				$('#payment_amountD').val(sum);
           	});
		}

		function cancel_payment_voucher_modal()
		{
			$(document).on('click','#payment_cancel_btn',function()
			{
				var page = window.location.pathname;
				$('#payment_create_form').trigger('reset');
				$('#payment_create_modal').modal('hide');
				window.location.href= page;
				//window.location.href="/layout/vouchers/payment_list.php";
			});
		}

		function save_payment_voucher()
		{
			$(document).on('click','#payment_save_btn',function(e)
			{
				e.preventDefault();
				var last_tr_id = $("#payment_dr_list_table tr:last").attr("id");
				var last_tr_select = $("#payment_dr_list_table tr:last option:selected").val();
				var payment_credit_ledger = $('#payment_credit_ledger').val();
				var payment_mode = $('#payment_mode').val();
				var payment_date = $('#payment_date').val();
				var payment_payee = $('#payment_payee').val();
				var payment_amount = $('#payment_amount').val();
				var page = window.location.pathname;
				if (payment_credit_ledger !=="") 
				{
					if (payment_date !=="") 
					{
						if (payment_mode !=="") 
						{
							if (payment_payee !=="") 
							{
								if (payment_amount > 0) 
								{
									if(last_tr_select =="" || last_tr_select ==0)
									{
										$('#'+last_tr_id+'').remove();
									};
									$.ajax({
										url:'/layout/vouchers/payment_save.php',
										method:'POST',
										data:$('#payment_create_form').serialize(),
										success:function(data)
										{
											$('#payment_create_form').trigger('reset');
											//window.location.href="/layout/vouchers/payment_list.php";
											window.open('/layout/vouchers/payment_pdf.php', '_blank');
											window.location.href= page;
										}
							        });		
								} 
								else 
								{
									alert('Please provide amount for debit ledgers selected!');
								}
							} 
							else 
							{
								alert('Please type the name of the person the payment is being made to!');
							}
						} 
						else 
						{
							alert('Please select the mode of payment!');
						}
					} 
					else 
					{
						alert('Please select the date for the payment voucher!');
					}
				} 
				else 
				{
					alert('Please select the ledger from which payment is being made!');
				};
			});
		}

		function edit_payment_voucher()
		{
			$(document).on('click','#btn_edit_payment',function(){
				var payment_id = $(this).attr('data-id');
				$.ajax({
			            url:'/layout/vouchers/payment_edit.php',
			            method:'POST',
			            data:{payment_id:payment_id},
						datatype:'JSON',
			            success:function(data)
			            {
			             	var res = $.parseJSON(data);
			             	$('#payment_id').val(res[1]);
			             	$('#company_id').val(res[2]);
			             	$('#user_id').val(res[3]);
			             	$('#user_super_id').val(res[0]);
			             	$('#payment_credit_ledger').val(res[4]);
			             	$('#payment_ref').val(res[10]);
			             	$('#payment_date').val(res[7]);
			             	$('#payment_amount').val(res[8]);
			             	$('#payment_amountD').val(res[8]);
			             	$('#payment_mode').val(res[11]);
			             	$('#payment_inst_no').val(res[14]);
			             	$('#payment_bank').val(res[12]);
			             	$('#payment_branch').val(res[13]);
			             	$('#payment_payee').val(res[6]);
			             	$('#payment_narration').val(res[9]);
			             	$('#payment_branch_id').val(res[15]);
			             	$('#payment_branch_idD').val(res[15]);

			             	$.ajax({
					            url:'/layout/vouchers/payment_dr_edit.php',
					            method:'POST',
					            data:{payment_id:payment_id},
					            success:function(data)
						            {
						            	$('#payment_dr_list').html(data);
									}
				            });
			             	$('#payment_update_btn').show();
			             	$('#payment_save_btn').hide();
							$('#payment_create_modal').modal('show');
    						
						}
		             });
				
			});
		}

		function update_payment_voucher()
		{
			$(document).on('click','#payment_update_btn',function(e){
				e.preventDefault();
				var last_tr_id = $("#payment_dr_list_table tr:last").attr("id");
				var last_tr_select = $("#payment_dr_list_table tr:last option:selected").val();
				var payment_credit_ledger = $('#payment_credit_ledger').val();
				var payment_mode = $('#payment_mode').val();
				var payment_date = $('#payment_date').val();
				var payment_payee = $('#payment_payee').val();
				var payment_amount = $('#payment_amount').val();
				var page = window.location.pathname;
				if (payment_credit_ledger !=="") 
				{
					if (payment_date !=="") 
					{
						if (payment_mode !=="") 
						{
							if (payment_payee !=="") 
							{
								if (payment_amount > 0) 
								{
									if(last_tr_select =="" || last_tr_select ==0)
									{
										$('#'+last_tr_id+'').remove();
									};
									$.ajax({
							             url:'/layout/vouchers/payment_update.php',
							             method:'POST',
							             data:$('#payment_create_form').serialize(),
							             success:function(data)
								             {
								             	$('#payment_create_form').trigger('reset');
												window.open('/layout/vouchers/payment_pdf.php', '_blank');
								             	window.location.href= page;
								             	//window.location.href="/layout/vouchers/payment_list.php";
								             }
							        });		
								} 
								else 
								{
									alert('Please provide amount for debit ledgers selected!');
								}
							} 
							else 
							{
								alert('Please type the name of the person the payment is being made to!');
							}
						} 
						else 
						{
							alert('Please select the mode of payment!');
						}
					} 
					else 
					{
						alert('Please select the date for the payment voucher!');
					}
				} 
				else 
				{
					alert('Please select the ledger from which payment is being made!');
				};
			});
		}

		function reprint_payment_voucher()
		{
			$(document).on('click','#btn_payment_reprint',function(e)
			{
				var payment_id = $(this).attr('data-id');
				$.ajax({
		             url:'/layout/vouchers/payment_reprint.php',
		             method:'POST',
		             data:{
						payment_id:payment_id
		             },
		             success:function(data)
		             {
						window.open('/layout/vouchers/payment_pdf.php', '_blank');
		             }
		        });
			});
		}

		function search_payment_by_name()
		{
			$(document).on('keyup','#payment_search_name',function(e){
				e.preventDefault();
				var company_id = $('#session_company_id').val();
				var payment_search_name = $('#payment_search_name').val();

				$.ajax({
		             url:'/layout/vouchers/payment_search_by_name.php',
		             method:'POST',
		             data:{payment_search_name:payment_search_name,company_id:company_id},
		             success:function(data)
			             {
			             	$('#payment_list_card_body').html(data);
			             }
		        });
			});
		}

		function search_payment_by_date()
		{
			$(document).on('click','#payment_search_icon',function(e){
				e.preventDefault();
				var company_id = $('#session_company_id').val();
				var start_date = $('#payment_search_from').val();
				var end_date = $('#payment_search_to').val();

				$.ajax({
		             url:'/layout/vouchers/payment_search_by_date.php',
		             method:'POST',
		             data:{start_date:start_date,end_date:end_date,company_id:company_id},
		             success:function(data)
			             {
			             	$('#payment_list_card_body').html(data);
			             }
		        });
			});
		}

		function search_payment_by_branch()
		{
			$(document).on('click','#payment_search_by_branch',function(e){
				e.preventDefault();
				var branch_id = $('#payment_search_by_branch').val();
				var start_date = $('#payment_search_from').val();
				var end_date = $('#payment_search_to').val();

				$.ajax({
		             url:'/layout/vouchers/payment_search_by_branch.php',
		             method:'POST',
		             data:{start_date:start_date,end_date:end_date,branch_id:branch_id},
		             success:function(data)
			             {
			             	$('#payment_list_card_body').html(data);
			             }
		        });
			});
		}

		function delete_payment()
		{
			$(document).on('click','#btn_delete_payment',function(){
				var payment_id = $(this).attr('data-id');
				var currentRow=$(this).closest("tr");
				var payment_date = currentRow.find("td:eq(1)").text();
				$('#payment_delete_question').text('Are you sure you want to delete payment of ' + payment_date + '?');
				$('#payment_delete_modal').modal('show');
				$(document).on('click','#payment_delete_yes',function()
				{
					$.ajax({  
						url:'/layout/vouchers/payment_delete.php',  
						type:'POST',  
						data:{payment_id:payment_id},
						success:function()
						{
							$('#payment_delete_modal').modal('hide');
							window.location.href="/layout/vouchers/payment_list.php";
						}  
		            });
			    });
				$(document).on('click','#payment_delete_no',function(){
					$('#payment_delete_modal').modal('hide');
				});
			});
		}

	//CONTRA
		function new_contra_voucher_modal()
		{
			$(document).on('click','#new_contra_icon',function()
			{
				var company_id = $('#session_company_id').val();
				var user_super_id = $('#session_user_super_id').val();
				var user_id = $('#session_user_id').val();
				$('#contra_company_id').val(company_id);
				$('#contra_user_super_id').val(user_super_id);
				$('#contra_user_id').val(user_id);
				$('#contra_update_btn').hide();
				$('#contra_save_btn').show();
				$('#contra_create_form').trigger('reset');
				$('#contra_create_modal').modal('show');
			});
		}

		function contra_mode_bank_details()
		{
			$(document).on('change keyup','#contra_mode',function()
			{
				var contra_mode = $('#contra_mode').val();
				if(contra_mode =='cheque')
				{
					$("#bank_details_div").prop("hidden",false);
				}else
				{
					$("#bank_details_div").prop("hidden",true);
				};
			});
		}

		function cancel_contra_voucher_modal()
		{
			$(document).on('click','#contra_cancel_btn',function()
			{
				var page = window.location.pathname;
				$('#contra_create_form').trigger('reset');
				$('#contra_create_modal').modal('hide');
				window.location.href= page;
				//window.location.href="/layout/vouchers/contra_list.php";
			});
		}

		function save_contra_voucher()
		{
			$(document).on('click','#contra_save_btn',function(e){
				e.preventDefault();
				var contra_debit_ledger = $('#contra_debit_ledger').val();
				var contra_credit_ledger = $('#contra_credit_ledger').val();
				var contra_mode = $('#contra_mode').val();
				var contra_date = $('#contra_date').val();
				var contra_name = $('#contra_name').val();
				var contra_amount = $('#contra_amount').val();
				var contra_narration = $('#contra_narration').val();
				var page = window.location.pathname;
				if (contra_credit_ledger !=="") 
				{
					if (contra_date !=="") 
					{
						if (contra_mode !=="") 
						{
							if (contra_name !=="") 
							{
								if (contra_amount > 0) 
								{
									if (contra_narration !== "") 
									{
										$.ajax({
								             url:'/layout/vouchers/contra_save.php',
								             method:'POST',
								             data:$('#contra_create_form').serialize(),
								             success:function(data)
									             {
									             	$('#contra_create_form').trigger('reset');
									             	window.location.href= page;
									             	//window.location.href="/layout/vouchers/contra_list.php";
									             }
								        });
								    } 
									else 
									{
										alert('Please the Narration cannot be EMPTY!');
									}
								} 
								else 
								{
									alert('Please provide amount for debit ledgers selected!');
								}
							} 
							else 
							{
								alert('Please type the name of the person the payment is being made to!');
							}
						} 
						else 
						{
							alert('Please select the mode of contra!');
						}
					} 
					else 
					{
						alert('Please select the date for the contra voucher!');
					}
				} 
				else 
				{
					alert('Please select the ledger from which payment is being made!');
				};
			});
		}

		function edit_contra_voucher()
		{
			$(document).on('click','#btn_edit_contra',function(){
				var contra_id = $(this).attr('data-id');
				$.ajax({
			            url:'/layout/vouchers/contra_edit.php',
			            method:'POST',
			            data:{contra_id:contra_id},
						datatype:'JSON',
			            success:function(data)
			            {
			             	var res = $.parseJSON(data);
			             	$('#contra_id').val(res[1]);
			             	$('#contra_company_id').val(res[2]);
			             	$('#contra_user_id').val(res[3]);
			             	$('#contra_user_super_id').val(res[0]);
			             	$('#contra_debit_ledger').val(res[5]);
			             	$('#contra_credit_ledger').val(res[4]);
			             	$('#contra_ref').val(res[10]);
			             	$('#contra_date').val(res[7]);
			             	$('#contra_amount').val(res[8]);
			             	$('#contra_amountD').val(res[8]);
			             	$('#contra_mode').val(res[11]);
			             	$('#contra_inst_no').val(res[14]);
			             	$('#contra_bank').val(res[12]);
			             	$('#contra_branch').val(res[13]);
			             	$('#contra_name').val(res[6]);
			             	$('#contra_narration').val(res[9]);
			             	$('#contra_branch_id').val(res[15]);

			             	$.ajax({
					            url:'/layout/vouchers/contra_dr_edit.php',
					            method:'POST',
					            data:{contra_id:contra_id},
					            success:function(data)
						            {
						            	$('#contra_dr_list').html(data);
									}
				            });
			             	$('#contra_update_btn').show();
			             	$('#contra_save_btn').hide();
							$('#contra_create_modal').modal('show');
    						
						}
		             });
				
			});
		}

		function update_contra_voucher()
		{
			$(document).on('click','#contra_update_btn',function(e){
				e.preventDefault();
				var contra_debit_ledger = $('#contra_debit_ledger').val();
				var contra_credit_ledger = $('#contra_credit_ledger').val();
				var contra_mode = $('#contra_mode').val();
				var contra_date = $('#contra_date').val();
				var contra_name = $('#contra_name').val();
				var contra_amount = $('#contra_amount').val();
				var contra_narration = $('#contra_narration').val();
				var page = window.location.pathname;
				if (contra_credit_ledger !=="") 
				{
					if (contra_date !=="") 
					{
						if (contra_mode !=="") 
						{
							if (contra_name !=="") 
							{
								if (contra_amount > 0) 
								{
									if (contra_narration !== "") 
									{
										$.ajax({
											url:'/layout/vouchers/contra_update.php',
											method:'POST',
											data:$('#contra_create_form').serialize(),
											success:function(data)
											{
												$('#contra_create_form').trigger('reset');
												window.location.href= page;
												//window.location.href="/layout/vouchers/contra_list.php";
											}
								        });
								    } 
									else 
									{
										alert('Please the Narration cannot be EMPTY!');
									}
								} 
								else 
								{
									alert('Please provide amount for debit ledgers selected!');
								}
							} 
							else 
							{
								alert('Please type the name of the person the payment is being made to!');
							}
						} 
						else 
						{
							alert('Please select the mode of contra!');
						}
					} 
					else 
					{
						alert('Please select the date for the contra voucher!');
					}
				} 
				else 
				{
					alert('Please select the ledger from which payment is being made!');
				};
			});
		}

		function search_contra_by_name()
		{
			$(document).on('keyup','#contra_search_name',function(e){
				e.preventDefault();
				var company_id = $('#session_company_id').val();
				var contra_search_name = $('#contra_search_name').val();

				$.ajax({
		             url:'/layout/vouchers/contra_search_by_name.php',
		             method:'POST',
		             data:{contra_search_name:contra_search_name,company_id:company_id},
		             success:function(data)
			             {
			             	$('#contra_list_card_body').html(data);
			             }
		        });
			});
		}

		function search_contra_by_date()
		{
			$(document).on('click','#contra_search_icon',function(e){
				e.preventDefault();
				var company_id = $('#session_company_id').val();
				var start_date = $('#contra_search_from').val();
				var end_date = $('#contra_search_to').val();

				$.ajax({
		             url:'/layout/vouchers/contra_search_by_date.php',
		             method:'POST',
		             data:{start_date:start_date,end_date:end_date,company_id:company_id},
		             success:function(data)
			             {
			             	$('#contra_list_card_body').html(data);
			             }
		        });
			});
		}

		function search_contra_by_branch()
		{
			$(document).on('click','#contra_search_by_branch',function(e){
				e.preventDefault();
				var branch_id = $('#contra_search_by_branch').val();
				var start_date = $('#contra_search_from').val();
				var end_date = $('#contra_search_to').val();

				$.ajax({
					url:'/layout/vouchers/contra_search_by_branch.php',
					method:'POST',
					data:{start_date:start_date,end_date:end_date,branch_id:branch_id},
					success:function(data)
					{
						$('#contra_list_card_body').html(data);
					}
		        });
			});
		}

		function delete_contra()
		{
			$(document).on('click','#btn_delete_contra',function(){
				var contra_id = $(this).attr('data-id');
				var currentRow=$(this).closest("tr");
				var contra_date = currentRow.find("td:eq(1)").text();
				$('#contra_delete_question').text('Are you sure you want to delete contra of ' + contra_date + '?');
				$('#contra_delete_modal').modal('show');
				$(document).on('click','#contra_delete_yes',function()
				{
					$.ajax({  
						url:'/layout/vouchers/contra_delete.php',  
						type:'POST',  
						data:{contra_id:contra_id},
						success:function()
						{
							$('#contra_delete_modal').modal('hide');
							window.location.href="/layout/vouchers/contra_list.php";
						}  
		            });
			    });
				$(document).on('click','#contra_delete_no',function(){
					$('#contra_delete_modal').modal('hide');
				});
			});
		}
		
	//JOURNAL
		function new_journal_voucher_modal()
		{
			$(document).on('click','#new_journal_icon',function()
			{
				var company_id = $('#session_company_id').val();
				var user_super_id = $('#session_user_super_id').val();
				var user_id = $('#session_user_id').val();
				$('#company_id').val(company_id);
				$('#user_super_id').val(user_super_id);
				$('#user_id').val(user_id);
				$('#journal_update_btn').hide();
				$('#journal_save_btn').show();
				$('#journal_create_form').trigger('reset');
				$('#journal_create_modal').modal('show');
			});
		}

		function cancel_journal_voucher_modal()
		{
			$(document).on('click','#contra_cancel_btn',function()
			{
				var page = window.location.pathname;
				$('#contra_create_form').trigger('reset');
				$('#contra_create_modal').modal('hide');
				window.location.href= page;
			});
		}

		function save_journal_voucher()
		{
			$(document).on('click','#journal_save_btn',function(e){
				e.preventDefault();
				var journal_debit_ledger = $('#journal_debit_ledger').val();
				var journal_credit_ledger = $('#journal_credit_ledger').val();
				var journal_date = $('#journal_date').val();
				var journal_ref = $('#journal_ref').val();
				var journal_narration = $('#journal_narration').val();
				var journal_amount = $('#journal_amount').val();
				var page = window.location.pathname;
				if (journal_debit_ledger !=="") 
				{
					if (journal_credit_ledger !=="") 
					{
						if (journal_credit_ledger !== journal_debit_ledger) 
						{
							if (journal_date !=="") 
							{
								if (journal_amount !=="") 
								{
									if (journal_narration !=="") 
									{
										$.ajax({
											url:'/layout/vouchers/journal_save.php',
											method:'POST',
											data:$('#journal_create_form').serialize(),
											success:function(data)
											{
												$('#journal_create_form').trigger('reset');
												window.location.href= page;
												//window.location.href="/layout/vouchers/journal_list.php";
											}
								        });		
										
									} 
									else 
									{
										alert('The Narration cannot be EMPTY!');
									}
								} 
								else 
								{
									alert('The Amount cannot be EMPTY!');
								}
							} 
							else 
							{
								alert('Please select the date for the Journal Voucher!');
							}
						} 
						else 
						{
							alert('The Credit Ledger cannot be the SAME and the Debit Ledger!');
						};
					} 
					else 
					{
						alert('The Credit Ledger cannot be EMPTY!');
					};
				} 
				else 
				{
					alert('The Debit Ledger cannot be EMPTY!');
				};
			});
		}

		function edit_journal_voucher()
		{
			$(document).on('click','#btn_edit_journal',function(){
				var journal_id = $(this).attr('data-id');
				$.ajax({
		            url:'/layout/vouchers/journal_edit.php',
		            method:'POST',
		            data:{journal_id:journal_id},
					datatype:'JSON',
		            success:function(data)
		            {
		             	var res = $.parseJSON(data);
		             	$('#journal_id').val(res[1]);
		             	$('#company_id').val(res[2]);
		             	$('#user_id').val(res[3]);
		             	$('#user_super_id').val(res[0]);
		             	$('#journal_debit_ledger').val(res[5]);
		             	$('#journal_credit_ledger').val(res[4]);
		             	$('#journal_ref').val(res[9]);
		             	$('#journal_date').val(res[6]);
		             	$('#journal_amount').val(res[7]);
		             	$('#journal_narration').val(res[8]);
		             	$('#journal_branch_id').val(res[10]);
		             	$('#journal_update_btn').show();
		             	$('#journal_save_btn').hide();
						$('#journal_create_modal').modal('show');
					}
	             });
			});
		}

		function update_journal_voucher()
		{
			$(document).on('click','#journal_update_btn',function(e){
				e.preventDefault();
				var journal_debit_ledger = $('#journal_debit_ledger').val();
				var journal_credit_ledger = $('#journal_credit_ledger').val();
				var journal_date = $('#journal_date').val();
				var journal_ref = $('#journal_ref').val();
				var journal_narration = $('#journal_narration').val();
				var journal_amount = $('#journal_amount').val();
				var page = window.location.pathname;
				if (journal_debit_ledger !=="") 
				{
					if (journal_credit_ledger !=="") 
					{
						if (journal_credit_ledger !== journal_debit_ledger) 
						{
							if (journal_date !=="") 
							{
								if (journal_amount !=="") 
								{
									if (journal_narration !=="") 
									{
										
										$.ajax({
											url:'/layout/vouchers/journal_update.php',
											method:'POST',
											data:$('#journal_create_form').serialize(),
											success:function(data)
											{
												$('#journal_create_form').trigger('reset');
												window.location.href= page;
												//window.location.href="/layout/vouchers/journal_list.php";
											}
								        });		
										
									} 
									else 
									{
										alert('The Narration cannot be EMPTY!');
									}
								} 
								else 
								{
									alert('The Amount cannot be EMPTY!');
								}
							} 
							else 
							{
								alert('Please select the date for the Journal Voucher!');
							}
						} 
						else 
						{
							alert('The Credit Ledger cannot be the SAME and the Debit Ledger!');
						};
					} 
					else 
					{
						alert('The Credit Ledger cannot be EMPTY!');
					};
				} 
				else 
				{
					alert('The Debit Ledger cannot be EMPTY!');
				};
			});
		}

		function search_journal_by_name()
		{
			$(document).on('keyup','#journal_search_name',function(e){
				e.preventDefault();
				var company_id = $('#session_company_id').val();
				var journal_search_name = $('#journal_search_name').val();

				$.ajax({
		             url:'/layout/vouchers/journal_search_by_name.php',
		             method:'POST',
		             data:{journal_search_name:journal_search_name,company_id:company_id},
		             success:function(data)
			             {
			             	$('#journal_list_card_body').html(data);
			             }
		        });
			});
		}

		function search_journal_by_date()
		{
			$(document).on('click','#journal_search_icon',function(e){
				e.preventDefault();
				var company_id = $('#session_company_id').val();
				var start_date = $('#journal_search_from').val();
				var end_date = $('#journal_search_to').val();

				$.ajax({
		             url:'/layout/vouchers/journal_search_by_date.php',
		             method:'POST',
		             data:{start_date:start_date,end_date:end_date,company_id:company_id},
		             success:function(data)
			             {
			             	$('#journal_list_card_body').html(data);
			             }
		        });
			});
		}

		function search_journal_by_branch()
		{
			$(document).on('click','#journal_search_by_branch',function(e)
			{
				e.preventDefault();
				var branch_id = $('#journal_search_by_branch').val();
				var start_date = $('#journal_search_from').val();
				var end_date = $('#journal_search_to').val();

				$.ajax({
		             url:'/layout/vouchers/journal_search_by_branch.php',
		             method:'POST',
		             data:{
						start_date:start_date,
						end_date:end_date,
						branch_id:branch_id
					},
		             success:function(data)
			             {
			             	$('#journal_list_card_body').html(data);
			             }
		        });
			});
		}

		function delete_journal()
		{
			$(document).on('click','#btn_delete_journal',function(){
				var journal_id = $(this).attr('data-id');
				var currentRow=$(this).closest("tr");
				var journal_date = currentRow.find("td:eq(1)").text();
				$('#journal_delete_question').text('Are you sure you want to delete journal of ' + journal_date + '?');
				$('#journal_delete_modal').modal('show');
				$(document).on('click','#journal_delete_yes',function()
				{
					$.ajax({  
						url:'/layout/vouchers/journal_delete.php',  
						type:'POST',  
						data:{journal_id:journal_id},
						success:function()
						{
							$('#journal_delete_modal').modal('hide');
							window.location.href="/layout/vouchers/journal_list.php";
						}  
		            });
			    });
				$(document).on('click','#journal_delete_no',function(){
					$('#journal_delete_modal').modal('hide');
				});
			});
		}
		
	//BOOKING
		function new_booking_modal()
		{
			$(document).on('click','#new_booking_icon',function()
			{
				$('#booking_create_form').trigger('reset');
				$('#booking_product').val(1);
				$('#booking_update_btn').hide();
				$('#booking_save_btn').show();
				$('#booking_create_modal').modal('show');
			});
		}

		function booking_set_supplied_by()
		{
			$(document).on('change','#booking_credit',function()
			{
				var ledger_id = $(this).val();
				$.ajax({
					url:'/layout/vouchers/booking_set_supplied_by.php',
					method:'POST',
					data:{ledger_id:ledger_id},
					success:function(data)
					{
						var res = $.parseJSON(data);
						if(res[0] != '')
						{
							$('#booking_phone_no').val(res[0]);
						};
					}
				});
			});
		}

		function booking_set_grams()
		{
			$(document).on('keyup','#booking_gram_both',function()
			{
				var booking_gram_both = $(this).val();
				$('#booking_gram').val(booking_gram_both);
			});
		}

		function cancel_booking_modal()
		{
			$(document).on('click','#booking_cancel_btn',function()
			{
				var page = window.location.pathname;
				$('#booking_create_form').trigger('reset');
				$('#booking_create_modal').modal('hide');
				window.location.href= page;
				//window.location.href="/layout/vouchers/booking_list.php";
			});
		}

		/*ADD COMMAS*/
		function addCommas(x) 
		{
		    var parts = x.toString().split(".");
		    parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
		    return parts.join(".");
		}

		//CALCULATIONS
			/*POUNDS*/
				function booking_set_pounds()
				{
					$(document).on('keyup','#booking_gram,#booking_water',function(){
						var booking_gram_both = $('#booking_gram_both').val();
						var booking_gram = $('#booking_gram').val();
						var booking_product = $('#booking_product').val();
						if (booking_gram > 0) 
						{
							if(booking_product == 1)
							{
								//var pounds = Number((booking_gram_both / 7.75).toFixed(2));
								var pounds = Math.trunc((booking_gram_both / 7.75)*100)/100;
								//var pounds = parseFloat(booking_gram_both / 7.75).toFixed(2);
							}
							else if(booking_product == 2)
							{
								//var pounds = Number((booking_gram_both / 0.80).toFixed(2));
								var pounds = Math.trunc((booking_gram_both / 0.8)*100)/100;
								//var pounds = parseFloat(booking_gram_both / 0.80).toFixed(2);
							};
					        $('#booking_pounds').val(pounds);
					        $('#booking_poundsD').val(pounds);
				    	};
					});
				}
			
			/*DENSITY*/
				function booking_set_density()
				{
					$(document).on('keyup','#booking_gram, #booking_water',function(){
						var booking_gram = $('#booking_gram').val();
						var booking_water = $('#booking_water').val();
						if (booking_gram > 0 && booking_water > 0) 
						{
				        	var density = Math.trunc((booking_gram / booking_water)*100)/100;
							//var density = parseFloat((booking_gram / booking_water)).toFixed(2);
				        	$('#booking_density').val(density);
				        	$('#booking_densityD').val(density);
						};
					});
				}
			
			/*CARAT*/
				function booking_set_carat()
				{
					$(document).on('keyup','#booking_gram, #booking_water',function(){
						var booking_product = $('#booking_product').val();
						var booking_gram = $('#booking_gram').val();
						var booking_water = $('#booking_water').val();
						if (booking_gram > 0 && booking_water > 0) 
						{
							if(booking_product == 1)
							{
								var density = Math.trunc((booking_gram / booking_water)*100)/100;
								var carat = Math.trunc((((density - 10.51) * 52.838)/density)*100)/100;

								$('#booking_karat').val(carat);
								$('#booking_karatD').val(carat);
							};
				    	};
					});
				}
			
			/*PURITY*/
				function booking_set_purity()
				{
					$(document).on('keyup','#booking_gram, #booking_water',function(){
						var booking_gram = $('#booking_gram').val();
						var booking_water = $('#booking_water').val();
						if (booking_gram > 0 && booking_water > 0) 
						{
				    		var density = Math.trunc(($('#booking_gram').val() / $('#booking_water').val())*100)/100;
							var carat = Math.trunc((((density - 10.51) * 52.838)/density)*100)/100;
							var purity =Math.trunc(((carat/24)*100)*100)/100;
				        	$('#booking_purity').val(purity);
				        	$('#booking_purityD').val(purity);
			        	};
					});
				}

			/*PRICE_PER_POUND*/
				function booking_price_per_pound()
				{
					$(document).on('keyup','#booking_price',function(){
						var booking_karat = $('#booking_karat').val();
						var booking_price = $('#booking_price').val();
						if (booking_karat > 0 && booking_price > 0) 
						{
							var price_per_pound = (booking_karat * booking_price)/23;
							var amount = parseFloat(price_per_pound).toFixed(2);
							var ppp = addCommas(amount);
					        $('#booking_ppp').val(amount);
					        $('#booking_pppD').val(ppp);
				    	};
					});
				}
			
			/*AMOUNT*/
				function booking_set_amount()
				{
					$(document).on('keyup','#booking_gram_both, #booking_gram, #booking_water, #booking_price',function(){
						var booking_gram_both = $('#booking_gram_both').val();
						var booking_gram = $('#booking_gram').val();
						var booking_water = $('#booking_water').val();
						var booking_price = $('#booking_price').val();
						var booking_product = $('#booking_product').val();
						if (booking_gram > 0 && booking_price > 0) 
						{
							var density = Math.trunc((booking_gram / booking_water)*100)/100;

							//var density = parseFloat((booking_gram / booking_water)).toFixed(2);
							var carat = Math.trunc((((density - 10.51) * 52.838)/density)*100)/100;

							if(booking_product == 1)
							{
								//var pounds = Number((booking_gram_both / 7.75).toFixed(2));
								var pounds = Math.trunc((booking_gram_both / 7.75)*100)/100;
								//var pounds = parseFloat(booking_gram_both / 7.75).toFixed(3);
								var amount1 = Math.trunc(((carat * $('#booking_price').val())/23)*pounds);
							}
							else if(booking_product == 2)
							{
								//var pounds = Number((booking_gram_both / 0.80).toFixed(2));
								//var pounds = parseFloat(booking_gram_both / 0.80).toFixed(2);
								var pounds = Math.trunc((booking_gram_both/0.80)*100)/100;
								var amount1 = Math.trunc($('#booking_price').val()*pounds);
							};
							var amount = addCommas(amount1);
			    			$('#booking_amount').val(amount1);
			    			$('#booking_amountD').val(amount);
			    		};
					});
				}

		function save_booking_invoice()
		{
			$(document).on('click','#booking_save_btn',function(e){
				e.preventDefault();
				var booking_credit = $('#booking_credit').val();
				var booking_product = $('#booking_product').val();
				var booking_gram = $('#booking_gram').val();
				var booking_gram_both = $('#booking_gram_both').val();
				var booking_water = $('#booking_water').val();
				var booking_date = $('#booking_date').val();
				var booking_price = $('#booking_price').val();
				var booking_karat = $('#booking_karat').val();
				var booking_phone = $('#booking_phone_no').val();
				var page = window.location.pathname;
				
				//if ((booking_product == 1 && booking_karat < 25) || (booking_product == 2 && booking_karat == '')) 
				//{
					if (booking_credit !=="") 
					{
						if (booking_product !=="") 
						{
							if (booking_gram_both !=="") 
							{
								if (booking_gram !=="") 
								{
									//if (booking_product == 1 && booking_water !="" || booking_product == 2 && booking_water =="") 
									//{
										if (booking_date !=="") 
										{
											//if (booking_price !=="") 
											//{
												if (booking_phone !=="") 
												{
													$.ajax({
														url:'/layout/vouchers/booking_save.php',
														method:'POST',
														data:$('#booking_create_form').serialize(),
														success:function(data)
														{
															var booking_id = data;
															$('#booking_create_form').trigger('reset');
															$('#booking_create_modal').modal('hide');
															window.location.href= page;
														}
													});
												} 
												else 
												{
													alert('Please type the Telephone number of the customer!');
												};
											/*} 
											else 
											{
												alert('Please type the PRICE for item!');
											};*/
										} 
										else 
										{
											alert('Please select the date of booking!');
										};
									/*} 
									else 
									{
										alert('Please type the WATER weight!');
									};*/
								} 
								else 
								{
									alert('Please type the TOP weight - GRAMS (BIG)!');
								};
							} 
							else 
							{
								alert('Please type the TOP weight - GRAMS (BOTH)!');
							};
						} 
						else 
						{
							alert('Please select the TYPE of Product booking!');
						};
					} 
					else 
					{
						alert('Please select the ledger from which the booking was made (Supplier or Cash Account)!');
					};
				/*} 
				else 
				{
					alert('Please the Karat cannot be more than 24!');
				};*/
			});
		}

		function edit_booking_invoice()
		{
			$(document).on('click','#btn_edit_booking',function(){
				var booking_id = $(this).attr('data-id');
				$.ajax({
					url:'/layout/vouchers/booking_edit.php',
					method:'POST',
					data:{booking_id:booking_id},
					datatype:'JSON',
					success:function(data)
					{
						var res = $.parseJSON(data);
						$('#booking_id').val(res[0]);
						$('#booking_date').val(res[1]);
						$('#booking_credit').val(res[3]);
						$('#booking_amount').val(res[4]);
						$('#booking_amountD').val(res[4]);
						$('#booking_phone_no').val(res[7]);
						$('#booking_narration').val(res[8]);
						$('#booking_product').val(res[9]);
						$('#booking_gram').val(res[10]);
						$('#booking_water').val(res[11]);
						$('#booking_price').val(res[12]);
						$('#booking_pounds').val(res[13]);
						$('#booking_poundsD').val(res[13]);
						$('#booking_density').val(res[14]);
						$('#booking_densityD').val(res[14]);
						$('#booking_karat').val(res[15]);
						$('#booking_karatD').val(res[15]);
						$('#booking_purity').val(res[16]);
						$('#booking_purityD').val(res[16]);
						$('#booking_ppp').val(res[17]);
						$('#booking_pppD').val(res[17]);
						$('#booking_pieces').val(res[18]);
						$('#booking_location').val(res[19]);
						$('#booking_branch_id').val(res[22]);
						$('#booking_gram_both').val(res[23]);
						$('#booking_update_btn').show();
						$('#booking_save_btn').hide();
						$('#booking_create_modal').modal('show');
					}
				});
			});
		}

		function update_booking_invoice()
		{
			$(document).on('click','#booking_update_btn',function(e){
				e.preventDefault();
				var booking_credit = $('#booking_credit').val();
				var booking_product = $('#booking_product').val();
				var booking_gram = $('#booking_gram').val();
				var booking_gram_both = $('#booking_gram_both').val();
				var booking_water = $('#booking_water').val();
				var booking_date = $('#booking_date').val();
				var booking_price = $('#booking_price').val();
				var booking_karat = $('#booking_karat').val();
				
				if ((booking_product == 1 && booking_karat < 25) || (booking_product == 2 && booking_karat == '')) 
				{
					if (booking_credit !=="") 
					{
						if (booking_product !=="") 
						{
							if (booking_gram_both !=="") 
							{
								if (booking_gram !=="") 
								{
									if (booking_product == 1 && booking_water !="" || booking_product == 2 && booking_water =="") 
									{
										if (booking_date !=="") 
										{
											if (booking_price !=="") 
											{
												$.ajax({
													url:'/layout/vouchers/booking_update.php',
													method:'POST',
													data:$('#booking_create_form').serialize(),
													success:function()
													{
														$('#booking_create_form').trigger('reset');
														$('#booking_create_modal').modal('hide');
														window.location.href="/layout/vouchers/booking_list.php";
													
													}
												});
											} 
											else 
											{
												alert('Please type the PRICE for item!');
											}
										} 
										else 
										{
											alert('Please select the date of booking!');
										};
									} 
									else 
									{
										alert('Please type the WATER weight!');
									};
								} 
								else 
								{
									alert('Please type the TOP weight - GRAMS(BIG)!');
								};
							} 
							else 
							{
								alert('Please type the TOP weight - GRAMS (BOTH)!');
							};
						} 
						else 
						{
							alert('Please select the TYPE of Product booking!');
						};
					} 
					else 
					{
						alert('Please select the ledger from which the booking was made (Supplier or Cash Account)!');
					};
				} 
				else 
				{
					alert('Please the Karat cannot be more than 24!');
				};
			});
		}

		function delete_booking_invoice()
		{
			$(document).on('click','#btn_delete_booking',function(){
				var booking_id = $(this).attr('data-id');
				var currentRow=$(this).closest("tr");
				var booking_date = currentRow.find("td:eq(0)").text();
				var Supplier = currentRow.find("td:eq(3)").text();
				$('#booking_invoice_delete_question').text('Are you sure you want to delete Booking Voucher of ' + booking_date + ' for ' + Supplier + '?');
				$('#booking_invoice_delete_modal').modal('show');
				$(document).on('click','#booking_delete_yes',function(){
					$.ajax({  
		                 url:'/layout/vouchers/booking_delete.php',  
		                 type:'POST',  
		                 data:{booking_id:booking_id},
		                 success:function(){
		                 	$('#booking_invoice_delete_modal').modal('hide');
		                 	window.location.href="/layout/vouchers/booking_list.php";
		                 }  
		            });
			      });
				$(document).on('click','#booking_delete_no',function(){
					$('#booking_invoice_delete_modal').modal('hide');
				});
			});
		}

		function search_booking_by_name()
		{
			$(document).on('keyup','#booking_search_name',function(e)
			{
				e.preventDefault();
				var booking_search_name = $('#booking_search_name').val();

				$.ajax({
		             url:'/layout/vouchers/booking_search_by_name.php',
		             method:'POST',
		             data:{booking_search_name:booking_search_name},
		             success:function(data)
			             {
			             	$('#booking_list_card_body').html(data);
			             }
		        });
			});
		}

		function search_booking_by_date()
		{
			$(document).on('click','#booking_search_icon',function(e){
				e.preventDefault();
				var start_date = $('#booking_search_from').val();
				var end_date = $('#booking_search_to').val();

				$.ajax({
		             url:'/layout/vouchers/booking_search_by_date.php',
		             method:'POST',
		             data:{start_date:start_date,end_date:end_date},
		             success:function(data)
			             {
			             	$('#booking_list_card_body').html(data);
			             }
		        });
			});
		}

	//PURCHASES
		function new_purchase_modal()
		{
			$(document).on('click','#new_purchase_icon, #btn_purchase_booking',function()
			{
				var id = $(this).attr('id');
				$('#purchases_create_form').trigger('reset');
				var company_id = $('#session_company_id').val();
				var user_id = $('#session_user_id').val();
				var user_super_id = $('#session_user_super_id').val();
				$('#purch_product').val(1);
				$('#purch_debitD').val(3);
				$('#purch_debit').val(3);
				$('#purch_company_id').val(company_id);
				$('#purch_user_id').val(user_id);
				$('#purch_user_super_id').val(user_super_id);
				$('#purch_method').val('Water_Density');
				$('#purch_purity_discount').val(0.7);
				$('#purch_purity_discountD').val(0.7);
				if(id =='btn_purchase_booking')
				{
					var booking_id = $(this).attr('data-booking_id');
					var ledger_id = $(this).attr('data-ledger_id');
					var supplier = $(this).attr('data-supplier');
					var phone = $(this).attr('data-phone');
					var location = $(this).attr('data-location');
					var weight_both = $(this).attr('data-weight_both');
					var water = $(this).attr('data-water');
					var price = $(this).attr('data-price');
					var amount = $(this).attr('data-amount');
					$('#purch_booking_id').val(booking_id);
					$('#purch_credit').val(ledger_id);
					$('#purch_supplied_by').val(supplier);
					$('#phone_no').val(phone);
					$('#purch_location').val(location);
					$('#purch_gram_both').val(weight_both);
					$('#purch_gram').val(weight_both);
					$('#purch_water').val(water);
					$('#purch_price').val(price);
					$('#purch_amount').val(amount);
					$('purch_amountD').val(amount);
					//POUNDS
						var pounds = Number((purch_gram_both / 7.75).toFixed(2));
						//var pounds = Math.trunc((weight_both / 7.75)*100)/100;
					    $('#purch_pounds').val(pounds);
					    $('#purch_poundsD').val(pounds);
					//DENSITY
						var density = Math.trunc((weight_both / water)*100)/100;
						$('#purch_density').val(density);
						$('#purch_densityD').val(density);
					//KARAT
						var carat = Math.trunc((((density - 10.51) * 52.838)/density)*100)/100;
						$('#purch_karat').val(carat);
						$('#purch_karatD').val(carat);
					//PURITY
						var purity =Math.trunc(((carat/24)*100)*100)/100;
						$('#purch_purity').val(purity);
						$('#purch_purityD').val(purity);
					//PRICE_PER_POUNDS
						var price_per_pound = (carat * price)/23;
						var amount = parseFloat(price_per_pound).toFixed(2);
						var ppp = addCommas(amount);
						$('#purch_ppp').val(amount);
						$('#purch_pppD').val(ppp);
					//AMOUNT
						var amount1 = Math.trunc(((carat * price)/23)*pounds);
						var amount = addCommas(amount1);
			    		$('#purch_amount').val(amount1);
			    		$('#purch_amountD').val(amount);
				}
				$('#purch_update_btn').hide();
				$('#purch_save_btn').show();
				$('#purchase_create_modal').modal('show');
			});
		}

		function purchase_set_supplied_by()
		{
			$(document).on('change','#purch_credit',function()
			{
				var ledger_id = $(this).val();
				var telephone = $('#phone_no').val();
				$.ajax({
					url:'/layout/vouchers/purchases_set_supplied_by.php',
					method:'POST',
					data:{ledger_id:ledger_id},
					success:function(data)
					{
						var res = $.parseJSON(data);
						$('#purch_supplied_by').val(res[0]);
						if(res[1] != '')
						{
							$('#phone_no').val(res[1]);
						};
					}
				});
			});
		}

		function purchase_set_grams()
		{
			$(document).on('keyup','#purch_gram_both',function()
			{
				var purch_gram_both = $(this).val();
				$('#purch_gram').val(purch_gram_both);
			});
		}

		function cancel_purchase_modal()
		{
			$(document).on('click','#purch_cancel_btn',function()
			{
				var page = window.location.pathname;
				$('#purchases_create_form').trigger('reset');
				$('#purchase_create_modal').modal('hide');
				window.location.href= page;
				//window.location.href="/layout/vouchers/purchases_list.php";
			});
		}

		/*ADD COMMAS*/
		function addCommas(x) 
		{
		    var parts = x.toString().split(".");
		    parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
		    return parts.join(".");
		}

		//CALCULATIONS
			/*METHOD*/
				function purchase_method()
				{
					$(document).on('change','#purch_method',function()
					{
						var purch_method = $('#purch_method').val();
						var purch_product = $('#purch_product').val();
						var purch_gram = $('#purch_gram').val();
						var purch_water = $('#purch_water').val();
						var purch_price = $('#purch_price').val();
						if(purch_method == 'Water_Density')
						{
							var purity_discount = 0.7;
						}
						else if(purch_method == 'XRF')
						{
							var purity_discount = 0.1;
						};

						var density = Number((purch_gram / purch_water).toFixed(2));
						var carat = Number((((density - 10.51) * 52.838)/density).toFixed(2));
						var discounted_carat = Number(carat - (24 * (purity_discount/100))).toFixed(2);

						if(purch_product == 1)
						{
							var pounds = Math.trunc((purch_gram / 7.75)*100)/100;
							var discounted_amount = Math.trunc(((discounted_carat * $('#purch_price').val())/23)*pounds);
						}
						else if(purch_product == 2)
						{
							var pounds = Math.trunc((purch_gram / 0.8)*100)/100;
							var discounted_amount = Math.trunc($('#purch_price').val()*pounds);
						};
						var discounted_amount1 = addCommas(discounted_amount);
						$('#purch_discounted_amount').val(discounted_amount);
						$('#purch_discounted_amountD').val(discounted_amount1);

						var purity = Number((((carat/24)*100)*100)/100).toFixed(2);
						var discounted_purity = Number(purity - purity_discount).toFixed(2);
						$('#purch_discounted_purity').val(discounted_purity);
						$('#purch_discounted_purityD').val(discounted_purity);

						$('#purch_discounted_karat').val(discounted_carat);
						$('#purch_discounted_karatD').val(discounted_carat);

						$('#purch_purity_discount').val(purity_discount);
						$('#purch_purity_discountD').val(purity_discount);

						var discounted_price_per_pound = Number((discounted_carat * purch_price)/23).toFixed(2);
						var dppp = addCommas(discounted_price_per_pound);
					    $('#purch_discounted_ppp').val(discounted_price_per_pound);
					    $('#purch_discounted_pppD').val(dppp);
					});
				}
			
			/*POUNDS*/
				function purchase_set_pounds()
				{
					$(document).on('keyup','#purch_gram,#purch_water',function()
					{
						var purch_gram_both = $('#purch_gram_both').val();
						var purch_gram = $('#purch_gram').val();
						var purch_product = $('#purch_product').val();
						if (purch_gram > 0) 
						{
							if(purch_product == 1)
							{
								var pounds = Math.trunc((purch_gram_both / 7.75)*100)/100;
							}
							else if(purch_product == 2)
							{
								var pounds = Math.trunc((purch_gram_both / 0.8)*100)/100;
							};
					        $('#purch_pounds').val(pounds);
					        $('#purch_poundsD').val(pounds);
				    	};
					});
				}
			
			/*DENSITY*/
				function purchase_set_density()
				{
					$(document).on('keyup','#purch_gram, #purch_water',function()
					{
						var purch_gram = $('#purch_gram').val();
						var purch_water = $('#purch_water').val();
						if (purch_gram > 0 && purch_water > 0) 
						{
							var density = Number((purch_gram / purch_water).toFixed(2));
				        	$('#purch_density').val(density);
				        	$('#purch_densityD').val(density);
						};
					});
				}
			
			/*CARAT*/
				function purchase_set_carat()
				{
					$(document).on('keyup','#purch_gram, #purch_water',function()
					{
						var purch_product = $('#purch_product').val();
						var purch_gram = $('#purch_gram').val();
						var purch_water = $('#purch_water').val();
						var purch_purity_discount = $('#purch_purity_discount').val();
						if (purch_gram > 0 && purch_water > 0) 
						{
							if(purch_product == 1)
							{
								var density = Number((purch_gram / purch_water));
								var carat = Number((((density - 10.51) * 52.838)/density).toFixed(2));
								$('#purch_karat').val(carat);
								$('#purch_karatD').val(carat);
								var discounted_carat = Number(carat - (24 * (purch_purity_discount/100))).toFixed(2);
								$('#purch_discounted_karat').val(discounted_carat);
								$('#purch_discounted_karatD').val(discounted_carat);
							};
				    	};
					});
				}
			
			/*PURITY*/
				function purchase_set_purity()
				{
					$(document).on('keyup','#purch_gram, #purch_water',function()
					{
						var purch_gram = $('#purch_gram').val();
						var purch_water = $('#purch_water').val();
						var purch_purity_discount = $('#purch_purity_discount').val();
						if (purch_gram > 0 && purch_water > 0) 
						{
							var density = Number((purch_gram / purch_water));
							var carat = Number((((density - 10.51) * 52.838)/density).toFixed(2));
							var purity = Number((((carat/24)*100)*100)/100).toFixed(2);
				    		$('#purch_purity').val(purity);
				        	$('#purch_purityD').val(purity);

							var discounted_purity = purity - purch_purity_discount;
							$('#purch_discounted_purity').val(discounted_purity);
							$('#purch_discounted_purityD').val(discounted_purity);
			        	};
					});
				}

			/*PRICE_PER_POUND*/
				function purchase_price_per_pound()
				{
					$(document).on('keyup','#purch_price',function(){
						var purch_karat = $('#purch_karat').val();
						var purch_price = $('#purch_price').val();
						var purch_purity_discount = $('#purch_purity_discount').val();
						if (purch_karat > 0 && purch_price > 0) 
						{
							var price_per_pound = (purch_karat * purch_price)/23;
							var amount = parseFloat(price_per_pound).toFixed(2);
							var discounted_carat = Number(purch_karat - (24 * (purch_purity_discount/100))).toFixed(2);
							var discounted_price_per_pound = Number((discounted_carat * purch_price)/23).toFixed(2);
							var dppp = addCommas(discounted_price_per_pound);
							var ppp = addCommas(amount);
					        $('#purch_ppp').val(amount);
					        $('#purch_pppD').val(ppp);
					        $('#purch_discounted_ppp').val(discounted_price_per_pound);
					        $('#purch_discounted_pppD').val(dppp);
				    	};
					});
				}
			
			/*AMOUNT*/
				function purchase_set_amount()
				{
					$(document).on('keyup','#purch_gram_both, #purch_gram, #purch_water, #purch_price',function(){
						var purch_gram_both = $('#purch_gram_both').val();
						var purch_gram = $('#purch_gram').val();
						var purch_water = $('#purch_water').val();
						var purch_price = $('#purch_price').val();
						var purch_product = $('#purch_product').val();
						var purch_purity_discount = $('#purch_purity_discount').val();
						if (purch_gram > 0 && purch_price > 0) 
						{
							var density = Number(((purch_gram / purch_water)*100)/100);
							var carat = Number((((density - 10.51) * 52.838)/density).toFixed(2));
							var discounted_carat = Number(carat - (24 * (purch_purity_discount/100))).toFixed(2);

							if(purch_product == 1)
							{
								var pounds = Math.trunc((purch_gram_both / 7.75)*100)/100;
								var amount1 = Math.trunc(((carat * $('#purch_price').val())/23)*pounds);
								var discounted_amount = Math.trunc(((discounted_carat * purch_price)/23) * pounds);
							}
							else if(purch_product == 2)
							{
								var pounds = Math.trunc((purch_gram_both / 0.8)*100)/100;
								var amount1 = Math.trunc($('#purch_price').val()*pounds);
								var discounted_amount = Math.trunc(purch_price * pounds);
							};
							

							var discounted_amount1 = addCommas(discounted_amount);
							$('#purch_discounted_amount').val(discounted_amount);
							$('#purch_discounted_amountD').val(discounted_amount1);

							var amount = addCommas(amount1);
			    			$('#purch_amount').val(amount1);
			    			$('#purch_amountD').val(amount);
			    		};
					});
				}

		function save_purchase_invoice()
		{
			$(document).on('click','#purch_save_btn',function(e){
				e.preventDefault();
				var company_sms = $('#session_company_sms').val();
				var company_sms_bal = $('#session_company_sms_bal').val();
				var purch_debit = $('#purch_debit').val();
				var purch_credit = $('#purch_credit').val();
				var purch_product = $('#purch_product').val();
				var purch_gram = $('#purch_gram').val();
				var purch_gram_both = $('#purch_gram_both').val();
				var purch_water = $('#purch_water').val();
				var purch_date = $('#purch_date').val();
				var purch_price = $('#purch_price').val();
				var purch_karat = $('#purch_karat').val();
				var purch_supplied_by = $('#purch_supplied_by').val();
				var purch_phone = $('#phone_no').val();
				var page = window.location.pathname;
				
				if ((purch_product == 1 && purch_karat < 25) || (purch_product == 2 && purch_karat == '')) 
				{
					if (purch_debit !=="") 
					{
						if (purch_credit !=="") 
						{
							if (purch_product !=="") 
							{
								if (purch_gram_both !=="") 
								{
									if (purch_gram !=="") 
									{
										if (purch_product == 1 && purch_water !="" || purch_product == 2 && purch_water =="") 
										{
											if (purch_date !=="") 
											{
												if (purch_price !=="") 
												{
													if (purch_phone !=="") 
													{
														if (purch_supplied_by !=="") 
														{
															$.ajax({
																url:'/layout/vouchers/purchases_save.php',
																method:'POST',
																data:$('#purchases_create_form').serialize(),
																success:function(data)
																{
																	var purchase_id = data;
																	$('#purchases_create_form').trigger('reset');
																	$('#purchase_create_modal').modal('hide');
																	// if(company_sms == 'Yes')
																	// {
																	// 	if(company_sms_bal > 0)
																	// 	{
																	// 		$('#purchase_send_sms_question').text('Are you sure you want to send sms purchase invoice of ' + purch_date + ' for ' + purch_supplied_by + '?');
																	// 		$('#purchase_send_sms_modal').modal('show');
																	// 		$(document).on('click','#purchase_send_sms_yes',function(){
																	// 			$.ajax({  
																	// 				url:'/layout/vouchers/purchases_send_sms.php',  
																	// 				type:'POST',  
																	// 				data:{purchase_id:purchase_id},
																	// 				success:function(data)
																	// 				{
																	// 					$('#purchase_send_sms_modal').modal('hide');
																	// 					var phone_no = '233' + purch_phone.substring(1, 10);
																	// 					var message = data;
																	// 					window.open('https://sms.isendgh.com/sms/api?action=send-sms&api_key=dGNCT2V3ZEtwa0p4PUp2Y2F3c3k=&to='+phone_no+'&from=Goldchest&sms='+message,'_blank');
																	// 					window.location.href="/layout/vouchers/purchases_list.php";
																	// 					window.open('/layout/vouchers/purchase_pdf.php', '_blank');
																	// 				}  
																	// 			});
																	// 		});
																	// 		$(document).on('click','#purchase_send_sms_no',function(){
																	// 			$('#purchase_send_sms_modal').modal('hide');
																	// 			window.location.href="/layout/vouchers/purchases_list.php";
																	// 			window.open('/layout/vouchers/purchase_pdf.php', '_blank');
																	// 		});
																	// 	}
																	// 	else
																	// 	{
																	// 		alert('Please you do not have sufficient balance in your account to send SMS. Please recharge.');
																	// 		window.location.href="/layout/vouchers/purchases_list.php";
																	// 		window.open('/layout/vouchers/purchase_pdf.php', '_blank');
																	// 	};
																	// }
																	// else
																	// {
																			//window.location.href="/layout/vouchers/purchases_list.php";
																			window.location.href= page;
																			window.open('/layout/vouchers/purchase_pdf.php', '_blank');
																	// };
																}
															});
														} 
														else 
														{
															alert('Please type the Name of the person who brought the goods!');
														};
													} 
													else 
													{
														alert('Please type the Telephone number of the customer!');
													};
												} 
												else 
												{
													alert('Please type the PRICE for item!');
												};
											} 
											else 
											{
												alert('Please select the date of purchase!');
											};
										} 
										else 
										{
											alert('Please type the WATER weight!');
										};
									} 
									else 
									{
										alert('Please type the TOP weight - GRAMS (BIG)!');
									};
								} 
								else 
								{
									alert('Please type the TOP weight - GRAMS (BOTH)!');
								};
							} 
							else 
							{
								alert('Please select the TYPE of Product purchase!');
							};
						} 
						else 
						{
							alert('Please select the ledger from which the purchase was made (Supplier or Cash Account)!');
						};
					} 
					else 
					{
						alert('Please select the ledger into which the purchase was made (Purchases Account)!');
					};
				} 
				else 
				{
					alert('Please the Karat cannot be more than 24!');
				};
			});
		}

		function edit_purchase_invoice()
		{
			$(document).on('click','#btn_edit_purchase',function(){
				var purchase_id = $(this).attr('data-id');
				var company_id = $('#session_company_id').val();
				var user_id = $('#session_user_id').val();
				var user_super_id = $('#session_user_super_id').val();
				$.ajax({
					url:'/layout/vouchers/purchases_edit.php',
					method:'POST',
					data:{purchase_id:purchase_id},
					datatype:'JSON',
					success:function(data)
					{
						var res = $.parseJSON(data);
						$('#purchase_id').val(res[0]);
						$('#purch_date').val(res[1]);
						$('#purch_debit').val(res[2]);
						$('#purch_debitD').val(res[2]);
						$('#purch_credit').val(res[3]);
						$('#purch_amount').val(res[4]);
						$('#purch_amountD').val(res[4]);
						$('#company_id').val(res[5]);
						$('#purch_supplied_by').val(res[6]);
						$('#phone_no').val(res[7]);
						$('#purch_narration').val(res[8]);
						$('#purch_product').val(res[9]);
						$('#purch_gram').val(res[10]);
						$('#purch_water').val(res[11]);
						$('#purch_price').val(res[12]);
						$('#purch_pounds').val(res[13]);
						$('#purch_poundsD').val(res[13]);
						$('#purch_density').val(res[14]);
						$('#purch_densityD').val(res[14]);
						$('#purch_karat').val(res[15]);
						$('#purch_karatD').val(res[15]);
						$('#purch_purity').val(res[16]);
						$('#purch_purityD').val(res[16]);
						$('#purch_ppp').val(res[17]);
						$('#purch_pppD').val(res[17]);
						$('#purch_pieces').val(res[18]);
						$('#purch_location').val(res[19]);
						$('#purch_user_id').val(res[20]);
						$('#purch_site').val(res[21]);
						$('#purch_branch_id').val(res[22]);
						$('#purch_gram_both').val(res[23]);
						$('#purch_method').val(res[24]);
						$('#purch_purity_discount').val(res[25]);
						$('#purch_purity_discountD').val(res[25]);
						$('#purch_discounted_purity').val(res[26]);
						$('#purch_discounted_purityD').val(res[26]);
						$('#purch_discounted_karat').val(res[27]);
						$('#purch_discounted_karatD').val(res[27]);
						$('#purch_discounted_ppp').val(res[28]);
						$('#purch_discounted_pppD').val(res[28]);
						$('#purch_discounted_amount').val(res[29]);
						$('#purch_discounted_amountD').val(res[29]);
						$.ajax({
							url:'/layout/vouchers/purchases_items_edit.php',
							method:'POST',
							data:{purchase_id:purchase_id},
							success:function(data)
							{
								$('#purchase_items_list').html(data);
							}
						});
						$('#purch_company_id').val(company_id);
						$('#purch_user_id').val(user_id);
						$('#purch_update_btn').show();
						$('#purch_save_btn').hide();
						$('#purchase_create_modal').modal('show');
					}
				});
			});
		}

		function update_purchase_invoice()
		{
			$(document).on('click','#purch_update_btn',function(e){
				e.preventDefault();
				var purch_debit = $('#purch_debit').val();
				var purch_credit = $('#purch_credit').val();
				var purch_product = $('#purch_product').val();
				var purch_gram = $('#purch_gram').val();
				var purch_gram_both = $('#purch_gram_both').val();
				var purch_water = $('#purch_water').val();
				var purch_date = $('#purch_date').val();
				var purch_price = $('#purch_price').val();
				var purch_karat = $('#purch_karat').val();
				var purch_supplied_by = $('#purch_supplied_by').val();
				
				if ((purch_product == 1 && purch_karat < 25) || (purch_product == 2 && purch_karat == '')) 
				{
					if (purch_debit !=="") 
					{
						if (purch_credit !=="") 
						{
							if (purch_product !=="") 
							{
								if (purch_gram_both !=="") 
								{
									if (purch_gram !=="") 
									{
										if (purch_product == 1 && purch_water !="" || purch_product == 2 && purch_water =="") 
										{
											if (purch_date !=="") 
											{
												if (purch_price !=="") 
												{
													if (purch_supplied_by !=="") 
													{
														$.ajax({
															url:'/layout/vouchers/purchases_update.php',
															method:'POST',
															data:$('#purchases_create_form').serialize(),
															success:function(data)
																{
																	$('#purchases_create_form').trigger('reset');
																	$('#purchase_create_modal').modal('hide');
																	window.location.href="/layout/vouchers/purchases_list.php";
																	window.open('/layout/vouchers/purchase_pdf.php', '_blank');
																
																}
														});

													} 
													else 
													{
														alert('Please type the Name of the person who brought the goods!');
													}
												} 
												else 
												{
													alert('Please type the PRICE for item!');
												}
											} 
											else 
											{
												alert('Please select the date of purchase!');
											};
										} 
										else 
										{
											alert('Please type the WATER weight!');
										};
									} 
									else 
									{
										alert('Please type the TOP weight - GRAMS(BIG)!');
									};
								} 
								else 
								{
									alert('Please type the TOP weight - GRAMS (BOTH)!');
								};
							} 
							else 
							{
								alert('Please select the TYPE of Product purchase!');
							};
						} 
						else 
						{
							alert('Please select the ledger from which the purchase was made (Supplier or Cash Account)!');
						};
					} 
					else 
					{
						alert('Please select the ledger into which the purchase was made (Purchases Account)!');
					};
				} 
				else 
				{
					alert('Please the Karat cannot be more than 24!');
				};
			});
		}

		function delete_purchase_invoice()
		{
			$(document).on('click','#btn_delete_purchase',function(){
				var purchase_id = $(this).attr('data-id');
				var currentRow=$(this).closest("tr");
				var purchase_date = currentRow.find("td:eq(0)").text();
				var Supplier = currentRow.find("td:eq(3)").text();
				$('#purchase_invoice_delete_question').text('Are you sure you want to delete purchase invoice of ' + purchase_date + ' for ' + Supplier + '?');
				$('#purchase_invoice_delete_modal').modal('show');
				$(document).on('click','#purchase_delete_yes',function(){
					$.ajax({  
		                 url:'/layout/vouchers/purchases_delete.php',  
		                 type:'POST',  
		                 data:{purchase_id:purchase_id},
		                 success:function(){
		                 	$('#purchase_invoice_delete_modal').modal('hide');
		                 	window.location.href="/layout/vouchers/purchases_list.php";
		                 }  
		            });
			      });
				$(document).on('click','#purchase_delete_no',function(){
					$('#purchase_invoice_delete_modal').modal('hide');
				});
			});
		}

		function search_purchase_by_name()
		{
			$(document).on('keyup','#purchase_search_name',function(e){
				e.preventDefault();
				var company_id = $('#session_company_id').val();
				var purchase_search_name = $('#purchase_search_name').val();

				$.ajax({
		             url:'/layout/vouchers/purchases_search_by_name.php',
		             method:'POST',
		             data:{purchase_search_name:purchase_search_name,company_id:company_id},
		             success:function(data)
			             {
			             	$('#purchase_list_card_body').html(data);
			             }
		        });
			});
		}

		function search_purchase_by_date()
		{
			$(document).on('click','#purchase_search_icon',function(e){
				e.preventDefault();
				var company_id = $('#session_company_id').val();
				var start_date = $('#purchase_search_from').val();
				var end_date = $('#purchase_search_to').val();

				$.ajax({
		             url:'/layout/vouchers/purchases_search_by_date.php',
		             method:'POST',
		             data:{start_date:start_date,end_date:end_date,company_id:company_id},
		             success:function(data)
			             {
			             	$('#purchase_list_card_body').html(data);
			             }
		        });
			});
		}

		function reprint_purchase_invoice()
		{
			$(document).on('click','#btn_reprint_purchase',function(e){
				var purchase_id = $(this).attr('data-id');
				var ledger_credit_id = $(this).attr('data-id1');
				var company_id = $('#session_company_id').val();
				var user_super_id = $('#session_user_super_id').val();
				var user_id = $('#session_user_id').val();

				$.ajax({
		             url:'/layout/vouchers/purchases_reprint.php',
		             method:'POST',
		             data:{
		             	purchase_id:purchase_id,
		             	company_id:company_id,
		             	user_super_id:user_super_id,
		             	user_id:user_id,
		             	ledger_credit_id:ledger_credit_id
		             },
		             success:function(data)
		             {
		             	//window.open('/layout/vouchers/purchases_display.php', '_blank');
		             	window.open('/layout/vouchers/purchase_pdf.php', '_blank');
		             }
		        });
			});
		}
		
		function send_sms_purchase_invoice()
		{
			$(document).on('click','#btn_send_sms_purchase',function(e){
				var purchase_id = $(this).attr('data-id');

				$.ajax({
		             url:'/layout/vouchers/purchases_send_sms.php',
		             method:'POST',
		             data:{
		             	purchase_id:purchase_id
		             },
		             success:function(data)
		             {
		             	//window.open('/layout/vouchers/purchase_pdf.php', '_blank');
		             }
		        });
			});
		}

	//BULK PURCHASES
		function new_bulk_purchase_modal()
		{
			$(document).on('click','#new_bulk_purchase_icon',function()
			{
				$('#bulk_purchases_create_form').trigger('reset');
				$('#bulk_purch_product').val(1);
				$('#bulk_purch_debitD').val(3);
				$('#bulk_purch_debit').val(3);
				$('#bulk_purch_update_btn').hide();
				$('#bulk_purch_save_btn').show();
				$('#bulk_purchase_create_modal').modal('show');
			});
		}

		function add_bulk_purchase_item_row()
		{
			$(document).on('click','#bulk_purch_enter_btn',function(){ 
				var i = $('#bulk_purchases_items_table tr:last').attr('id');
				var bulk_purch_product = $('#bulk_purch_product').val();
				var bulk_purch_gram_both = $('#bulk_purch_gram_both').val();
				var bulk_purch_gram = $('#bulk_purch_gram').val();
				var bulk_purch_water = $('#bulk_purch_water').val();
				var bulk_purch_price = $('#bulk_purch_price').val();
				var bulk_purch_amount = $('#bulk_purch_amount').val();
				var bulk_purch_pounds = $('#bulk_purch_pounds').val();
				var bulk_purch_density = $('#bulk_purch_density').val();
				var bulk_purch_karat = $('#bulk_purch_karat').val();
				var bulk_purch_purity = $('#bulk_purch_purity').val();
				var bulk_purch_ppp = $('#bulk_purch_ppp').val();
				var bulk_purch_pieces = $('#bulk_purch_pieces').val();
				var bulk_purch_phone_no = $('#bulk_purch_phone_no').val();
				var bulk_purch_date = $('#bulk_purch_date').val();
				var bulk_purch_debit = $('#bulk_purch_debit').val();
				var bulk_purch_credit = $('#bulk_purch_credit').val();
				var bulk_purch_supplied_by = $('#bulk_purch_supplied_by').val();
				i++;
				
				if ((bulk_purch_product == 1 && bulk_purch_karat < 25) || (bulk_purch_product == 2 && bulk_purch_karat == '')) 
				{
					if (bulk_purch_debit !="") 
					{
						if (bulk_purch_credit !="") 
						{
							if (bulk_purch_product !="") 
							{
								if (bulk_purch_gram_both !="") 
								{
									if (bulk_purch_gram !="") 
									{
										if (bulk_purch_product == 1 && bulk_purch_water !="" || bulk_purch_product == 2 && bulk_purch_water =="") 
										{
											if (bulk_purch_date !="") 
											{
												if (bulk_purch_price !="") 
												{
													if (bulk_purch_phone_no !="") 
													{
														if (bulk_purch_supplied_by !="") 
														{
															$.ajax({
																url:'/layout/vouchers/bulk_purchases_invoice_item_list.php',
																method:'POST',
																data:{
																	i:i,
																	bulk_purch_product:bulk_purch_product,
																	bulk_purch_gram_both:bulk_purch_gram_both,
																	bulk_purch_gram:bulk_purch_gram,
																	bulk_purch_water:bulk_purch_water,
																	bulk_purch_price:bulk_purch_price,
																	bulk_purch_amount:bulk_purch_amount,
																	bulk_purch_pounds:bulk_purch_pounds,
																	bulk_purch_density:bulk_purch_density,
																	bulk_purch_karat:bulk_purch_karat,
																	bulk_purch_purity:bulk_purch_purity,
																	bulk_purch_ppp:bulk_purch_ppp,
																	bulk_purch_pieces:bulk_purch_pieces
																},
																success:function(data)
																{
																	$('#bulk_purchases_items_table').append(data);
																	$('#bulk_purch_gram_both').val('');
																	$('#bulk_purch_gram').val('');
																	$('#bulk_purch_water').val('');
																	$('#bulk_purch_price').val('');
																	$('#bulk_purch_amount').val('');
																	$('#bulk_purch_amountD').val('');
																	$('#bulk_purch_pounds').val('');
																	$('#bulk_purch_poundsD').val('');
																	$('#bulk_purch_density').val('');
																	$('#bulk_purch_densityD').val('');
																	$('#bulk_purch_karat').val('');
																	$('#bulk_purch_karatD').val('');
																	$('#bulk_purch_purity').val('');
																	$('#bulk_purch_purityD').val('');
																	$('#bulk_purch_ppp').val('');
																	$('#bulk_purch_pppD').val('');
																	$('#bulk_purch_pieces').val('');
																	var grams = 0;
																	var water = 0;
																	var pounds = 0;
																	var amount = 0;
																	$(".p_grams").each(function(){grams += +$(this).val();});
																	$("#p_grams_total").val(grams);
																	$(".p_water").each(function(){water += +$(this).val();});
																	$("#p_water_total").val(water);
																	$(".p_pounds").each(function(){pounds += +$(this).val();});
																	$("#p_pounds_total").val(pounds);
																	$(".p_amount").each(function(){amount += +$(this).val();});
																	$("#p_amount_total").val(amount);
																}
															});
														} 
														else 
														{
															alert('Please type the Name of the person who brought the goods!');
														};
													} 
													else 
													{
														alert('Please type the Telephone number of the customer!');
													};
												} 
												else 
												{
													alert('Please type the PRICE for item!');
												};
											} 
											else 
											{
												alert('Please select the date of purchase!');
											};
										} 
										else 
										{
											alert('Please type the WATER weight!');
										};
									} 
									else 
									{
										alert('Please type the TOP weight - GRAMS (BIG)!');
									};
								} 
								else 
								{
									alert('Please type the TOP weight - GRAMS (BOTH)!');
								};
							} 
							else 
							{
								alert('Please select the TYPE of Product purchase!');
							};
						} 
						else 
						{
							alert('Please select the ledger from which the purchase was made (Supplier or Cash Account)!');
						};
					} 
					else 
					{
						alert('Please select the ledger into which the purchase was made (Purchases Account)!');
					};
				} 
				else 
				{
					alert('Please the Karat cannot be more than 24!');
				};
			});
		}

		function delete_bulk_purchase_item_row()
		{
			$(document).on('click', '.delete_bulk_purchase_item', function()
			{  
				var tr_id = $(this).closest("tr").attr("id");
				$('#'+tr_id+'').remove();
				var grams = 0;
				var water = 0;
				var pounds = 0;
				var amount = 0;
				$(".p_grams").each(function(){grams += +$(this).val();});
				$("#p_grams_total").val(grams);
				$(".p_water").each(function(){water += +$(this).val();});
				$("#p_water_total").val(water);
				$(".p_pounds").each(function(){pounds += +$(this).val();});
				$("#p_pounds_total").val(pounds);
				$(".p_amount").each(function(){amount += +$(this).val();});
				$("#p_amount_total").val(amount);
			});
		}

		function bulk_purchase_add_ledger()
		{
			$(document).on('click','#new_bulk_purchase_payment_ledger',function()
			{
				var i = $('#bulk_purhcase_payment_list_table tr:last').attr('id');
				$.ajax({
					url:'/layout/vouchers/bulk_purchase_add_ledger.php',
					method:'POST',
					data:{i:i},
					success:function(data)
					{
						$('#bulk_purhcase_payment_list_table').append(data);
					}
				});
			});
		}

		function bulk_purchase_delete_ledger()
		{
			$(document).on('click', '.btn_delete_bulk_purchase_payment_ledger', function()
			{  
				var tr_id = $(this).closest("tr").attr("id");
				$('#'+tr_id+'').remove();
				var sum = 0;
				$(".bulk_purchase_payment_amount").each(function()
				{
					sum += +$(this).val();
				});
				$("#bulk_purchase_payment_amount_total").val(sum);
			});
		}

		function bulk_purchase_ledger_group_id()
		{
			$(document).on('change','.bulk_purchase_payment_ledger_id',function(){
				var tr_id = $(this).closest('tr').attr('id');
				var ledger_id = $(this).val();
				$.ajax({
					url:'/layout/vouchers/bulk_purchase_ledger_group_id.php',
					method:'POST',
					data:{ledger_id:ledger_id},
					success:function(data)
					{
						$('#bulk_purchase_payment_ledger_group_id'+tr_id).val(data);
					}
				});
			});
		}

		function bulk_purchase_sum_payment_amount()
		{
			$(document).on('keyup', '.bulk_purchase_payment_amount', function()
			{  
				var button_id = $(this).closest('tr').attr('id');
				var ledger_id = $('#bulk_purchase_payment_ledger_id'+button_id).val();
				
				if(ledger_id !='' && ledger_id > 0)
				{
					var sum = 0;
					$(".bulk_purchase_payment_amount").each(function()
					{
						sum += +$(this).val();
					});
					$("#bulk_purchase_payment_amount_total").val(sum);
				}
				else
				{
					$(this).val(0);
					alert('Please select the ledger first!');
				};
			});
		}
	
		function bulk_purchase_set_supplied_by()
		{
			$(document).on('change','#bulk_purch_credit',function()
			{
				var ledger_id = $(this).val();
				var telephone = $('#bulk_phone_no').val();
				$.ajax({
					url:'/layout/vouchers/bulk_purchases_set_supplied_by.php',
					method:'POST',
					data:{ledger_id:ledger_id},
					success:function(data)
					{
						var res = $.parseJSON(data);
						$('#bulk_purch_supplied_by').val(res[0]);
						if(res[1] != '')
						{
							$('#bulk_phone_no').val(res[1]);
						};
					}
				});
			});
		}

		function bulk_purchase_set_grams()
		{
			$(document).on('keyup','#bulk_purch_gram_both',function()
			{
				var purch_gram_both = $(this).val();
				$('#bulk_purch_gram').val(purch_gram_both);
			});
		}

		function cancel_bulk_purchase_modal()
		{
			$(document).on('click','#bulk_purch_cancel_btn',function()
			{
				var page = window.location.pathname;
				$('#bulk_purchases_create_form').trigger('reset');
				$('#bulk_purchase_create_modal').modal('hide');
				window.location.href= page;
				//window.location.href="/layout/vouchers/bulk_purchases_list.php";
			});
		}

		/*ADD COMMAS*/
		function addCommas(x) 
		{
			var parts = x.toString().split(".");
			parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
			return parts.join(".");
		}

		//CALCULATIONS
			/*POUNDS*/
				function bulk_purchase_set_pounds()
				{
					$(document).on('keyup','#bulk_purch_gram,#bulk_purch_water',function(){
						var purch_gram_both = $('#bulk_purch_gram_both').val();
						var purch_gram = $('#bulk_purch_gram').val();
						var purch_product = $('#bulk_purch_product').val();
						if (purch_gram > 0) 
						{ 
							if(purch_product == 1)
							{
								var pounds = Math.trunc((purch_gram_both / 7.75)*100)/100;
							}
							else if(purch_product == 2)
							{
								var pounds = Math.trunc((purch_gram_both / 0.8)*100)/100;
							};
							$('#bulk_purch_pounds').val(pounds);
							$('#bulk_purch_poundsD').val(pounds);
						};
					});
				}
			
			/*DENSITY*/
				function bulk_purchase_set_density()
				{
					$(document).on('keyup','#bulk_purch_gram, #bulk_purch_water',function(){
						var purch_gram = $('#bulk_purch_gram').val();
						var purch_water = $('#bulk_purch_water').val();
						if (purch_gram > 0 && purch_water > 0) 
						{
							var density = Number((purch_gram / purch_water).toFixed(2));
							$('#bulk_purch_density').val(density);
							$('#bulk_purch_densityD').val(density);
						};
					});
				}
			
			/*CARAT*/
				function bulk_purchase_set_carat()
				{
					$(document).on('keyup','#bulk_purch_gram, #bulk_purch_water',function(){
						var purch_product = $('#bulk_purch_product').val();
						var purch_gram = $('#bulk_purch_gram').val();
						var purch_water = $('#bulk_purch_water').val();
						if (purch_gram > 0 && purch_water > 0) 
						{
							if(purch_product == 1)
							{
								var density = Number((purch_gram / purch_water));
								var carat = Number((((density - 10.51) * 52.838)/density).toFixed(2));
								$('#bulk_purch_karat').val(carat);
								$('#bulk_purch_karatD').val(carat);
							};
						};
					});
				}
			
			/*PURITY*/
				function bulk_purchase_set_purity()
				{
					$(document).on('keyup','#bulk_purch_gram, #bulk_purch_water',function(){
						var purch_gram = $('#bulk_purch_gram').val();
						var purch_water = $('#bulk_purch_water').val();
						if (purch_gram > 0 && purch_water > 0) 
						{
							var density = Number((purch_gram / purch_water));
							var carat = Number((((density - 10.51) * 52.838)/density).toFixed(2));
							var purity = Number((((carat/24)*100)*100)/100).toFixed(2);
							$('#bulk_purch_purity').val(purity);
							$('#bulk_purch_purityD').val(purity);
						};
					});
				}

			/*PRICE_PER_POUND*/
				function bulk_purchase_price_per_pound()
				{
					$(document).on('keyup','#bulk_purch_price',function(){
						var purch_karat = $('#bulk_purch_karat').val();
						var purch_price = $('#bulk_purch_price').val();
						if (purch_karat > 0 && purch_price > 0) 
						{
							var price_per_pound = (purch_karat * purch_price)/23;
							var amount = parseFloat(price_per_pound).toFixed(2);
							var ppp = addCommas(amount);
							$('#bulk_purch_ppp').val(amount);
							$('#bulk_purch_pppD').val(ppp);
						};
					});
				}
			
			/*AMOUNT*/
				function bulk_purchase_set_amount()
				{
					$(document).on('keyup','#bulk_purch_gram_both, #bulk_purch_gram, #bulk_purch_water, #bulk_purch_price',function(){
						var purch_gram_both = $('#bulk_purch_gram_both').val();
						var purch_gram = $('#bulk_purch_gram').val();
						var purch_water = $('#bulk_purch_water').val();
						var purch_price = $('#bulk_purch_price').val();
						var purch_product = $('#bulk_purch_product').val();
						if (purch_gram > 0 && purch_price > 0) 
						{
							var density = Number(((purch_gram / purch_water)*100)/100);
							var carat = Number((((density - 10.51) * 52.838)/density).toFixed(2));

							if(purch_product == 1)
							{
								var pounds = Math.trunc((purch_gram_both / 7.75)*100)/100;
								var amount1 = Math.trunc(((carat * purch_price)/23)*pounds);
							}
							else if(purch_product == 2)
							{
								var pounds = Math.trunc((purch_gram_both / 0.8)*100)/100;
								var amount1 = Math.trunc(purch_price*pounds);
							};
							var amount = addCommas(amount1);
							$('#bulk_purch_amount').val(amount1);
							$('#bulk_purch_amountD').val(amount);
						};
					});
				}

		function save_bulk_purchase_invoice()
		{
			$(document).on('click','#bulk_purch_save_btn',function(e){
				e.preventDefault();
				var p_grams_total = $('#p_grams_total').val();
				var p_amount_total = $('#p_amount_total').val();
				var bulk_purch_debit = $('#bulk_purch_debit').val();
				var bulk_purch_credit = $('#bulk_purch_credit').val();
				var bulk_purch_date = $('#bulk_purch_date').val();
				var bulk_purchase_payment_amount_total = $('#bulk_purchase_payment_amount_total').val();
				var page = window.location.pathname;
				
				if (p_grams_total != '' && p_grams_total > 0 ) 
				{
					if (bulk_purch_debit !="") 
					{
						if (bulk_purch_credit !="") 
						{
							//if (p_amount_total !="" && p_amount_total > 0) 
							//{
								if (bulk_purch_date !="") 
								{
									//if (bulk_purchase_payment_amount_total != '' && bulk_purchase_payment_amount_total > 0) 
									//{
										$.ajax({
											url:'/layout/vouchers/bulk_purchases_save.php',
											method:'POST',
											data:$('#bulk_purchases_create_form').serialize(),
											success:function(data)
											{
												$('#bulk_purchases_create_form').trigger('reset');
												$('#bulk_purchase_create_modal').modal('hide');
												window.location.href= page;
												window.open('/layout/vouchers/bulk_purchase_pdf.php', '_blank');
											}
										});
									/*} 
									else 
									{
										alert('Please enter the Cash Amount being paid!');
									};*/
								} 
								else 
								{
									alert('Please enter the date!');
								};
							/*} 
							else 
							{
								alert('Please enter the price for the goods purchased!');
							};*/
						} 
						else 
						{
							alert('Please select the Customer Ledger!');
						};
					} 
					else 
					{
						alert('Please select the Purchases ledger!');
					};
				} 
				else 
				{
					alert('Please enter Grams for goods purchased!');
				};
			});
		}

		function edit_bulk_purchase_invoice()
		{
			$(document).on('click','#btn_edit_bulk_purchase',function(){
				var bulk_purchase_id = $(this).attr('data-id');
				$.ajax({
					url:'/layout/vouchers/bulk_purchases_edit.php',
					method:'POST',
					data:{bulk_purchase_id:bulk_purchase_id},
					datatype:'JSON',
					success:function(data)
					{
						var res = $.parseJSON(data);
						$('#bulk_purchase_id').val(res[0][0]);
						$('#bulk_purch_product').val(1);
						$('#bulk_purch_date').val(res[0][1]);
						$('#bulk_purch_debit').val(res[0][2]);
						$('#bulk_purch_debitD').val(res[0][2]);
						$('#bulk_purch_credit').val(res[0][3]);
						$('#bulk_purch_supplied_by').val(res[0][5]);
						$('#bulk_purch_phone_no').val(res[0][6]);
						$('#bulk_purch_narration').val(res[0][7]);
						$('#bulk_purch_location').val(res[0][8]);

						$('#bulk_purchases_items_table').append(res[1]);
						var grams = 0;
						var water = 0;
						var pounds = 0;
						var amount = 0;
						$(".p_grams").each(function(){grams += +$(this).val();});
						$("#p_grams_total").val(grams);
						$(".p_water").each(function(){water += +$(this).val();});
						$("#p_water_total").val(water);
						$(".p_pounds").each(function(){pounds += +$(this).val();});
						$("#p_pounds_total").val(pounds);
						$(".p_amount").each(function(){amount += +$(this).val();});
						$("#p_amount_total").val(amount);

						$('#bulk_purchase_payment_list_div').html(res[2]);
						$("#bulk_purchase_payment_amount_total").val(res[3]);

						$('#bulk_purch_update_btn').show();
						$('#bulk_purch_save_btn').hide();
						$('#bulk_purchase_create_modal').modal('show');
					}
				});
			});
		}

		function update_bulk_purchase_invoice()
		{
			$(document).on('click','#bulk_purch_update_btn',function(e){
				e.preventDefault();
				var p_grams_total = $('#p_grams_total').val();
				var p_amount_total = $('#p_amount_total').val();
				var bulk_purch_debit = $('#bulk_purch_debit').val();
				var bulk_purch_credit = $('#bulk_purch_credit').val();
				var bulk_purch_date = $('#bulk_purch_date').val();
				var bulk_purchase_payment_amount_total = $('#bulk_purchase_payment_amount_total').val();
				var page = window.location.pathname;
				
				if (p_grams_total != '' && p_grams_total > 0 ) 
				{
					if (bulk_purch_debit !="") 
					{
						if (bulk_purch_credit !="") 
						{
							//if (p_amount_total !="" && p_amount_total > 0) 
							//{
								if (bulk_purch_date !="") 
								{
									//if (bulk_purchase_payment_amount_total != '' && bulk_purchase_payment_amount_total > 0) 
									//{
										$.ajax({
											url:'/layout/vouchers/bulk_purchases_update.php',
											method:'POST',
											data:$('#bulk_purchases_create_form').serialize(),
											success:function(data)
											{
												$('#bulk_purchases_create_form').trigger('reset');
												$('#bulk_purchase_create_modal').modal('hide');
												window.location.href= page;
												window.open('/layout/vouchers/bulk_purchase_pdf.php', '_blank');
											}
										});
									/*} 
									else 
									{
										alert('Please enter the Cash Amount being paid!');
									};*/
								} 
								else 
								{
									alert('Please enter the date!');
								};
							/*} 
							else 
							{
								alert('Please enter the price for the goods purchased!');
							};*/
						} 
						else 
						{
							alert('Please select the Customer Ledger!');
						};
					} 
					else 
					{
						alert('Please select the Purchases ledger!');
					};
				} 
				else 
				{
					alert('Please enter Grams for goods purchased!');
				};
			});
		}

		function search_bulk_purchase_by_name()
		{
			$(document).on('keyup','#bulk_purchase_search_name',function(e){
				e.preventDefault();
				var purchase_search_name = $('#bulk_purchase_search_name').val();

				$.ajax({
					url:'/layout/vouchers/bulk_purchases_search_by_name.php',
					method:'POST',
					data:{purchase_search_name:purchase_search_name},
					success:function(data)
						{
							$('#bulk_purchases_list_table').html(data);
						}
				});
			});
		}

		function search_bulk_purchase_by_date()
		{
			$(document).on('change','#bulk_purchase_search_from, #bulk_purchase_search_to',function(e){
				e.preventDefault();
				var start_date = $('#bulk_purchase_search_from').val();
				var end_date = $('#bulk_purchase_search_to').val();

				$.ajax({
					url:'/layout/vouchers/bulk_purchases_search_by_date.php',
					method:'POST',
					data:{start_date:start_date,end_date:end_date},
					success:function(data)
					{
						$('#bulk_purchases_list_table').html(data);
					}
				});
			});
		}

		function reprint_bulk_purchase_invoice()
		{
			$(document).on('click','#btn_reprint_bulk_purchase',function(){
				var bulk_purchase_id = $(this).attr('data-id');
				var ledger_credit_id = $(this).attr('data-id1');

				$.ajax({
					url:'/layout/vouchers/bulk_purchases_reprint.php',
					method:'POST',
					data:{
						bulk_purchase_id:bulk_purchase_id,
						ledger_credit_id:ledger_credit_id
					},
					success:function(data)
					{
						window.open('/layout/vouchers/bulk_purchase_pdf.php', '_blank');
					}
				});
			});
		}
		
		function delete_bulk_purchase_invoice()
		{
			$(document).on('click','#btn_delete_bulk_purchase',function()
			{
				var bulk_purchase_id = $(this).attr('data-id');
				var currentRow = $(this).closest("tr");
				var sales_date = currentRow.find("td:eq(0)").text();
				var Supplier = currentRow.find("td:eq(1)").text();
				$('#item_delete_question').text('Are you sure you want to delete Bulk Purchase Invoice of ' + sales_date + ' for ' + Supplier + '?');
				$('#item_delete_modal').modal('show');
				$(document).on('click','#item_delete_yes',function()
				{
					$.ajax({  
						url:'/layout/vouchers/bulk_purchases_delete.php',  
						type:'POST',  
						data:{bulk_purchase_id:bulk_purchase_id},
						success:function()
						{
							$('#item_delete_modal').modal('hide');
							window.location.href="/layout/vouchers/bulk_purchases_list.php";
						}  
					});
				});
				$(document).on('click','#item_delete_no',function()
				{
					$('#item_delete_modal').modal('hide');
				});
			});
		}
		
	//STOCK_PURCHASES
		function new_stock_purchase_modal()
		{
			$(document).on('click','#new_stock_purchase_icon',function()
			{
				var branch_code = 1;
				$('#stock_purch_update_btn').hide();
				$('#stock_purch_save_btn').show();
				$('#stock_purchases_create_form').trigger('reset');
					$.ajax({
						url:'/layout/vouchers/stock_purchases_unique.php',
						method:'POST',
						data:{
							branch_code:branch_code
						},
						success:function(data)
						{
							$('#stock_purchase_unique').val(data);
							$('#stock_purchase_create_modal').modal('show');
						}
					});
			});
		}

		function cancel_stock_purchase_modal()
		{
			$(document).on('click','#stock_purch_cancel_btn',function()
			{
				var page = window.location.pathname;
				$('#stock_purchases_create_form').trigger('reset');
				$('#stock_purchase_create_modal').modal('hide');
				window.location.href= page;
				//window.location.href="/layout/vouchers/stock_purchases_list.php";
			});
		}

		function add_stock_purchase_item_row()
		{
			$(document).on('change','.stock_purch_desc',function(){ 
				var i = $('#stock_purchase_items_table tr:last').attr('id');
				var item = $('#stock_purch_desc'+i).val();
				if(item > 0)
				{
					i++;
					$.ajax({
						url:'/layout/vouchers/stock_purchases_item_list.php',
						method:'POST',
						data:{i:i},
						success:function(data)
						{
							$('#stock_purchase_items_table').append('<tr id="'+i+'">'+data+'<td><input type="text" name="stock_purch_qty[]" class="form-control bg-light stock_purch_qty" id="stock_purch_qty'+i+'" data-id="'+i+'" style="border-width:0px"></td><td><input type="text" name="stock_purch_price[]" class="form-control bg-light stock_purch_price" id="stock_purch_price'+i+'" data-id="'+i+'" style="border-width:0px"></td><td><input type="text" name="stock_purch_amt[]" class="form-control bg-light stock_purch_amt" id="stock_purch_amt'+i+'" style="border-width:0px"></td><td><input type="text" name="stock_purch_batch[]" class="form-control bg-light" id="stock_purch_batch'+i+'" style="border-width:0px"></td><td><input type="date" name="stock_purch_expiry_date[]" class="form-control bg-light" id="stock_purch_expiry_date'+i+'" style="border-width:0px"></td><td><a href="#" id="delete_stock_purchase_item" data-id="'+i+'"><i class="fa fa-trash fa-sm"></i></a></td></tr>');
						}
					});
				};
			});
		}

		function get_stock_purchase_item_amount()
		{
			$(document).on('change keyup', '.stock_purch_price, .stock_purch_qty', function(){  
       			//var total_current = $('#stock_purch_amount').val();
       			var count = $(this).attr("data-id"); 
       			var qty = $('#stock_purch_qty'+count).val();
       			var price = $('#stock_purch_price'+count).val();
       			//var amt_earlier = $('#stock_purch_amt'+count).val();
       			var amt = qty * price;
           		$('#stock_purch_amt'+count).val(amt);

           		/*var amount_item = parseFloat(amt);
           		if(amt_earlier == ''){var amt_previous = 0 }else{var amt_previous = parseFloat(amt_earlier)};
           		if(total_current == ''){var total_previous = 0 }else{var total_previous = parseFloat($('#stock_purch_amount').val())};
				var total = total_previous + amount_item - amt_previous;*/

				var total = 0;
				$(".stock_purch_amt").each(function()
				{
					total += +$(this).val();
				});
           		$('#stock_purch_amount').val(total);
           		$('#stock_purch_amount_2').val(total);
           	});
		}

		function delete_stock_purchase_item_row()
		{
			$(document).on('click', '#delete_stock_purchase_item', function(){  
       			var button_id = $(this).attr("data-id");
           		$('#'+button_id+'').remove();
       			/*var total_current = $('#stock_purch_amount').val();
       			var amt = $('#stock_purch_amt'+button_id).val();
       			if(amt == ''){var amount_item = 0 }else{var amount_item = parseFloat($('#stock_purch_amt'+button_id).val())};
       			if(total_current == ''){var total_previous = 0 }else{var total_previous = parseFloat($('#stock_purch_amount').val())};
				var total = total_previous - amount_item;*/

				var total = 0;
				$(".stock_purch_amt").each(function()
				{
					total += +$(this).val();
				});
           		$('#stock_purch_amount').val(total);
           		$('#stock_purch_amount_2').val(total);
           	});
		}

		function save_stock_purchase_invoice()
		{
			$(document).on('click','#stock_purch_save_btn',function(e){
				e.preventDefault();
				var last_tr_id = $("#stock_purchase_items_table tr:last").attr("id");
				var last_tr_select = $("#stock_purchase_items_table tr:last option:selected").val();
				if(last_tr_select =="" || last_tr_select ==0)
				{
					$('#'+last_tr_id+'').remove();
				};
				var purch_debit = $('#stock_purch_debit').val();
				var purch_credit = $('#stock_purch_credit').val();
				var purch_amount = $('#stock_purch_amount').val();
				var purch_supplied_by = $('#stock_purch_supplied_by').val();
				var purch_ref_no = $('#stock_purch_ref_no').val();
				var purch_date = $('#stock_purch_date').val();
				var purch_received_by = $('#stock_purch_received_by').val();
				var purch_narration = $('#stock_purch_narration').val();
				var purch_desc = $('#stock_purch_desc').val();
				var page = window.location.pathname;
				if (purch_debit !=="" && purch_debit > 0) 
				{
					if (purch_credit !=="" && purch_credit > 0) 
					{
						if (purch_amount !=="" && purch_amount > 0) 
						{
							if (purch_supplied_by !=="") 
							{
								if (purch_ref_no !=="") 
								{
									if (purch_date !=="") 
									{
										if (purch_received_by !=="") 
										{
											if (purch_desc !=="") 
											{
												$.ajax({
													url:'/layout/vouchers/stock_purchases_save.php',
													method:'POST',
													data:$('#stock_purchases_create_form').serialize(),
													success:function(data)
													{
														if(data == 'exist')
														{
															alert('This Invoice has been SAVED already!');
														}
														else if(data == 'no_item')
														{
															alert('No Items selected for purchase!');
														}
														else if(data == 'no_company')
														{
															alert('No Active Company!');
														}
														else if(data == 'error')
														{
															alert('There was an ERROR in the save query, Invoice nor saved!');
														}
														else if(data == 'saved')
														{
															$('#stock_purchases_create_form').trigger('reset');
															window.location.href= page;
														};
													}
												});
											} 
											else 
											{
												alert('Please select an item purchased!');
											}
										} 
										else 
										{
											alert('Please type the name of the person receiving the goods!');
										}
									} 
									else 
									{
										alert('Please select the date of purchase!');
									}
								} 
								else 
								{
									alert('Please type the supplier invoice number!');
								}
							} 
							else 
							{
								alert('Please type the name of the person/institution from whom the purchase was made!');
							}
						} 
						else 
						{
							alert('Please type price for each item purhased!');
						}
					} 
					else 
					{
						alert('Please select the ledger from which the purchase was made (Supplier or Cash Account)!');
					}
				} 
				else 
				{
					alert('Please select the ledger into which the purchase was made (Purchases Account)!');
				};
			});
		}

		function edit_stock_purchase_invoice()
		{
			$(document).on('click','#btn_edit_stock_purchase',function(){
				var stock_purchase_id = $(this).attr('data-id');
				$.ajax({
		             url:'/layout/vouchers/stock_purchases_edit.php',
		             method:'POST',
		             data:{stock_purchase_id:stock_purchase_id},
		             datatype:'JSON',
		             success:function(data)
		             {
		             	var res = $.parseJSON(data);
		             	$('#stock_purchase_id').val(res[0]);
		             	$('#stock_purch_date').val(res[1]);
		             	$('#stock_purch_debit').val(res[2]);
		             	$('#stock_purch_credit').val(res[3]);
		             	$('#stock_purch_amount').val(res[4]);
		             	$('#stock_purch_amount_2').val(res[4]);
		             	$('#stock_purch_ref_no').val(res[5]);
		             	$('#stock_purch_supplied_by').val(res[6]);
		             	$('#stock_purch_received_by').val(res[7]);
		             	$('#stock_purch_narration').val(res[8]);
		             	$('#stock_purchase_branch_id').val(res[9]);
		             	$.ajax({
				            url:'/layout/vouchers/stock_purchases_items_edit.php',
				            method:'POST',
				            data:{stock_purchase_id:stock_purchase_id},
				            success:function(data)
				            {
				            	$('#stock_purchase_items_list').html(data);
							}
			             });
		             	$('#stock_purch_update_btn').show();
		             	$('#stock_purch_save_btn').hide();
						$('#stock_purchase_create_modal').modal('show');
		             }
		        });
			});
		}

		function update_stock_purchase_invoice()
		{
			$(document).on('click','#stock_purch_update_btn',function(e){
				e.preventDefault();

				var last_tr_id = $("#stock_purchase_items_table tr:last").attr("id");
				var last_tr_select = $("#stock_purchase_items_table tr:last option:selected").val();
				if(last_tr_select =="" || last_tr_select ==0)
				{
					$('#'+last_tr_id+'').remove();
				};
				var purch_debit = $('#stock_purch_debit').val();
				var purch_credit = $('#stock_purch_credit').val();
				var purch_amount = $('#stock_purch_amount').val();
				var purch_supplied_by = $('#stock_purch_supplied_by').val();
				var purch_ref_no = $('#stock_purch_ref_no').val();
				var purch_date = $('#stock_purch_date').val();
				var purch_received_by = $('#stock_purch_received_by').val();
				var purch_narration = $('#stock_purch_narration').val();
				var purch_desc = $('#stock_purch_desc').val();
				var page = window.location.pathname;
				if (purch_debit !=="") 
				{
					if (purch_credit !=="") 
					{
						if (purch_amount !=="") 
						{
							if (purch_supplied_by !=="") 
							{
								if (purch_ref_no !=="") 
								{
									if (purch_date !=="") 
									{
										if (purch_received_by !=="") 
										{
											if (purch_desc !=="") 
											{
												$.ajax({
										             url:'/layout/vouchers/stock_purchases_update.php',
										             method:'POST',
										             data:$('#stock_purchases_create_form').serialize(),
										             success:function(data)
											             {
											             	$('#stock_purchases_create_form').trigger('reset');
											             	window.location.href= page;
											             }
										             });
											} 
											else 
											{
												alert('Please select an item purchased!');
											}
										} 
										else 
										{
											alert('Please type the name of the person receiving the goods!');
										}
									} 
									else 
									{
										alert('Please select the date of purchase!');
									}
								} 
								else 
								{
									alert('Please type the supplier invoice number!');
								}
							} 
							else 
							{
								alert('Please type the name of the person/institution from whom the purchase was made!');
							}
						} 
						else 
						{
							alert('Please type price for each item purhased!');
						}
					} 
					else 
					{
						alert('Please select the ledger from which the purchase was made (Supplier or Cash Account)!');
					}
				} 
				else 
				{
					alert('Please select the ledger into which the purchase was made (Purchases Account)!');
				};
			});
		}
		
		function search_stock_purchase_by_name()
		{
			$(document).on('keyup','#stock_purchase_name',function(e){
				e.preventDefault();
				var company_id = $('#session_company_id').val();
				var stock_purchase_name = $('#stock_purchase_name').val();

				$.ajax({
					url:'/layout/vouchers/stock_purchases_search_by_name.php',
					method:'POST',
					data:{stock_purchase_name:stock_purchase_name,company_id:company_id},
					success:function(data)
					{
						$('#stock_purchases_list_table').html(data);
					}
		        });
			});
		}

		function search_stock_purchase_by_date()
		{
			$(document).on('click','#stock_purchase_search_icon',function(e){
				e.preventDefault();
				var company_id = $('#session_company_id').val();
				var start_date = $('#stock_purchase_search_from').val();
				var end_date = $('#stock_purchase_search_to').val();

				$.ajax({
		             url:'/layout/vouchers/stock_purchases_search_by_date.php',
		             method:'POST',
		             data:{start_date:start_date,end_date:end_date,company_id:company_id},
		             success:function(data)
			             {
			             	$('#stock_purchases_list_table').html(data);
			             }
		        });
			});
		}

		function delete_stock_purchase_invoice()
		{
			$(document).on('click','#btn_delete_stock_purchase',function(){
				var stock_purchase_id = $(this).attr('data-id');
				var currentRow=$(this).closest("tr");
				var purchase_date = currentRow.find("td:eq(0)").text();
				var Supplier = currentRow.find("td:eq(2)").text();
				$('#stock_purchase_invoice_delete_question').text('Are you sure you want to delete purchase invoice of ' + purchase_date + ' for ' + Supplier + '?');
				$('#stock_purchase_invoice_delete_modal').modal('show');
				$(document).on('click','#stock_purchase_delete_yes',function(){
					$.ajax({  
		                 url:'/layout/vouchers/stock_purchases_delete.php',  
		                 type:'POST',  
		                 data:{stock_purchase_id:stock_purchase_id},
		                 success:function(){
		                 	$('#stock_purchase_invoice_delete_modal').modal('hide');
		                 	window.location.href="/layout/vouchers/stock_purchases_list.php";
		                 }  
		            });
			      });
				$(document).on('click','#stock_purchase_delete_no',function(){
					$('#stock_purchase_invoice_delete_modal').modal('hide');
				});
			});
		}

	//HIRING
		function new_hiring_modal()
		{
			$(document).on('click','#new_hiring_icon',function()
			{
				$('#hiring_update_btn').hide();
				$('#hiring_save_btn').show();
				$('#hiring_create_form').trigger('reset');
				$('#hiring_credit').val(36);
				$('#hiring_create_modal').modal('show');
			});
		}

		function cancel_hiring_modal()
		{
			$(document).on('click','#hiring_cancel_btn',function()
			{
				var page = window.location.pathname;
				$('#hiring_create_form').trigger('reset');
				$('#hiring_create_modal').modal('hide');
				window.location.href= page;
				//window.location.href="/layout/vouchers/hiring_list.php";
			});
		}

		function hiring_start_end()
		{
			$(document).on('change','.hiring_time_entry_type',function()
			{
				var i = $(this).attr('data-id');
				var entry_type = $(this).val();
				$.ajax({
					url:'/layout/vouchers/hiring_start_end.php',
					method:'POST',
					data:{
						i:i,
						entry_type:entry_type
					},
					success:function(data)
					{
						var res = $.parseJSON(data);
						$('#hiring_time_start'+i).html(res[0]);
						$('#hiring_time_end'+i).html(res[1]);
					}
				});
			});
		}

		function hiring_get_hours()
		{
			$(document).on('change keyup','.hiring_start, .hiring_end',function()
			{
				var i = $(this).attr('data-id');
				var asset_id = $('#hiring_asset_id'+i).val();
				var entry_type = $('#hiring_time_entry_type'+i).val();
				var rate = $('#hiring_rate'+i).val();
				var start_length = $('#hiring_start'+i).val().length;
				var start = $('#hiring_start'+i).val();
				var end = $('#hiring_end'+i).val();
				if(start !='' && end !='')
				{
					if(end >= start)
					{
						$.ajax({
							url:'/layout/vouchers/hiring_get_hours.php',
							method:'POST',
							data:{
								start:start,
								end:end,
								entry_type:entry_type,
								asset_id:asset_id
							},
							success:function(data)
							{
								var res = $.parseJSON(data);
								//if(res[2] < 1)
								//{
									$('#hiring_hour'+i).val(res[1]);
									var amount = rate * res[1];
									$('#hiring_amt'+i).val(amount);
									var total = 0;
									$(".hiring_amt").each(function()
									{
										total += +$(this).val();
									});
									$('#hiring_amount').val(total);
									$('#hiring_amount_2').val(total);
								/*}
								else
								{
									$('#hiring_start'+i).val();
									$('#hiring_end'+i).val();
									alert('This Start Meter Reading: '+start+' has been entered previously!');
								};*/
							}
						});
					}
					else
					{
						alert('The End cannot be less than the Start!');
					};
				}
			});
		}

		function add_hiring_item_row()
		{
			$(document).on('change','.hiring_asset_id',function(){ 
				var asset_id = $(this).val();
				var x = $(this).attr('data-id');
				var i = $('#hiring_items_table tr:last').attr('id');
				i++;
				$.ajax({
					url:'/layout/vouchers/hiring_item_list.php',
					method:'POST',
					datatype:'JSON',
					data:{i:i,asset_id:asset_id},
					success:function(data)
					{
						var res = $.parseJSON(data);
						$('#hiring_items_table').append(res[0]);
						$('#hiring_rate'+x).val(res[1]);
					}
				});
			});
		}

		function get_hiring_item_amount()
		{
			$(document).on('change keyup', '.hiring_rate, .hiring_hour', function(){  
       			var total_current = $('#hiring_amount').val();
       			var count = $(this).attr("data-id"); 
       			var qty = $('#hiring_hour'+count).val();
       			var price = $('#hiring_rate'+count).val();
       			var amt_earlier = $('#hiring_amt'+count).val();
       			var amt = qty * price;
           		$('#hiring_amt'+count).val(amt);

           		var amount_item = parseFloat(amt);
           		if(amt_earlier == ''){var amt_previous = 0 }else{var amt_previous = parseFloat(amt_earlier)};
           		if(total_current == ''){var total_previous = 0 }else{var total_previous = parseFloat($('#hiring_amount').val())};
				var total = total_previous + amount_item - amt_previous;
           		$('#hiring_amount').val(total);
           		$('#hiring_amount_2').val(total);
           	});
		}

		function delete_hiring_item_row()
		{
			$(document).on('click', '#delete_hiring_item', function(){  
       			var button_id = $(this).attr("data-id");
       			var total_current = $('#hiring_amount').val();
       			var amt = $('#hiring_amt'+button_id).val();
       			if(amt == ''){var amount_item = 0 }else{var amount_item = parseFloat($('#hiring_amt'+button_id).val())};
       			if(total_current == ''){var total_previous = 0 }else{var total_previous = parseFloat($('#hiring_amount').val())};
				var total = total_previous - amount_item;
           		$('#hiring_amount').val(total);
           		$('#hiring_amount_2').val(total);
           		$('#'+button_id+'').remove();

           	});
		}

		function save_hiring_invoice()
		{
			$(document).on('click','#hiring_save_btn',function(e){
				e.preventDefault();
				var last_tr_id = $("#hiring_items_table tr:last").attr("id");
				var last_tr_select = $("#hiring_items_table tr:last option:selected").val();
				if(last_tr_select =="" || last_tr_select ==0)
				{
					$('#'+last_tr_id+'').remove();
				};
				var hiring_debit = $('#hiring_debit').val();
				var hiring_credit = $('#hiring_credit').val();
				var hiring_amount = $('#hiring_amount').val();
				var hiring_by = $('#hiring_by').val();
				var hiring_address = $('#hiring_address').val();
				var hiring_date = $('#hiring_date').val();
				var hiring_phone = $('#hiring_phone').val();
				var hiring_narration = $('#hiring_narration').val();
				var hiring_asset_id = $('#hiring_asset_id').val();
				var hiring_operator = $('#hiring_operator').val();
				var hiring_foreman = $('#hiring_foreman').val();
				var page = window.location.pathname;
				if (hiring_debit !=="") 
				{
					if (hiring_credit !=="") 
					{
						if (hiring_amount !=="") 
						{
							if (hiring_by !=="") 
							{
								if (hiring_address !=="") 
								{
									if (hiring_date !=="") 
									{
										if (hiring_phone !=="") 
										{
											if (hiring_asset_id !=="") 
											{
												if (hiring_operator !=="") 
												{
													if (hiring_foreman !=="") 
													{
														$.ajax({
															url:'/layout/vouchers/hiring_save.php',
															method:'POST',
															data:$('#hiring_create_form').serialize(),
															success:function(data)
																{
																	$('#hiring_create_form').trigger('reset');
																	window.open('/layout/vouchers/hiring_invoice_pdf.php', '_blank');
																	window.location.href= page;
																	//window.location.href="/layout/vouchers/hiring_list.php";
																}
														});
													} 
													else 
													{
														alert('Please the Foreman cannot be EMPTY!');
													};
												} 
												else 
												{
													alert('Please the Operator cannot be EMPTY!');
												};
											} 
											else 
											{
												alert('Please select an item hired!');
											};
										} 
										else 
										{
											alert('Please type the phone number of the person hiring!');
										};
									} 
									else 
									{
										alert('Please select the date of hiring!');
									};
								} 
								else 
								{
									alert('Please type the address of the person hiring!');
								};
							} 
							else 
							{
								alert('Please type the name of the person/institution hiring!');
							};
						} 
						else 
						{
							alert('Please type price for each item hired!');
						};
					} 
					else 
					{
						alert('Please select the Hiring Charges ledger!');
					};
				} 
				else 
				{
					alert('Please select the Cash/Customer ledger!');
				};
			});
		}

		function edit_hring_invoice()
		{
			$(document).on('click','#btn_edit_hiring',function(){
				var hiring_id = $(this).attr('data-id');
				$.ajax({
		             url:'/layout/vouchers/hiring_edit.php',
		             method:'POST',
		             data:{hiring_id:hiring_id},
		             datatype:'JSON',
		             success:function(data)
		             {
		             	var res = $.parseJSON(data);
		             	$('#hiring_id').val(res[0]);
		             	$('#hiring_date').val(res[1]);
		             	$('#hiring_debit').val(res[2]);
		             	$('#hiring_credit').val(res[3]);
		             	$('#hiring_amount').val(res[4]);
		             	$('#hiring_amount_2').val(res[4]);
		             	$('#hiring_by').val(res[5]);
		             	$('#hiring_address').val(res[6]);
		             	$('#hiring_phone').val(res[7]);
		             	$('#hiring_narration').val(res[8]);
		             	$('#hiring_branch_id').val(res[9]);
		             	$('#hiring_operator').val(res[10]);
		             	$('#hiring_foreman').val(res[11]);
		             	$.ajax({
				            url:'/layout/vouchers/hiring_items_edit.php',
				            method:'POST',
				            data:{hiring_id:hiring_id},
				            success:function(data)
				            {
				            	$('#hiring_items_list').html(data);
							}
			             });
		             	$('#hiring_update_btn').show();
		             	$('#hiring_save_btn').hide();
						$('#hiring_create_modal').modal('show');
		             }
		        });
			});
		}

		function update_hiring_invoice()
		{
			$(document).on('click','#hiring_update_btn',function(e)
			{
				e.preventDefault();
				var last_tr_id = $("#hiring_items_table tr:last").attr("id");
				var last_tr_select = $("#hiring_items_table tr:last option:selected").val();
				if(last_tr_select =="" || last_tr_select ==0)
				{
					$('#'+last_tr_id+'').remove();
				};
				var hiring_debit = $('#hiring_debit').val();
				var hiring_credit = $('#hiring_credit').val();
				var hiring_amount = $('#hiring_amount').val();
				var hiring_by = $('#hiring_by').val();
				var hiring_address = $('#hiring_address').val();
				var hiring_date = $('#hiring_date').val();
				var hiring_phone = $('#hiring_phone').val();
				var hiring_narration = $('#hiring_narration').val();
				var hiring_asset_id = $('#hiring_asset_id').val();
				var hiring_operator = $('#hiring_operator').val();
				var hiring_foreman = $('#hiring_foreman').val();
				var page = window.location.pathname;
				if (hiring_debit !=="") 
				{
					if (hiring_credit !=="") 
					{
						if (hiring_amount !=="") 
						{
							if (hiring_by !=="") 
							{
								if (hiring_address !=="") 
								{
									if (hiring_date !=="") 
									{
										if (hiring_phone !=="") 
										{
											if (hiring_asset_id !=="") 
											{
												if (hiring_operator !=="") 
												{
													if (hiring_foreman !=="") 
													{
														$.ajax({
															url:'/layout/vouchers/hiring_update.php',
															method:'POST',
															data:$('#hiring_create_form').serialize(),
															success:function(data)
																{
																	$('#hiring_create_form').trigger('reset');
																	window.open('/layout/vouchers/hiring_invoice_pdf.php', '_blank');
																	window.location.href= page;
																	//window.location.href="/layout/vouchers/hiring_list.php";
																}
														});
													} 
													else 
													{
														alert('Please the Foreman cannot be EMPTY!');
													};
												} 
												else 
												{
													alert('Please the Operator cannot be EMPTY!');
												};
											} 
											else 
											{
												alert('Please select an item hired!');
											};
										} 
										else 
										{
											alert('Please type the phone number of the person hiring!');
										};
									} 
									else 
									{
										alert('Please select the date of hiring!');
									};
								} 
								else 
								{
									alert('Please type the address of the person hiring!');
								};
							} 
							else 
							{
								alert('Please type the name of the person/institution hiring!');
							};
						} 
						else 
						{
							alert('Please type price for each item hired!');
						};
					} 
					else 
					{
						alert('Please select the Hiring Charges ledger!');
					};
				} 
				else 
				{
					alert('Please select the Cash/Customer ledger!');
				};
			});
		}
		
		function search_hiring_invoice_by_name()
		{
			$(document).on('keyup','#hiring_name',function(e){
				e.preventDefault();
				var company_id = $('#session_company_id').val();
				var name = $('#hiring_name').val();

				$.ajax({
					url:'/layout/vouchers/hiring_search_by_name.php',
					method:'POST',
					data:{name:name,company_id:company_id},
					success:function(data)
					{
						$('#hiring_list_table').html(data);
					}
		        });
			});
		}

		function search_hiring_invoice_by_date()
		{
			$(document).on('click','#hiring_search_icon',function(e){
				e.preventDefault();
				var company_id = $('#session_company_id').val();
				var start_date = $('#hiring_search_from').val();
				var end_date = $('#hiring_search_to').val();

				$.ajax({
		             url:'/layout/vouchers/hiring_search_by_date.php',
		             method:'POST',
		             data:{start_date:start_date,end_date:end_date,company_id:company_id},
		             success:function(data)
			             {
			             	$('#hiring_list_table').html(data);
			             }
		        });
			});
		}

		function delete_hiring_invoice()
		{
			$(document).on('click','#btn_delete_hiring',function(){
				var hiring_id = $(this).attr('data-id');
				var currentRow=$(this).closest("tr");
				var hiring_date = currentRow.find("td:eq(0)").text();
				var hired_by = currentRow.find("td:eq(2)").text();
				$('#hiring_invoice_delete_question').text('Are you sure you want to delete hiring invoice of ' + hiring_date + ' for ' + hired_by + '?');
				$('#hiring_invoice_delete_modal').modal('show');
				$(document).on('click','#hiring_delete_yes',function(){
					$.ajax({  
						url:'/layout/vouchers/hiring_delete.php',  
						type:'POST',  
						data:{hiring_id:hiring_id},
						success:function(){
							$('#stock_purchase_invoice_delete_modal').modal('hide');
							window.location.href="/layout/vouchers/hiring_list.php";
						}
		            });
			      });
				$(document).on('click','#hiring_delete_no',function(){
					$('#hiring_invoice_delete_modal').modal('hide');
				});
			});
		}

	//MAINTENANCE SHEET
		function new_mtce_modal()
		{
			$(document).on('click','#new_mtce_icon',function()
			{
				$('#mtce_update_btn').hide();
				$('#mtce_save_btn').show();
				$('#mtce_create_form').trigger('reset');
				$('#mtce_debit').val(37);
				$('#mtce_credit_cash').val(5);
				$('#mtce_credit_stock').val(39);
				$('#mtce_create_modal').modal('show');
			});
		}

		function cancel_mtce_modal()
		{
			$(document).on('click','#mtce_cancel_btn',function()
			{
				var page = window.location.pathname;
				$('#mtce_create_form').trigger('reset');
				$('#mtce_create_modal').modal('hide');
				window.location.href= page;
				//window.location.href="/layout/vouchers/mtce_list.php";
			});
		}

		function add_mtce_item_price()
		{
			$(document).on('change','.mtce_stock_id',function(){
				var i = $(this).closest('tr').attr('id');
				var stock_item_id = $('#mtce_stock_id'+i+'').val();
				$.ajax({
		             url:'/layout/vouchers/mtce_item_price.php',
		             method:'POST',
		             data:{stock_item_id:stock_item_id},
		             datatype:'JSON',
		             success:function(data)
		             {
		             	var res = $.parseJSON(data);
		             	$('#mtce_stock_price'+i+'').val(res[0]);
		             }
		        });
			});
		}

		function add_mtce_service_item_row()
		{
			$(document).on('change','.mtce_service_asset_id',function(){ 
				var i = $('#mtce_service_items_table tr:last').attr('id');
				i++;
				$.ajax({
					url:'/layout/vouchers/mtce_service_list.php',
					method:'POST',
					data:{i:i},
					success:function(data)
					{
						$('#mtce_service_items_table').append(data);
					}
				});
			});
		}

		function add_mtce_stock_item_row()
		{
			$(document).on('change','.mtce_stock_id',function(){ 
				var i = $('#mtce_stock_items_table tr:last').attr('id');
				i++;
				$.ajax({
					url:'/layout/vouchers/mtce_stock_list.php',
					method:'POST',
					data:{i:i},
					success:function(data)
					{
						$('#mtce_stock_items_table').append(data);
					}
				});
			});
		}

		function get_mtce_service_item_amount()
		{
			$(document).on('change keyup', '.mtce_service_amt', function(){ 
				var total_stock = $('#mtce_amount_stock').val();
				if(total_stock == '' ){var mtce_amount_stock = 0;}else{var mtce_amount_stock = parseFloat(total_stock);};
       			var sum = 0;
				$('.mtce_service_amt').each(function(){
					var num = $(this).val().replace(',','');
					if(num !=0)
					{
						sum += parseFloat(num);
					};
				});
				$('#mtce_amount_cash').val(sum);
				$('#mtce_amount_cash_2').val(sum);

				var grand_total = sum + mtce_amount_stock;
				$('#mtce_amount').val(grand_total);
				$('#mtce_amount_2').val(grand_total);
           	});
		}

		function get_mtce_stock_item_amount()
		{
			$(document).on('change keyup', '.mtce_stock_qty, .mtce_stock_price', function(){  
       			var total_service = $('#mtce_amount_cash').val();
				if(total_service == ''){var mtce_amount_service = 0;}else{var mtce_amount_service = parseFloat(total_service);};
       			
       			var total_current = $('#mtce_amount_stock').val();
       			var count = $(this).attr("data-id"); 
       			var qty = $('#mtce_stock_qty'+count).val();
       			var price = $('#mtce_stock_price'+count).val();
       			var amt_earlier = $('#mtce_stock_amt'+count).val();
       			var amt = qty * price;
           		$('#mtce_stock_amt'+count).val(amt);

           		var amount_item = parseFloat(amt);
           		if(amt_earlier == ''){var amt_previous = 0;}else{var amt_previous = parseFloat(amt_earlier);};
           		if(total_current == ''){var total_previous = 0;}else{var total_previous = parseFloat($('#mtce_amount_stock').val());};
				var total = total_previous + amount_item - amt_previous;
           		$('#mtce_amount_stock').val(total);
           		$('#mtce_amount_stock_2').val(total);

           		var grand_total = total + mtce_amount_service;
           		$('#mtce_amount').val(grand_total);
           		$('#mtce_amount_2').val(grand_total);
           	});
		}

		function delete_mtce_service_item_row()
		{
			$(document).on('click', '#delete_mtce_service_item', function(){  
       			var button_id = $(this).attr("data-id");
       			var grand_total = $('#mtce_amount').val();
       			var total_service = $('#mtce_amount_cash').val();

       			var amt = $('#mtce_service_amt'+button_id).val();
       			if(amt == ''){var amount_item = 0 }else{var amount_item = parseFloat($('#mtce_service_amt'+button_id).val())};

       			if(total_service == ''){var total_service_previous = 0;}else{var total_service_previous = parseFloat($('#mtce_amount_cash').val());};
       			if(grand_total == ''){var grand_total_previous = 0;}else{var grand_total_previous = parseFloat($('#mtce_amount').val());};

				var new_total_service = total_service_previous - amount_item;
				var new_grand_total = grand_total_previous - amount_item;
           		$('#mtce_amount_cash').val(new_total_service);
           		$('#mtce_amount_cash_2').val(new_total_service);
           		$('#mtce_amount').val(new_grand_total);
           		$('#mtce_amount_2').val(new_grand_total);
           		$('#'+button_id+'').remove();
           	});
		}

		function delete_mtce_stock_item_row()
		{
			$(document).on('click', '#delete_mtce_stock_item', function(){  
       			var button_id = $(this).attr("data-id");
       			var grand_total = $('#mtce_amount').val();
       			var total_stock = $('#mtce_amount_stock').val();

       			var amt = $('#mtce_stock_amt'+button_id).val();
       			if(amt == ''){var amount_item = 0 }else{var amount_item = parseFloat($('#mtce_stock_amt'+button_id).val())};

       			if(total_stock == ''){var total_stock_previous = 0;}else{var total_stock_previous = parseFloat($('#mtce_amount_stock').val());};
       			if(grand_total == ''){var grand_total_previous = 0;}else{var grand_total_previous = parseFloat($('#mtce_amount').val());};

				var new_total_stock = total_stock_previous - amount_item;
				var new_grand_total = grand_total_previous - amount_item;
           		$('#mtce_amount_stock').val(new_total_stock);
           		$('#mtce_amount_stock_2').val(new_total_stock);
           		$('#mtce_amount').val(new_grand_total);
           		$('#mtce_amount_2').val(new_grand_total);
           		$('#'+button_id+'').remove();
           	});
		}

		function save_mtce_invoice()
		{
			$(document).on('click','#mtce_save_btn',function(e)
			{
				e.preventDefault();
				var last_tr_id_service = $("#mtce_service_items_table tr:last").attr("id");
				var last_tr_select_service = $("#mtce_service_items_table tr:last option:selected").val();
				var last_tr_id_stock = $("#mtce_stock_items_table tr:last").attr("id");
				var last_tr_select_stock = $("#mtce_stock_items_table tr:last option:selected").val();
				var mtce_debit = $('#mtce_debit').val();
				var mtce_amount = $('#mtce_amount').val();
				var mtce_credit_cash = $('#mtce_credit_cash').val();
				var mtce_amount_cash = $('#mtce_amount_cash').val();
				var mtce_credit_stock = $('#mtce_credit_stock').val();
				var mtce_amount_stock = $('#mtce_amount_stock').val();
				var mtce_date = $('#mtce_date').val();
				var serviced_by = $('#serviced_by').val();
				var mtce_address = $('#mtce_address').val();
				var mtce_phone = $('#mtce_phone').val();
				var mtce_narration = $('#mtce_narration').val();
				var page = window.location.pathname;
				if (mtce_debit !=="") 
				{
					if (mtce_amount !=="") 
					{
						//if (serviced_by !=="") 
						//{
							//if (mtce_address !=="") 
							//{
								if (mtce_date !=="") 
								{
									//if (mtce_phone !=="") 
									//{
										if (mtce_credit_cash !=="") 
										{
											if (mtce_credit_stock !=="") 
											{
												if (mtce_credit_stock !== mtce_debit) 
												{
													if(last_tr_select_service =="" || last_tr_select_service ==0)
													{
														$('#'+last_tr_id_service +'').remove();
													};
													if(last_tr_select_stock =="" || last_tr_select_stock ==0)
													{
														$('#'+last_tr_id_stock +'').remove();
													};
													$.ajax({
											             url:'/layout/vouchers/mtce_save.php',
											             method:'POST',
											             data:$('#mtce_create_form').serialize(),
											             success:function(data)
											             {
											             	$('#mtce_create_form').trigger('reset');
											             	window.location.href= page;
											             	//window.location.href="/layout/vouchers/mtce_list.php";
											             }
											        });
										        } 
												else 
												{
													alert('Please Debit and Credit - Stock cannot be the same!');
												};
											} 
											else 
											{
												alert('Please select the Stock Consumption Ledger!');
											};
										} 
										else 
										{
											alert('Please select the cash/bank ledger paying or the name of the person who did the servicing, if its on credit!');
										};
									/*} 
									else 
									{
										alert('Please type the phone number of the person who serviced the item!');
									};*/
								} 
								else 
								{
									alert('Please select the date of servicing!');
								};
							/*} 
							else 
							{
								alert('Please type the address of the person who did the servicing!');
							};*/
						/*} 
						else 
						{
							alert('Please type the name of the person/institution who did the servicing!');
						};*/
					} 
					else 
					{
						alert('Please select the provide the service component and their amount!');
					};
				} 
				else 
				{
					alert('Please select the Expenditure ledger!');
				};
			});
		}

		function edit_mtce_invoice()
		{
			$(document).on('click','#btn_edit_mtce',function(){
				var mtce_sheet_id = $(this).attr('data-id');
				$.ajax({
		             url:'/layout/vouchers/mtce_edit.php',
		             method:'POST',
		             data:{mtce_sheet_id:mtce_sheet_id},
		             datatype:'JSON',
		             success:function(data)
		             {
		             	var res = $.parseJSON(data);
		             	$('#mtce_sheet_id').val(res[0]);
		             	$('#mtce_debit').val(res[1]);
		             	$('#mtce_credit_cash').val(res[2]);
		             	$('#mtce_credit_stock').val(res[3]);
		             	$('#mtce_date').val(res[4]);
		             	$('#mtce_amount_cash').val(res[5]);
		             	$('#mtce_amount_cash_2').val(res[5]);
		             	$('#mtce_amount_stock').val(res[6]);
		             	$('#mtce_amount_stock_2').val(res[6]);
		             	$('#mtce_amount').val(res[7]);
		             	$('#mtce_amount_2').val(res[7]);
		             	$('#serviced_by').val(res[8]);
		             	$('#mtce_address').val(res[9]);
		             	$('#mtce_phone').val(res[10]);
		             	$('#mtce_narration').val(res[11]);
		             	$('#mtce_sheet_branch_id').val(res[12]);
		             	$.ajax({
				            url:'/layout/vouchers/mtce_service_list_edit.php',
				            method:'POST',
				            data:{mtce_sheet_id:mtce_sheet_id},
				            success:function(data)
				            {
				            	$('#mtce_service_items_list').html(data);
							}
			             });
		             	$.ajax({
				            url:'/layout/vouchers/mtce_stock_list_edit.php',
				            method:'POST',
				            data:{mtce_sheet_id:mtce_sheet_id},
				            success:function(data)
				            {
				            	$('#mtce_stock_items_list').html(data);
							}
			             });
		             	$('mtce_update_btn').show();
		             	$('#mtce_save_btn').hide();
						$('#mtce_create_modal').modal('show');
		             }
		        });
			});
		}

		function update_mtce_invoice()
		{
			$(document).on('click','#mtce_update_btn',function(e){
				e.preventDefault();
				var last_tr_id_service = $("#mtce_service_items_table tr:last").attr("id");
				var last_tr_select_service = $("#mtce_service_items_table tr:last option:selected").val();
				var last_tr_id_stock = $("#mtce_stock_items_table tr:last").attr("id");
				var last_tr_select_stock = $("#mtce_stock_items_table tr:last option:selected").val();
				var mtce_debit = $('#mtce_debit').val();
				var mtce_amount = $('#mtce_amount').val();
				var mtce_credit_cash = $('#mtce_credit_cash').val();
				var mtce_amount_cash = $('#mtce_amount_cash').val();
				var mtce_credit_stock = $('#mtce_credit_stock').val();
				var mtce_amount_stock = $('#mtce_amount_stock').val();
				var mtce_date = $('#mtce_date').val();
				var serviced_by = $('#serviced_by').val();
				var mtce_address = $('#mtce_address').val();
				var mtce_phone = $('#mtce_phone').val();
				var mtce_narration = $('#mtce_narration').val();
				var page = window.location.pathname;
				if (mtce_debit !=="") 
				{
					if (mtce_amount !=="") 
					{
						/*if (serviced_by !=="") 
						{
							if (mtce_address !=="") 
							{*/
								if (mtce_date !=="") 
								{
									//if (mtce_phone !=="") 
									//{
										if (mtce_credit_cash !=="") 
										{
											if (mtce_credit_stock !=="") 
											{
												if (mtce_credit_stock !== mtce_debit) 
												{
													if(last_tr_select_service =="" || last_tr_select_service ==0)
													{
														$('#'+last_tr_id_service +'').remove();
													};
													if(last_tr_select_stock =="" || last_tr_select_stock ==0)
													{
														$('#'+last_tr_id_stock +'').remove();
													};
													$.ajax({
											             url:'/layout/vouchers/mtce_update.php',
											             method:'POST',
											             data:$('#mtce_create_form').serialize(),
											             success:function(data)
											             {
											             	$('#mtce_create_form').trigger('reset');
											             	window.location.href= page;
											             	//window.location.href="/layout/vouchers/mtce_list.php";
											             }
											        });
										        } 
												else 
												{
													alert('Please Debit and Credit - Stock cannot be the same!');
												};
											} 
											else 
											{
												alert('Please select the Stock Consumption Ledger!');
											};
										} 
										else 
										{
											alert('Please select the cash/bank ledger paying or the name of the person who did the servicing, if its on credit!');
										};
									/*} 
									else 
									{
										alert('Please type the phone number of the person who serviced the item!');
									};*/
								} 
								else 
								{
									alert('Please select the date of servicing!');
								};
							/*} 
							else 
							{
								alert('Please type the address of the person who did the servicing!');
							};
						} 
						else 
						{
							alert('Please type the name of the person/institution who did the servicing!');
						};*/
					} 
					else 
					{
						alert('Please select the provide the service component and their amount!');
					};
				} 
				else 
				{
					alert('Please select the Expenditure ledger!');
				};
			});
		}
		
		function search_mtce_invoice_by_name()
		{
			$(document).on('keyup','#mtce_name',function(e){
				e.preventDefault();
				var company_id = $('#session_company_id').val();
				var name = $('#mtce_name').val();

				$.ajax({
					url:'/layout/vouchers/mtce_search_by_name.php',
					method:'POST',
					data:{name:name,company_id:company_id},
					success:function(data)
					{
						$('#mtce_list_table').html(data);
					}
		        });
			});
		}

		function search_mtce_invoice_by_date()
		{
			$(document).on('click','#mtce_search_icon',function(e){
				e.preventDefault();
				var company_id = $('#session_company_id').val();
				var start_date = $('#mtce_search_from').val();
				var end_date = $('#mtce_search_to').val();

				$.ajax({
		             url:'/layout/vouchers/mtce_search_by_date.php',
		             method:'POST',
		             data:{start_date:start_date,end_date:end_date,company_id:company_id},
		             success:function(data)
			             {
			             	$('#mtce_list_table').html(data);
			             }
		        });
			});
		}

		function delete_mtce_invoice()
		{
			$(document).on('click','#btn_delete_mtce_sheet',function(){
				var mtce_sheet_id = $(this).attr('data-id');
				var currentRow = $(this).closest("tr");
				var mtce_date = currentRow.find("td:eq(0)").text();
				var hired_by = currentRow.find("td:eq(2)").text();
				$('#mtce_invoice_delete_question').text('Are you sure you want to delete Maintenance Sheet of ' + mtce_date + ' for ' + hired_by + '?');
				$('#mtce_invoice_delete_modal').modal('show');
				$(document).on('click','#mtce_delete_yes',function(){
					$.ajax({  
						url:'/layout/vouchers/mtce_delete.php',  
						type:'POST',  
						data:{mtce_sheet_id:mtce_sheet_id},
						success:function(){
							$('#mtce_invoice_delete_modal').modal('hide');
							window.location.href="/layout/vouchers/mtce_list.php";
						}
		            });
			      });
				$(document).on('click','#mtce_delete_no',function(){
					$('#mtce_invoice_delete_modal').modal('hide');
				});
			});
		}

	//SALES
		function new_sales_modal()
		{
			$(document).on('click','#new_sales_icon',function()
			{
				var table_id = 1;
				$.ajax({
					url:'/layout/vouchers/sales_pending_list.php',
					method:'POST',
					data:{table_id:table_id},
					success:function(data)
					{
						$('#sales_update_btn').hide();
						$('#sales_save_btn').show();
						$('#sales_create_form').trigger('reset');
						$('#sales_product').val(1);
						$('#sales_credit').val(4);
						$('#sales_creditD').val(4);
						$('#sales_purity_discount').val(0.7);
						$('#sales_purity_discountD').val(0.7);
						$('#sales_item_list_table').html(data);
						$('#sales_create_modal').modal('show');
					}
				});
			});
		}

		function cancel_sales_modal()
		{
			$(document).on('click','#sales_cancel_btn',function()
			{
				var page = window.location.pathname;
				$('#sales_create_form').trigger('reset');
				$('#sales_create_modal').modal('hide');
				window.location.href= page;
				//window.location.href="/layout/vouchers/sales_list.php";
			});
		}

		function add_sales_item()
		{  
			$(document).on('click','#btn_sales_item_enter',function(){ 
				var purchase_id = $(this).attr('data-id');
				var currentRow = $(this).closest("tr");
				var list_id = currentRow.attr('id');
				var date = currentRow.find("td:eq(0)").text();
				var purchase_id = currentRow.find("td:eq(1)").text();
				var supplier = currentRow.find("td:eq(2)").text();
				var item_grams = currentRow.find("td:eq(3)").text();
				var item_water = currentRow.find("td:eq(4)").text();
				var item_karat = currentRow.find("td:eq(5)").text();
				var item_amount = currentRow.find("td:eq(6)").text();
				grams = parseFloat(item_grams);
				water = parseFloat(item_water);
				amount = parseFloat(item_amount);
				var grams_current = $('#sales_gram').val();
				var water_current = $('#sales_water').val();
				var purity_discount = $('#sales_purity_discount').val();
				if(grams_current == ''){var grams_previous = 0 }else{var grams_previous = parseFloat($('#sales_gram').val())};
					var grams_total = grams_previous + grams;
				if(water_current == ''){var water_previous = 0 }else{var water_previous = parseFloat($('#sales_water').val())};
					var water_total = water_previous + water;

				var grams_currentD = $('#sales_gramD').val();
				var water_currentD = $('#sales_waterD').val();
				if(grams_currentD == ''){var grams_previousD = 0 }else{var grams_previousD = parseFloat($('#sales_gramD').val())};
					var grams_totalD = grams_previousD + grams;
				if(water_currentD == ''){var water_previousD = 0 }else{var water_previousD = parseFloat($('#sales_waterD').val())};
					var water_totalD = water_previousD + water;

				var purchase_amountD_current = $('#purchase_amountD').val();
				if(purchase_amountD_current == ''){var purchase_amountD_previous = 0 }else{var purchase_amountD_previous = parseFloat($('#purchase_amountD').val())};
					var purchase_amountD_total = purchase_amountD_previous + amount;

				var i = $('#sold_item_list_table tr:last').attr('data-id');
				i++; 
				$('#sold_item_list_table_body').append('<tr id="row_as'+i+'" data-id="'+ i +'"><td><a href="#"id="btn_delete_sales_item" data-id="'+i+'" data-id2="'+list_id+'">'+date+'</a></td><td class="action-td"><a href="#"id="btn_delete_sales_item" data-id="'+i+'" data-id2="'+list_id+'">'+purchase_id+'</a></td><td><a href="#"id="btn_delete_sales_item" data-id="'+i+'" data-id2="'+list_id+'">'+supplier+'</a></td><td class="amt-td"><a href="#"id="btn_delete_sales_item" data-id="'+i+'" data-id2="'+list_id+'">'+grams+'</a></td><td class="amt-td"><a href="#"id="btn_delete_sales_item" data-id="'+i+'" data-id2="'+list_id+'">'+water+'</a></td><td class="amt-td"><a href="#"id="btn_delete_sales_item" data-id="'+i+'" data-id2="'+list_id+'">'+item_karat+'</a></td><td class="amt-td"><a href="#"id="btn_delete_sales_item" data-id="'+i+'" data-id2="'+list_id+'">'+amount+'</a></td><input type="hidden" name="date[]" id="date" value="'+date+'"><input type="hidden" name="supplier[]" id="supplier" value="'+supplier+'"><input type="hidden" name="grams[]" id="grams" value="'+grams+'"><input type="hidden" name="water[]" id="water" value="'+water+'"><input type="hidden" name="karat[]" id="karat" value="'+item_karat+'"><input type="hidden" name="amount[]" id="amount" value="'+amount+'"><input type="hidden" name="purchase_id[]" id="purchase_id" value="'+purchase_id+'"><input type="hidden" name="list_id[]" id="list_id" value="'+list_id+'"></tr>');
				currentRow.hide();
				$('#sales_gram').val(grams_total.toFixed(2));
				$('#sales_water').val(water_total.toFixed(2));
				$('#sales_gramD').val(grams_totalD.toFixed(2));
				$('#sales_waterD').val(water_totalD.toFixed(2));
				$('#purchase_gramD').val(grams_totalD.toFixed(2));
				$('#purchase_waterD').val(water_totalD.toFixed(2));
				$('#purchase_amountD').val(purchase_amountD_total.toFixed(2));
				//CALCULATIONS
					/*POUNDS*/
						var sales_gram = $('#sales_gram').val();
						var sales_water = $('#sales_water').val();
						var sales_price = $('#sales_price').val();
						if (sales_gram > 0) 
						{
							var pounds = Math.trunc(($('#sales_gram').val() / 7.75)*100)/100;
							$('#sales_pounds').val(pounds);
							$('#sales_poundsD').val(pounds);
						};

					/*DENSITY*/
						if (sales_gram > 0 && sales_water > 0) 
						{
							var density = Math.trunc((sales_gram / sales_water)*100)/100;
							$('#sales_density').val(density);
							$('#sales_densityD').val(density);
						};
					/*PURITY*/
						if (sales_gram > 0 && sales_water > 0) 
						{
							var carat = Math.trunc((((density - 10.51) * 52.838)/density)*100)/100;
							var purity =Math.trunc(((carat/24)*100)*100)/100;
							$('#sales_purity').val(purity);
							$('#sales_purityD').val(purity);

							var discounted_purity = purity - purity_discount;
							$('#sales_discounted_purity').val(discounted_purity);
							$('#sales_discounted_purityD').val(discounted_purity);
						};
					/*CARAT*/
						if (sales_gram > 0 && sales_water > 0) 
						{
							var carat = Math.trunc((((density - 10.51) * 52.838)/density)*100)/100;
							$('#sales_karat').val(carat);
							$('#sales_karatD').val(carat);

							var discounted_carat = Number(carat - (24 * (purity_discount/100))).toFixed(2);
							$('#sales_discounted_karat').val(discounted_carat);
							$('#sales_discounted_karatD').val(discounted_carat);
						};
					/*PRICE_PER_POUND*/
						var sales_karat = $('#sales_karat').val();
						if (sales_karat > 0 && sales_price > 0) 
						{
							var sales_price_per_pound = (sales_karat * sales_price)/23;
							var amount = parseFloat(sales_price_per_pound).toFixed(2);
							var discounted_price_per_pound = Number((discounted_carat * sales_price)/23).toFixed(2);
							var ppp = addCommas(amount);
							var dppp = addCommas(discounted_price_per_pound);
							$('#sales_ppp').val(amount);
							$('#sales_pppD').val(ppp);
					        $('#sales_discounted_ppp').val(discounted_price_per_pound);
					        $('#sales_discounted_pppD').val(dppp);
						};
					/*AMOUNT*/
						if (sales_gram > 0 && sales_water > 0 && sales_price > 0) 
						{
							var amount1 = Math.trunc(((carat * $('#sales_price').val())/23)*pounds);
							var discounted_amount = Math.trunc(((discounted_carat * sales_price)/23) * pounds);
							var discounted_amount1 = addCommas(discounted_amount);
							$('#sales_discounted_amount').val(discounted_amount);
							$('#sales_discounted_amountD').val(discounted_amount1);

							var amount = addCommas(amount1);
			    			$('#sales_amount').val(amount1);
			    			$('#sales_amountD').val(amount);
			    		};
			});
		}

		function delete_sales_item()
		{
			$(document).on('click', '#btn_delete_sales_item', function()
			{  
       			var button_id = $(this).attr("data-id");  
       			var list_id = $(this).attr("data-id2"); 
       			var currentRow=$(this).closest("tr");
				var item_date = currentRow.find("td:eq(0)").text();
				var item_purchase_id = currentRow.find("td:eq(1)").text();
				var item_supplier = currentRow.find("td:eq(2)").text();
				var item_grams = currentRow.find("td:eq(3)").text();
				var item_water = currentRow.find("td:eq(4)").text();
				var item_karat = currentRow.find("td:eq(5)").text();
				var item_amount = currentRow.find("td:eq(6)").text();
       			
				grams = parseFloat(item_grams);
				water = parseFloat(item_water);
				amount = parseFloat(item_amount);
				var grams_current = $('#sales_gram').val();
				var water_current = $('#sales_water').val();
				var purity_discount = $('#sales_purity_discount').val();
				if(grams_current == ''){var grams_previous = 0 }else{var grams_previous = parseFloat($('#sales_gram').val())};
				var grams_total = grams_previous - grams;

				if(water_current == ''){var water_previous = 0 }else{var water_previous = parseFloat($('#sales_water').val())};
				var water_total = water_previous - water;

				var grams_currentD = $('#sales_gramD').val();
				var water_currentD = $('#sales_waterD').val();
				if(grams_currentD == ''){var grams_previousD = 0 }else{var grams_previousD = parseFloat($('#sales_gramD').val())};
				var grams_totalD = grams_previousD - grams;

				if(water_currentD == ''){var water_previousD = 0 }else{var water_previousD = parseFloat($('#sales_waterD').val())};
				var water_totalD = water_previousD - water;
				
				var purchase_amountD_current = $('#purchase_amountD').val();
				if(purchase_amountD_current == ''){var purchase_amountD_previous = 0 }else{var purchase_amountD_previous = parseFloat($('#purchase_amountD').val())};
				var purchase_amountD_total = purchase_amountD_previous - amount;

				$('#sales_gram').val(grams_total.toFixed(2));
				$('#sales_water').val(water_total.toFixed(2));
				$('#sales_gramD').val(grams_totalD.toFixed(2));
				$('#sales_waterD').val(water_totalD.toFixed(2));
				$('#purchase_gramD').val(grams_totalD.toFixed(2));
				$('#purchase_waterD').val(water_totalD.toFixed(2));
				$('#purchase_amountD').val(purchase_amountD_total.toFixed(2));
           		$('#row_as'+button_id+'').remove();

				var i = $('#pending_item_list_table tr:last').attr('data-id');
				i++;

       			$('#pending_item_list_table_body').append('<tr id="sales_item_list'+ i +'" data-id="'+ i +'"><td><a href="#" id="btn_sales_item_enter" data-id="'+ item_purchase_id +'">'+ item_date +'</a></td><td class="action-td"><a href="#" id="btn_sales_item_enter" data-id="'+ item_purchase_id +'">'+ item_purchase_id +'</a></td><td><a href="#" id="btn_sales_item_enter" data-id="'+ item_purchase_id +'">'+ item_supplier +'</a></td><td class="amt-td"><a href="#" id="btn_sales_item_enter" data-id="'+ item_purchase_id +'">'+ item_grams +'</a></td><td class="amt-td"><a href="#" id="btn_sales_item_enter" data-id="'+ item_purchase_id +'">'+ item_water +'</a></td><td class="amt-td"><a href="#" id="btn_sales_item_enter" data-id="'+ item_purchase_id +'">'+ item_karat +'</a></td><td class="amt-td"><a href="#" id="btn_sales_item_enter" data-id="'+ item_purchase_id +'">'+ amount +'</a></td></tr>');
       				
           		//CALCULATIONS
	           		/*POUNDS*/
							var sales_gram = $('#sales_gram').val();
							var sales_water = $('#sales_water').val();
							var sales_price = $('#sales_price').val();
							if (sales_gram > 0) 
							{
						    	var pounds = Math.trunc(($('#sales_gram').val() / 7.75)*100)/100;
						        $('#sales_pounds').val(pounds);
						        $('#sales_poundsD').val(pounds);
					    	}
					    	else
					    	{
					    		$('#sales_pounds').val('');
						        $('#sales_poundsD').val('');
					    	};
					/*DENSITY*/
							if (sales_gram > 0 && sales_water > 0) 
							{
					        	var density = Math.trunc((sales_gram / sales_water)*100)/100;
					        	$('#sales_density').val(density);
					        	$('#sales_densityD').val(density);
							}
					    	else
					    	{
					    		$('#sales_density').val('');
						        $('#sales_densityD').val('');
					    	};	
					/*CARAT*/
							if (sales_gram > 0 && sales_water > 0) 
							{
								var carat = Math.trunc((((density - 10.51) * 52.838)/density)*100)/100;
						        $('#sales_karat').val(carat);
						        $('#sales_karatD').val(carat);

								var discounted_carat = Number(carat - (24 * (purity_discount/100))).toFixed(2);
								$('#sales_discounted_karat').val(discounted_carat);
								$('#sales_discounted_karatD').val(discounted_carat);
					    	}
					    	else
					    	{
					    		$('#sales_karat').val('');
						        $('#sales_karatD').val('');
					    	};
					/*PURITY*/
							if (sales_gram > 0 && sales_water > 0) 
							{
								var purity =Math.trunc(((carat/24)*100)*100)/100;
					        	$('#sales_purity').val(purity);
					        	$('#sales_purityD').val(purity);

								var discounted_purity = purity - purity_discount;
								$('#sales_discounted_purity').val(discounted_purity);
								$('#sales_discounted_purityD').val(discounted_purity);
				        	}
					    	else
					    	{
					    		$('#sales_purity').val('');
						        $('#sales_purityD').val('');
					    	};
					/*PRICE_PER_POUND*/
							if (sales_karat > 0 && sales_price > 0) 
							{
								var sales_price_per_pound = (sales_karat * sales_price)/23;
								var amount = parseFloat(sales_price_per_pound).toFixed(2);
								var ppp = addCommas(amount);
						        $('#sales_ppp').val(amount);
						        $('#sales_pppD').val(ppp);
								
								var discounted_price_per_pound = Number((discounted_carat * sales_price)/23).toFixed(2);
								var dppp = addCommas(discounted_price_per_pound);
								$('#sales_discounted_ppp').val(discounted_price_per_pound);
								$('#sales_discounted_pppD').val(dppp);
					    	}
					    	else
					    	{
					    		$('#sales_ppp').val('');
						        $('#sales_pppD').val('');
					    	};
					/*AMOUNT*/
							if (sales_gram > 0 && sales_water > 0 && sales_price > 0) 
							{
								var amount1 = Math.trunc(((carat * $('#sales_price').val())/23)*pounds);
								var discounted_amount = Math.trunc(((discounted_carat * sales_price)/23) * pounds);
								var discounted_amount1 = addCommas(discounted_amount);
								$('#sales_discounted_amount').val(discounted_amount);
								$('#sales_discounted_amountD').val(discounted_amount1);
								var amount = addCommas(amount1);
				    			$('#sales_amount').val(amount1);
				    			$('#sales_amountD').val(amount);
				    		}
					    	else
					    	{
					    		$('#sales_amount').val('');
						        $('#sales_amountD').val('');
					    	};
           	});
		}
		//CALCULATIONS
			/*METHOD*/
				function sales_method()
				{
					$(document).on('change','#sales_method',function()
					{
						var sales_method = $('#sales_method').val();
						var sales_product = $('#sales_product').val();
						var sales_gram = $('#sales_gram').val();
						var sales_water = $('#sales_water').val();
						var sales_price = $('#sales_price').val();
						if(sales_method == 'Water_Density')
						{
							var purity_discount = 0.7;
						}
						else if(sales_method == 'XRF')
						{
							var purity_discount = 0.1;
						};

				        var density = Math.trunc((sales_gram / sales_water)*100)/100;
						var carat = Math.trunc((((density - 10.51) * 52.838)/density)*100)/100;
						var discounted_carat = Number(carat - (24 * (purity_discount/100))).toFixed(2);

						if(sales_product == 1)
						{
							var pounds = Number((sales_gram / 7.75).toFixed(2));
							var discounted_amount = Math.trunc(((discounted_carat * $('#sales_price').val())/23)*pounds);
						}
						else if(sales_product == 2)
						{
							var pounds = Number((sales_gram / 0.8).toFixed(2));
							var discounted_amount = Math.trunc($('#sales_price').val()*pounds);
						};

						var discounted_amount1 = addCommas(discounted_amount);
						$('#sales_discounted_amount').val(discounted_amount);
						$('#sales_discounted_amountD').val(discounted_amount1);

						var purity =Math.trunc(((carat/24)*100)*100)/100;
						var discounted_purity = Number(purity - purity_discount).toFixed(2);
						$('#sales_discounted_purity').val(discounted_purity);
						$('#sales_discounted_purityD').val(discounted_purity);

						$('#sales_discounted_karat').val(discounted_carat);
						$('#sales_discounted_karatD').val(discounted_carat);

						$('#sales_purity_discount').val(purity_discount);
						$('#sales_purity_discountD').val(purity_discount);

						var discounted_price_per_pound = Number((discounted_carat * sales_price)/23).toFixed(2);
						var dppp = addCommas(discounted_price_per_pound);
					    $('#sales_discounted_ppp').val(discounted_price_per_pound);
					    $('#sales_discounted_pppD').val(dppp);
					});
				}

			/*POUNDS*/
				function sales_set_pounds()
				{
					$(document).on('keyup','#sales_gram,#sales_water',function()
					{
						var sales_gram = $('#sales_gram').val();
						var sales_product = $('#sales_product').val();
						if (sales_gram > 0) 
						{
							if(sales_product == 1)
							{
								var pounds = Math.trunc((sales_gram / 7.75)*100)/100;
							}
							else if(sales_product == 2)
							{
								var pounds = Math.trunc((sales_gram / 0.8)*100)/100;
							};
					        $('#sales_pounds').val(pounds);
					        $('#sales_poundsD').val(pounds);
				    	};
					});
				}
			
			/*DENSITY*/
				function sales_set_density()
				{
					$(document).on('keyup','#sales_gram, #sales_water',function(){
						var sales_gram = $('#sales_gram').val();
						var sales_water = $('#sales_water').val();
						if (sales_gram > 0 && sales_water > 0) 
						{
							var density = Number((sales_gram / sales_water).toFixed(2));
				        	$('#sales_density').val(density);
				        	$('#sales_densityD').val(density);
						};
					});
				}
			
			/*CARAT*/
				function sales_set_carat()
				{
					$(document).on('keyup','#sales_gram, #sales_water',function(){
						var sales_gram = $('#sales_gram').val();
						var sales_water = $('#sales_water').val();
						var purity_discount = $('#sales_purity_discount').val();
						if (sales_gram > 0 && sales_water > 0) 
						{
							var density = Number((sales_gram / sales_water));
							var carat = Number((((density - 10.51) * 52.838)/density).toFixed(2));
					        $('#sales_karat').val(carat);
					        $('#sales_karatD').val(carat);

							var discounted_carat = Number(carat - (24 * (purity_discount/100))).toFixed(2);
							$('#sales_discounted_karat').val(discounted_carat);
							$('#sales_discounted_karatD').val(discounted_carat);
				    	};
					});
				}
			
			/*PURITY*/
				function sales_set_purity()
				{
					$(document).on('keyup','#sales_gram, #sales_water',function(){
						var sales_gram = $('#sales_gram').val();
						var sales_water = $('#sales_water').val();
						var purity_discount = $('#sales_purity_discount').val();
						if (sales_gram > 0 && sales_water > 0) 
						{
							var density = Number((sales_gram / sales_water));
							var carat = Number((((density - 10.51) * 52.838)/density).toFixed(2));
							var purity = Number((((carat/24)*100)*100)/100).toFixed(2);
				        	$('#sales_purity').val(purity);
				        	$('#sales_purityD').val(purity);

							var discounted_purity = purity - purity_discount;
							$('#sales_discounted_purity').val(discounted_purity);
							$('#sales_discounted_purityD').val(discounted_purity);
			        	};
					});
				}

			/*PRICE_PER_POUND*/
				function sales_price_per_pound()
				{
					$(document).on('keyup','#sales_price',function(){
						var sales_karat = $('#sales_karat').val();
						var sales_price = $('#sales_price').val();
						if (sales_karat > 0 && sales_price > 0) 
						{
							var sales_price_per_pound = (sales_karat * sales_price)/23;
							var amount = parseFloat(sales_price_per_pound).toFixed(2);
							var ppp = addCommas(amount);
					        $('#sales_ppp').val(amount);
					        $('#sales_pppD').val(ppp);

							var discounted_carat = $('#sales_discounted_karat').val();
							var discounted_price_per_pound = Number((discounted_carat * sales_price)/23).toFixed(2);
							var dppp = addCommas(discounted_price_per_pound);
							$('#sales_discounted_ppp').val(discounted_price_per_pound);
							$('#sales_discounted_pppD').val(dppp);
				    	};
					});
				}
			
			/*AMOUNT*/
				function sales_set_amount()
				{
					$(document).on('keyup','#sales_gram, #sales_water, #sales_price',function(){
						var sales_gram = $('#sales_gram').val();
						var sales_water = $('#sales_water').val();
						var sales_price = $('#sales_price').val();
						var sales_product = $('#sales_product').val();
						var purchase_amountD = $('#purchase_amountD').val();
						var discounted_carat = $('#sales_discounted_karat').val();
						if (sales_gram > 0 && sales_price > 0) 
						{
							var density = Number(((sales_gram / sales_water)*100)/100);
							var carat = Number((((density - 10.51) * 52.838)/density).toFixed(2));

							if(sales_product == 1)
							{
								var pounds = Math.trunc((sales_gram / 7.75)*100)/100;
								var amount1 = Math.trunc(((carat * sales_price)/23)*pounds);
								var discounted_amount = Math.trunc(((discounted_carat * sales_price)/23) * pounds);
							}
							else if(sales_product == 2)
							{
								var pounds = Math.trunc((sales_gram / 0.8)*100)/100;
								var amount1 = Math.trunc(sales_price * pounds);
								var discounted_amount = Math.trunc(sales_price * pounds);
							};

							var discounted_amount1 = addCommas(discounted_amount);
							$('#sales_discounted_amount').val(discounted_amount);
							$('#sales_discounted_amountD').val(discounted_amount1);

							if(sales_price !='' && sales_price > 0)
							{
								var profit1 = discounted_amount1 - purchase_amountD;
							}
							else
							{
								var profit1 = 0;
							};
							var amount = addCommas(amount1);
							var profit = addCommas(profit1);
			    			$('#sales_amount').val(amount1);
			    			$('#sales_amountD').val(amount);
			    			$('#profitabilityD').val(profit);
			    		};
					});
				}
				
		function save_sales()
		{
			$(document).on('click','#sales_save_btn',function(e){
				e.preventDefault();
				var sales_debit = $('#sales_debit').val();
				var sales_credit = $('#sales_credit').val();
				var sales_product = $('#sales_product').val();
				var sales_gram = $('#sales_gram').val();
				var sales_water = $('#sales_water').val();
				var sales_date = $('#sales_date').val();
				var sales_price = $('#sales_price').val();
				var sales_supplied_by = $('#sales_supplied_by').val();
				var page = window.location.pathname;
				if (sales_debit !=="") 
				{
					if (sales_credit !=="") 
					{
						if (sales_product !=="") 
						{
							if (sales_gram !=="") 
							{
								if (sales_water !=="") 
								{
									if (sales_date !=="") 
									{
										if (sales_price !=="") 
										{
											if (sales_supplied_by !=="") 
											{
												$.ajax({
										             url:'/layout/vouchers/sales_save.php',
										             method:'POST',
										             data:$('#sales_create_form').serialize(),
										             success:function(data)
										             {
		             									$('#sales_create_form').trigger('reset');
														$('#sales_create_modal').modal('hide');
														window.open('/layout/vouchers/sales_pdf.php', '_blank');
										             	window.location.href= page;
										             	//window.location.href="/layout/vouchers/sales_list.php";
			             								//window.open('/layout/vouchers/sales_display.php', '_blank');
										             }
										        });

											} 
											else 
											{
												alert('Please type the Name of the person buying the goods!');
											}
										} 
										else 
										{
											alert('Please type the PRICE for item!');
										}
									} 
									else 
									{
										alert('Please select the date of sale!');
									}
								} 
								else 
								{
									alert('Please type the WATER weight!');
								}
							} 
							else 
							{
								alert('Please type the TOP weight (GRAMS)!');
							}
						} 
						else 
						{
							alert('Please select the TYPE of Product sold!');
						}
					} 
					else 
					{
						alert('Please select the ledger from which the sales was made (Sales Account)!');
					}
				} 
				else 
				{
					alert('Please select the ledger into which the sale was made (Creditor/Supplier Account)!');
				};
			});
		}

		function edit_sales_invoice()
		{
			$(document).on('click','#btn_edit_sales',function(){
				var sales_id = $(this).attr('data-id');
				$.ajax({
					url:'/layout/vouchers/sales_edit.php',
					method:'POST',
					data:{sales_id:sales_id},
					datatype:'JSON',
					success:function(data)
					{
						var res = $.parseJSON(data);
						$('#sales_id').val(res[1]);
						$('#sales_company_id').val(res[3]);
						$('#sales_user_super_id').val(res[0]);
						$('#sales_user_id').val(res[4]);
						$('#sales_debit').val(res[6]);
						$('#sales_credit').val(res[5]);
						$('#sales_creditD').val(res[5]);
						$('#sales_date').val(res[8]);
						$('#sales_supplied_by').val(res[7]);
						$('#sales_phone_no').val(res[21]);
						$('#sales_location').val(res[22]);
						$('#sales_product').val(res[10]);
						$('#sales_gram').val(res[11]);
						$('#sales_water').val(res[12]);
						$('#sales_price').val(res[17]);
						$('#sales_amount').val(res[18]);
						$('#sales_amountD').val(res[18]);
						$('#sales_pounds').val(res[14]);
						$('#sales_poundsD').val(res[14]);
						$('#sales_density').val(res[13]);
						$('#sales_densityD').val(res[13]);
						$('#sales_karat').val(res[15]);
						$('#sales_karatD').val(res[15]);
						$('#sales_purity').val(res[16]);
						$('#sales_purityD').val(res[16]);
						$('#sales_ppp').val(res[23]);
						$('#sales_pppD').val(res[23]);
						$('#sales_pieces').val(res[20]);
						$('#sales_narration').val(res[19]);
						$('#sales_gramD').val(res[24]);
						$('#sales_waterD').val(res[25]);
						$('#sales_branch_id').val(res[26]);
						$('#purchase_gramD').val(res[24]);
						$('#purchase_waterD').val(res[25]);
						$('#purchase_amountD').val(res[27]);
						$('#profitabilityD').val(res[28]);
						$('#sales_item_list_table').html(res[29]);
						$('#sales_method').val(res[30]);
						$('#sales_purity_discount').val(res[31]);
						$('#sales_purity_discountD').val(res[31]);
						$('#sales_discounted_purity').val(res[32]);
						$('#sales_discounted_purityD').val(res[32]);
						$('#sales_discounted_karat').val(res[33]);
						$('#sales_discounted_karatD').val(res[33]);
						$('#sales_discounted_ppp').val(res[34]);
						$('#sales_discounted_pppD').val(res[34]);
						$('#sales_discounted_amount').val(res[35]);
						$('#sales_discounted_amountD').val(res[35]);
						$.ajax({
							url:'/layout/vouchers/sales_sold_items_edit.php',
							method:'POST',
							data:{sales_id:sales_id},
							success:function(data)
							{
								$('#sold_item_list_div').html(data);
							}
						});
						$('#sales_update_btn').show();
						$('#sales_save_btn').hide();
						$('#sales_create_modal').modal('show');
					}
		        });
			});
		}

		function update_sales_invoice()
		{
			$(document).on('click','#sales_update_btn',function(e){
				e.preventDefault();
				var sales_debit = $('#sales_debit').val();
				var sales_credit = $('#sales_credit').val();
				var sales_product = $('#sales_product').val();
				var sales_gram = $('#sales_gram').val();
				var sales_water = $('#sales_water').val();
				var sales_date = $('#sales_date').val();
				var sales_price = $('#sales_price').val();
				var sales_supplied_by = $('#sales_supplied_by').val();
				var page = window.location.pathname;
				if (sales_debit !=="") 
				{
					if (sales_credit !=="") 
					{
						if (sales_product !=="") 
						{
							if (sales_gram !=="") 
							{
								if (sales_water !=="") 
								{
									if (sales_date !=="") 
									{
										if (sales_price !=="") 
										{
											if (sales_supplied_by !=="") 
											{
												$.ajax({
										             url:'/layout/vouchers/sales_update.php',
										             method:'POST',
										             data:$('#sales_create_form').serialize(),
										             success:function(data)
											             {
			             									$('#sales_create_form').trigger('reset');
															$('#sales_create_modal').modal('hide');
															window.open('/layout/vouchers/sales_pdf.php', '_blank');
											             	window.location.href= page;
											             	//window.location.href="/layout/vouchers/sales_list.php";
				             								//window.open('/layout/vouchers/sales_display.php', '_blank');
											             }
										        });

											} 
											else 
											{
												alert('Please type the Name of the person buying the goods!');
											}
										} 
										else 
										{
											alert('Please type the PRICE for item!');
										}
									} 
									else 
									{
										alert('Please select the date of sale!');
									}
								} 
								else 
								{
									alert('Please type the WATER weight!');
								}
							} 
							else 
							{
								alert('Please type the TOP weight (GRAMS)!');
							}
						} 
						else 
						{
							alert('Please select the TYPE of Product sold!');
						}
					} 
					else 
					{
						alert('Please select the ledger from which the sales was made (Sales Account)!');
					}
				} 
				else 
				{
					alert('Please select the ledger into which the sale was made (Creditor/Supplier Account)!');
				};
			});
		}

		function search_sales_by_name()
		{
			$(document).on('keyup','#sales_search_name',function(e){
				e.preventDefault();
				var company_id = $('#session_company_id').val();
				var sales_search_name = $('#sales_search_name').val();

				$.ajax({
		             url:'/layout/vouchers/sales_search_by_name.php',
		             method:'POST',
		             data:{sales_search_name:sales_search_name,company_id:company_id},
		             success:function(data)
			             {
			             	$('#sales_list_card_body').html(data);
			             }
		        });
			});
		}

		function search_sales_by_date()
		{
			$(document).on('click','#sales_search_icon',function(e){
				e.preventDefault();
				var company_id = $('#session_company_id').val();
				var start_date = $('#sales_search_from').val();
				var end_date = $('#sales_search_to').val();

				$.ajax({
		             url:'/layout/vouchers/sales_search_by_date.php',
		             method:'POST',
		             data:{start_date:start_date,end_date:end_date,company_id:company_id},
		             success:function(data)
		             {
		             	$('#sales_list_card_body').html(data);
		             }
		        });
			});
		}

		function reprint_sales()
		{
			$(document).on('click','#btn_single_sales_reprint',function()
			{
				var sales_id = $(this).attr('data-id');
				$.ajax({
					url:'/layout/vouchers/sales_reprint.php',
					method:'POST',
					data:{
						sales_id:sales_id
					},
					success:function(data)
					{
						window.open('/layout/vouchers/sales_pdf.php', '_blank');
					}
		        });
			});
		}

		function delete_sales()
		{
			$(document).on('click','#btn_delete_sales',function(){
				var sales_id = $(this).attr('data-id');
				var currentRow=$(this).closest("tr");
				var sales_date = currentRow.find("td:eq(1)").text();
				var Supplier = currentRow.find("td:eq(3)").text();
				$('#sales_invoice_delete_question').text('Are you sure you want to delete sales invoice of ' + sales_date + ' for ' + Supplier + '?');
				$('#sales_invoice_delete_modal').modal('show');
				$(document).on('click','#sales_delete_yes',function(){
					$.ajax({  
		                 url:'/layout/vouchers/sales_delete.php',  
		                 type:'POST',  
		                 data:{sales_id:sales_id},
		                 success:function(){
		                 	$('#sales_invoice_delete_modal').modal('hide');
		                 	window.location.href="/layout/vouchers/sales_list.php";
		                 }  
		            });
			      });
				$(document).on('click','#sales_delete_no',function(){
					$('#sales_invoice_delete_modal').modal('hide');
				});
			});
		}

	//BULK_SALES
		function new_bulk_sales_modal()
		{
			$(document).on('click','#new_bulk_sales_icon',function()
			{
				$('#bulk_sales_update_btn').hide();
				$('#bulk_sales_save_btn').show();
				$('#bulk_sales_create_form').trigger('reset');
				$('#bulk_sales_product').val(1);
				$('#bulk_sales_credit').val(4);
				$('#bulk_sales_creditD').val(4);
				$('#bulk_sales_create_modal').modal('show');
			});
		}

		function bulk_sales_search_pending_items()
		{
			$(document).on('keyup','#bulk_sales_search_pending',function()
			{
				var search = $(this).val();
				$.ajax({
					url:'/layout/vouchers/bulk_sales_search_pending_items.php',
					method:'POST',
					data:{search:search},
					success:function(data)
					{
						$('#bulk_sales_pending_list_search_table_div').html(data);
					}
				});
			});
		}

		function bulk_sales_add_ledger()
		{
			$(document).on('click','#new_bulk_sales_payment_ledger',function(){
				var i = $('#bulk_sales_payment_list_table tr:last').attr('id');
				$.ajax({
					url:'/layout/vouchers/bulk_sales_add_ledger.php',
					method:'POST',
					data:{i:i},
					success:function(data)
					{
						$('#bulk_sales_payment_list_table').append(data);
					}
				});
			});
		}

		function bulk_sales_delete_ledger()
		{
			$(document).on('click', '.btn_delete_bulk_sales_payment_ledger', function()
			{  
				var tr_id = $(this).closest("tr").attr("id");
				$('#'+tr_id+'').remove();
				var sum = 0;
				$(".bulk_sales_payment_amount").each(function()
				{
					sum += +$(this).val();
				});
				$("#bulk_sales_payment_amount_total").val(sum);
			});
		}

		function bulk_sales_ledger_group_id()
		{
			$(document).on('change','.bulk_sales_payment_ledger_id',function(){
				var tr_id = $(this).closest('tr').attr('id');
				var ledger_id = $(this).val();
				$.ajax({
					url:'/layout/vouchers/bulk_sales_ledger_group_id.php',
					method:'POST',
					data:{ledger_id:ledger_id},
					success:function(data)
					{
						$('#bulk_sales_payment_ledger_group_id'+tr_id).val(data);
					}
				});
			});
		}

		function bulk_sales_sum_payment_amount()
		{
			$(document).on('keyup', '.bulk_sales_payment_amount', function()
			{  
				var button_id = $(this).closest('tr').attr('id');
				var ledger_id = $('#bulk_sales_payment_ledger_id'+button_id).val();
				
				if(ledger_id !='' && ledger_id > 0)
				{
					var sum = 0;
					$(".bulk_sales_payment_amount").each(function(){
						sum += +$(this).val();
					});
					$("#bulk_sales_payment_amount_total").val(sum);
				}
				else
				{
					$(this).val(0);
					alert('Please select the ledger first!');
				};
			});
		}
		
		function bulk_sales_set_item_sales_amount()
		{
			$(document).on('keyup','.bulk_sales_search_selling_price, .bulk_sales_search_weight, .bulk_sales_search_water',function(){
				var currentRow = $(this).closest("tr");
				var tr_id = currentRow.attr("data-id");
				var product_id = $('#bulk_sales_search_product_id'+tr_id).val();
				var weight = $('#bulk_sales_search_weight'+tr_id).val();
				var water = $('#bulk_sales_search_water'+tr_id).val();
				var price = $('#bulk_sales_search_selling_price'+tr_id).val();
				if(product_id == 1)
				{
					var pounds = Math.trunc((weight / 7.75)*100)/100;
				}
				else if(product_id == 2)
				{
					var pounds = Math.trunc((weight / 0.8)*100)/100;
				};
				
				var density = Math.trunc((weight / water)*100)/100;
				var karat = Math.trunc((((density - 10.51) * 52.838)/density)*100)/100;
				var purity =Math.trunc(((karat/24)*100)*100)/100;
				var price_per_pound = (karat * price)/23;
				if(product_id == 1)
				{
					var amount = Math.trunc(((karat * price)/23)*pounds);
				}
				else if(product_id == 2)
				{
					var amount = Math.trunc(price * pounds);
				};
				var amount1 = addCommas(amount);
				$('#bulk_sales_search_pounds'+tr_id).val(pounds);
				$('#bulk_sales_search_poundsD'+tr_id).val(pounds);
				$('#bulk_sales_search_density'+tr_id).val(density);
				$('#bulk_sales_search_densityD'+tr_id).val(density);
				$('#bulk_sales_search_karat'+tr_id).val(karat);
				$('#bulk_sales_search_karatD'+tr_id).val(karat);
				$('#bulk_sales_search_sold_amount'+tr_id).val(amount);
				$('#bulk_sales_search_sold_amountD'+tr_id).val(amount1);
				
				var weight = 0;
				var water = 0;
				var total_amount = 0;
				$(".bulk_sales_search_selling_price").each(function()
				{
					var tr_id = $(this).closest('tr').attr('data-id');
					var price = $('#bulk_sales_search_selling_price'+tr_id).val();
					if(price > 0)
					{
						weight += +$('#bulk_sales_search_weight'+tr_id).val();
						water += +$('#bulk_sales_search_water'+tr_id).val();
						total_amount += +$('#bulk_sales_search_sold_amount'+tr_id).val();
					};
				});
			});
		}

		function bulk_sales_search_select_items()
		{
			$(document).on('click','#btn_bulk_sales_item_select',function()
			{
				var x = $(this).attr('data-id');
				var i = $('#bulk_sales_selected_item_list_table tr:last').attr('data-id');
				
				var supplier = $('#bulk_sales_search_supplier'+x).val();
				var purchase_id = $('#bulk_sales_search_purchase_id'+x).val();
				var product_id = $('#bulk_sales_search_product_id'+x).val();
				var purity = $('#bulk_sales_search_purity'+x).val();
				var price_per_pound = $('#bulk_sales_search_price_per_pound'+x).val();
				var pieces = $('#bulk_sales_search_pieces'+x).val();
				var weight = $('#bulk_sales_search_weight'+x).val();
				var water = $('#bulk_sales_search_water'+x).val();
				var density = $('#bulk_sales_search_density'+x).val();
				var karat = $('#bulk_sales_search_karat'+x).val();
				var pounds = $('#bulk_sales_search_pounds'+x).val();
				var price = $('#bulk_sales_search_price'+x).val();
				var amount = $('#bulk_sales_search_amount'+x).val();
				var selling_price = $('#bulk_sales_search_selling_price'+x).val();
				var sold_amount = $('#bulk_sales_search_sold_amount'+x).val();
				if(selling_price != '' && selling_price > 0)
				{
					$.ajax({
						url:'/layout/vouchers/bulk_sales_search_select_items.php',
						method:'POST',
						data:{
							supplier:supplier,
							purchase_id:purchase_id,
							product_id:product_id,
							purity:purity,
							price_per_pound:price_per_pound,
							pieces:pieces,
							weight:weight,
							water:water,
							density:density,
							karat:karat,
							pounds:pounds,
							price:price,
							amount:amount,
							selling_price:selling_price,
							sold_amount:sold_amount,
							i:i
						},
						success:function(data)
						{
							$('#bulk_sales_selected_item_list_table').append(data);
							
							var weight = 0;
							$('.bulk_sales_weight').each(function()
							{
								weight += +$(this).val();
							});

							var water = 0;
							$('.bulk_sales_water').each(function()
							{
								water += +$(this).val();
							});

							var pounds = 0;
							$('.bulk_sales_pounds').each(function()
							{
								pounds += +$(this).val();
							});

							var amount = 0;
							$('.bulk_sales_sold_amount').each(function()
							{
								amount += +$(this).val();
							});

							$('#bulk_sales_total_weight').val(weight);
							$('#bulk_sales_total_weightD').val(weight);
							$('#bulk_sales_total_water').val(water);
							$('#bulk_sales_total_waterD').val(water);
							$('#bulk_sales_total_pounds').val(pounds);
							$('#bulk_sales_total_poundsD').val(pounds);
							$('#bulk_sales_total_amount').val(amount);
							$('#bulk_sales_total_amountD').val(amount);

							$('#bulk_sales_pending_list_search_table_div').html('');
							$('#bulk_sales_search_pending').val('');
							$('#bulk_sales_search_pending').focus();
						}
					});
				}
				else
				{
					alert('Please the selling price cannot be EMPTY!');
				};
			});
		}

		function bulk_sales_delete_selected_item()
		{
			$(document).on('click', '#btn_delete_bulk_sales_select_item', function()
			{  
       			var i = $(this).attr('data-id');
           		$('#bulk_sales_item_list'+i).remove();
							
				var weight = 0;
				$('.bulk_sales_weight').each(function()
				{
					weight += +$(this).val();
				});

				var water = 0;
				$('.bulk_sales_water').each(function()
				{
					water += +$(this).val();
				});

				var pounds = 0;
				$('.bulk_sales_pounds').each(function()
				{
					pounds += +$(this).val();
				});

				var amount = 0;
				$('.bulk_sales_sold_amount').each(function()
				{
					amount += +$(this).val();
				});

				$('#bulk_sales_total_weight').val(weight);
				$('#bulk_sales_total_weightD').val(weight);
				$('#bulk_sales_total_water').val(water);
				$('#bulk_sales_total_waterD').val(water);
				$('#bulk_sales_total_pounds').val(pounds);
				$('#bulk_sales_total_poundsD').val(pounds);
				$('#bulk_sales_total_amount').val(amount);
				$('#bulk_sales_total_amountD').val(amount);
           	});
		}

		function cancel_bulk_sales_modal()
		{
			$(document).on('click','#bulk_sales_cancel_btn',function()
			{
				var page = window.location.pathname;
				$('#bulk_sales_create_form').trigger('reset');
				$('#bulk_sales_create_modal').modal('hide');
				window.location.href= page;
				//window.location.href="/layout/vouchers/sales_list.php";
			});
		}

		function save_bulk_sales()
		{
			$(document).on('click','#bulk_sales_save_btn',function(e){
				e.preventDefault();
				var bulk_sales_debit = $('#bulk_sales_debit').val();
				var bulk_sales_credit = $('#bulk_sales_credit').val();
				var bulk_sales_total_weight = $('#bulk_sales_total_weight').val();
				var bulk_sales_date = $('#bulk_sales_date').val();
				var bulk_sales_total_water = $('#bulk_sales_total_water').val();
				var bulk_sales_total_amount = $('#bulk_sales_total_amount').val();
				var page = window.location.pathname;
				if (bulk_sales_debit !="") 
				{
					if (bulk_sales_credit !="") 
					{
						if (bulk_sales_total_weight !="") 
							{
								if (bulk_sales_total_water !="") 
								{
									if (bulk_sales_date !="") 
									{
										if (bulk_sales_total_amount !="") 
										{
											$.ajax({
												url:'/layout/vouchers/bulk_sales_save.php',
												method:'POST',
												data:$('#bulk_sales_create_form').serialize(),
												success:function(data)
												{
												$('#bulk_sales_create_form').trigger('reset');
												$('#bulk_sales_create_modal').modal('hide');
												window.open('/layout/vouchers/bulk_sales_pdf.php', '_blank');
												window.location.href= page;
												}
											});
										} 
										else 
										{
											alert('Please type the PRICE for item!');
										};
									} 
									else 
									{
										alert('Please select the date of sale!');
									};
								} 
								else 
								{
									alert('Please type the WATER weight!');
								};
							} 
							else 
							{
								alert('Please type the TOP weight (GRAMS)!');
							};
					} 
					else 
					{
						alert('Please select the ledger from which the sales was made (Sales Account)!');
					};
				} 
				else 
				{
					alert('Please select the ledger into which the sale was made (Creditor/Supplier Account)!');
				};
			});
		}

		function edit_bulk_sales_invoice()
		{
			$(document).on('click','#btn_edit_bulk_sales',function(){
				var bulk_sales_id = $(this).attr('data-id');
				$.ajax({
					url:'/layout/vouchers/bulk_sales_edit.php',
					method:'POST',
					data:{bulk_sales_id:bulk_sales_id},
					datatype:'JSON',
					success:function(data)
					{
						var res = $.parseJSON(data);
						$('#bulk_sales_payment_list_div').html(res[0]);
						$('#bulk_sales_selected_item_list_table_div').html(res[1]);
						$('#bulk_sales_total_weight').val(res[3]);
						$('#bulk_sales_total_weightD').val(res[3]);
						$('#bulk_sales_total_water').val(res[4]);
						$('#bulk_sales_total_waterD').val(res[4]);
						$('#bulk_sales_total_pounds').val(res[5]);
						$('#bulk_sales_total_poundsD').val(res[5]);
						$('#bulk_sales_total_amount').val(res[6]);
						$('#bulk_sales_total_amountD').val(res[6]);
						$('#bulk_sales_id').val(res[2][0]);
						$('#bulk_sales_debit').val(res[2][2]);
						$('#bulk_sales_credit').val(res[2][1]);
						$('#bulk_sales_creditD').val(res[2][1]);
						$('#bulk_sales_date').val(res[2][4]);
						$('#bulk_sales_supplied_by').val(res[2][3]);
						$('#bulk_sales_narration').val(res[2][5]);
						$('#bulk_sales_phone_no').val(res[2][6]);
						$('#bulk_sales_location').val(res[2][7]);
						$('#bulk_sales_update_btn').show();
						$('#bulk_sales_save_btn').hide();
						$('#bulk_sales_create_modal').modal('show');
					}
				});
			});
		}

		function update_bulk_sales_invoice()
		{
			$(document).on('click','#bulk_sales_update_btn',function(e){
				e.preventDefault();
				var bulk_sales_debit = $('#bulk_sales_debit').val();
				var bulk_sales_credit = $('#bulk_sales_credit').val();
				var bulk_sales_total_weight = $('#bulk_sales_total_weight').val();
				var bulk_sales_date = $('#bulk_sales_date').val();
				var bulk_sales_total_water = $('#bulk_sales_total_water').val();
				var bulk_sales_total_amount = $('#bulk_sales_total_amount').val();
				var page = window.location.pathname;
				if (bulk_sales_debit !="") 
				{
					if (bulk_sales_credit !="") 
					{
						if (bulk_sales_total_weight !="") 
							{
								if (bulk_sales_total_water !="") 
								{
									if (bulk_sales_date !="") 
									{
										if (bulk_sales_total_amount !="") 
										{
											$.ajax({
												url:'/layout/vouchers/bulk_sales_update.php',
												method:'POST',
												data:$('#bulk_sales_create_form').serialize(),
												success:function()
												{
													$('#bulk_sales_create_form').trigger('reset');
													$('#bulk_sales_create_modal').modal('hide');
													window.open('/layout/vouchers/bulk_sales_pdf.php', '_blank');
													window.location.href= page;
												}
											});
										} 
										else 
										{
											alert('Please type the PRICE for item!');
										};
									} 
									else 
									{
										alert('Please select the date of sale!');
									};
								} 
								else 
								{
									alert('Please type the WATER weight!');
								};
							} 
							else 
							{
								alert('Please type the TOP weight (GRAMS)!');
							};
					} 
					else 
					{
						alert('Please select the ledger from which the sales was made (Sales Account)!');
					};
				} 
				else 
				{
					alert('Please select the ledger into which the sale was made (Creditor/Supplier Account)!');
				};
			});
		}

		function search_bulk_sales_by_name()
		{
			$(document).on('keyup','#bulk_sales_search_name',function(e){
				e.preventDefault();
				var company_id = $('#session_company_id').val();
				var sales_search_name = $('#bulk_sales_search_name').val();

				$.ajax({
					url:'/layout/vouchers/bulk_sales_search_by_name.php',
					method:'POST',
					data:{sales_search_name:sales_search_name,company_id:company_id},
					success:function(data)
						{
							$('#bulk_sales_list_card_body').html(data);
						}
				});
			});
		}

		function search_bulk_sales_by_date()
		{
			$(document).on('change','#bulk_sales_search_from, #bulk_sales_search_to',function(e){
				e.preventDefault();
				var start_date = $('#bulk_sales_search_from').val();
				var end_date = $('#bulk_sales_search_to').val();

				$.ajax({
					url:'/layout/vouchers/bulk_sales_search_by_date.php',
					method:'POST',
					data:{
						start_date:start_date,
						end_date:end_date
					},
					success:function(data)
					{
						$('#bulk_sales_list_table').html(data);
					}
				});
			});
		}

		function reprint_bulk_sales()
		{
			$(document).on('click','#btn_bulk_sales_re_print',function()
			{
				var bulk_sales_id = $(this).attr('data-id');
				
				$.ajax({
					url:'/layout/vouchers/bulk_sales_reprint.php',
					method:'POST',
					data:{
						bulk_sales_id:bulk_sales_id
					},
					success:function(data)
					{
						window.open('/layout/vouchers/bulk_sales_pdf.php', '_blank');
					}
				});
			});
		}

		function delete_bulk_sales()
		{
			$(document).on('click','#btn_delete_bulk_sales',function()
			{
				var bulk_sales_id = $(this).attr('data-id');
				var currentRow = $(this).closest("tr");
				var sales_date = currentRow.find("td:eq(1)").text();
				var Supplier = currentRow.find("td:eq(2)").text();
				$('#item_delete_question').text('Are you sure you want to delete sales invoice of ' + sales_date + ' for ' + Supplier + '?');
				$('#item_delete_modal').modal('show');
				$(document).on('click','#item_delete_yes',function()
				{
					$.ajax({  
						url:'/layout/vouchers/bulk_sales_delete.php',  
						type:'POST',  
						data:{bulk_sales_id:bulk_sales_id},
						success:function()
						{
							$('#item_delete_modal').modal('hide');
							window.location.href="/layout/vouchers/bulk_sales_list.php";
						}  
					});
				});
				$(document).on('click','#item_delete_no',function()
				{
					$('#item_delete_modal').modal('hide');
				});
			});
		}

	//JOB_CARD
		function new_job_card_modal()
		{
			$(document).on('click','#new_job_card_icon',function()
			{
				$('#job_card_update_btn').hide();
				$('#job_card_save_btn').show();
				$('#job_card_create_form').trigger('reset');
				$('#job_card_create_modal').modal('show');
			});
		}

		function cancel_job_card_modal()
		{
			$(document).on('click','#job_card_cancel_btn',function()
			{
				var page = window.location.pathname;
				$('#job_card_create_form').trigger('reset');
				$('#job_card_create_modal').modal('hide');
				window.location.href= page;
				//window.location.href="/layout/vouchers/job_card_list.php";
			});
		}

		function add_job_card_item_row()
		{
			$(document).on('change','.job_card_desc',function(){ 
				var i = $(this).attr('data-id');
				i++;
				$.ajax({
					url:'/layout/vouchers/job_card_item_list.php',
					method:'POST',
					data:{i:i},
					success:function(data)
					{
						$('#job_card_items_table').append(data);
					}
				});
			});
		}

		function add_job_card_item_price()
		{
			$(document).on('click','.job_card_desc',function()
			{
				var i = $(this).attr('data-id');
				var stock_item_id = $(this).val();
				$.ajax({
					url:'/layout/vouchers/job_card_item_price.php',
					method:'POST',
					data:{stock_item_id:stock_item_id},
					datatype:'JSON',
					success:function(data)
					{
						var res = $.parseJSON(data);
						$('#job_card_price'+i+'').val(res[0]);
					}
				});
			});
		}

		function get_job_card_item_amount()
		{
			$(document).on('change keyup', '.job_card_price, .job_card_qty', function(){  
				var count = $(this).attr("data-id"); 
				var qty = $('#job_card_qty'+count).val();
				var price = $('#job_card_price'+count).val();
				var amt = qty * price;
				$('#job_card_amt'+count).val(amt);
				
				var total = 0;
				$(".job_card_amt").each(function()
				{
					total += +$(this).val();
				});
				$('#job_card_stock_amount').val(total);
				$('#job_card_stock_amountD').val(total);
			});
		}

		function delete_job_card_item_row()
		{
			$(document).on('click', '#delete_job_card_stock_item', function()
			{  
				var button_id = $(this).attr("data-id");
				$('#stk'+button_id+'').remove();

				var total = 0;
				$(".job_card_amt").each(function()
				{
					total += +$(this).val();
				});
				$('#job_card_stock_amount').val(total);
				$('#job_card_stock_amountD').val(total);
			});
		}

		function add_job_card_service_row()
		{
			$(document).on('change','.job_card_service',function(){ 
				var i = $(this).attr('data-id');
				i++;
				$.ajax({
					url:'/layout/vouchers/job_card_add_service_row.php',
					method:'POST',
					data:{i:i},
					success:function(data)
					{
						$('#job_card_service_table').append(data);
					}
				});
			});
		}

		function add_job_card_service_price()
		{
			$(document).on('click','.job_card_service',function(){
				var i = $('#job_card_service_table tr:last').attr('id');
				var service_id = $('#job_card_service'+i+'').val();
				$.ajax({
					url:'/layout/vouchers/job_card_service_price.php',
					method:'POST',
					data:{service_id:service_id},
					datatype:'JSON',
					success:function(data)
					{
						var res = $.parseJSON(data);
						$('#job_card_service_price'+i+'').val(res[0]);
					}
				});
			});
		}

		function get_job_card_service_amount()
		{
			$(document).on('change keyup', '.job_card_service_price, .job_card_service_qty', function(){  
				var total_current = $('#job_card_amount').val();
				var count = $(this).attr("data-id"); 
				var qty = $('#job_card_service_qty'+count).val();
				var price = $('#job_card_service_price'+count).val();
				var amt_earlier = $('#job_card_service_amt'+count).val();
				var amt = qty * price;
				$('#job_card_service_amt'+count).val(amt);

				var total = 0;
				$(".job_card_service_amt").each(function()
				{
					total += +$(this).val();
				});

				$('#job_card_amount').val(total);
				$('#job_card_amount_2').val(total);
			});
		}

		function delete_job_card_service_row()
		{
			$(document).on('click', '#delete_service_item', function()
			{  
				var button_id = $(this).attr("data-id");
				$('#'+button_id+'').remove();
				var total = 0;
				$(".job_card_service_amt").each(function()
				{
					total += +$(this).val();
				});
				$('#job_card_amount').val(total);
				$('#job_card_amount_2').val(total);
			});
		}

		function add_job_card_overhead_row()
		{
			$(document).on('click','.add_job_card_overhead_row',function(){ 
				var i = $(this).attr('data-id');
				i++;
				$.ajax({
					url:'/layout/vouchers/job_card_add_overhead_row.php',
					method:'POST',
					data:{i:i},
					success:function(data)
					{
						$('#job_card_overhead_table').append(data);
					}
				});
			});
		}

		function get_job_card_overhead_amount()
		{
			$(document).on('change keyup', '.job_card_overhead_amt', function(){ 

				var total = 0;
				$(".job_card_overhead_amt").each(function()
				{
					total += +$(this).val();
				});

				$('#job_card_overhead_amount').val(total);
				$('#job_card_overhead_amountD').val(total);
			});
		}

		function delete_job_card_overhead_row()
		{
			$(document).on('click', '#delete_job_card_overhead_row', function()
			{  
				var button_id = $(this).attr("data-id");
				$('#oh'+button_id+'').remove();
				var total = 0;
				$(".job_card_overhead_amt").each(function()
				{
					total += +$(this).val();
				});
				$('#job_card_overhead_amount').val(total);
				$('#job_card_overhead_amountD').val(total);
			});
		}

		function save_job_card()
		{
			$(document).on('click','#job_card_save_btn',function(e){
				e.preventDefault();
				var last_tr_id = $("#job_card_service_table tr:last").attr("id");
				var last_tr_select = $("#job_card_service_table tr:last option:selected").val();
				if(last_tr_select =="" || last_tr_select ==0)
				{
					$('#'+last_tr_id+'').remove();
				};
				var job_card_debit = $('#job_card_debit').val();
				var job_card_amount = $('#job_card_amount').val();
				var job_card_customer = $('#job_card_customer').val();
				var job_card_date = $('#job_card_date').val();
				var job_card_service = $('#job_card_service').val();
				var page = window.location.pathname;
				if (job_card_debit !=="") 
				{
					if (job_card_amount !=="") 
					{
						if (job_card_customer !=="") 
						{
							if (job_card_date !=="") 
							{
								if (job_card_service !=="") 
								{
									$.ajax({
										url:'/layout/vouchers/job_card_save.php',
										method:'POST',
										data:$('#job_card_create_form').serialize(),
										success:function(data)
										{
											$('#job_card_create_form').trigger('reset');
											window.open('/layout/vouchers/job_card_pdf.php', '_blank');
											window.location.href= page;
											//window.location.href="/layout/vouchers/job_card_list.php";
										}
									});
								} 
								else 
								{
									alert('Please select a Service item!');
								};
							} 
							else 
							{
								alert('Please select the date of Job Card!');
							};
						} 
						else 
						{
							alert('Please type the name of the Customer!');
						};
					} 
					else 
					{
						alert('Please type price for the Service item(s) selected!');
					};
				} 
				else 
				{
					alert('Please select the receiving ledger!');
				};
			});
		}

		function edit_job_card()
		{
			$(document).on('click','#btn_edit_job_card',function(){
				var job_card_id = $(this).attr('data-id');
				$.ajax({
					url:'/layout/vouchers/job_card_edit.php',
					method:'POST',
					data:{job_card_id:job_card_id},
					datatype:'JSON',
					success:function(data)
					{
						var res = $.parseJSON(data);
						$('#job_card_id').val(res[0]);
						$('#job_card_date').val(res[1]);
						$('#job_card_debit').val(res[2]);
						$('#job_card_customer').val(res[3]);
						$('#job_card_amount').val(res[4]);
						$('#job_card_amount_2').val(res[4]);
						$('#job_card_shelf_no').val(res[5]);
						$('#job_card_narration').val(res[6]);
						$('#job_card_stock_amount').val(res[7]);
						$('#job_card_stock_amountD').val(res[7]);
						$('#job_card_overhead_amount').val(res[8]);
						$('#job_card_overhead_amountD').val(res[8]);
						$('#service_item_list').html(res[9]);
						$('#stock_item_list').html(res[10]);
						$('#overhead_cost_list').html(res[11]);
						$('#job_card_update_btn').show();
						$('#job_card_save_btn').hide();
						$('#job_card_create_modal').modal('show');
					}
				});
			});
		}

		function update_job_card()
		{
			$(document).on('click','#job_card_update_btn',function(e){
				e.preventDefault();
				var last_tr_id = $("#job_card_service_table tr:last").attr("id");
				var last_tr_select = $("#job_card_service_table tr:last option:selected").val();
				if(last_tr_select =="" || last_tr_select ==0)
				{
					$('#'+last_tr_id+'').remove();
				};
				var job_card_debit = $('#job_card_debit').val();
				var job_card_amount = $('#job_card_amount').val();
				var job_card_customer = $('#job_card_customer').val();
				var job_card_date = $('#job_card_date').val();
				var job_card_service = $('#job_card_service').val();
				var page = window.location.pathname;
				if (job_card_debit !=="") 
				{
					if (job_card_amount !=="") 
					{
						if (job_card_customer !=="") 
						{
							if (job_card_date !=="") 
							{
								if (job_card_service !=="") 
								{
									$.ajax({
										url:'/layout/vouchers/job_card_update.php',
										method:'POST',
										data:$('#job_card_create_form').serialize(),
										success:function(data)
										{
											$('#job_card_create_form').trigger('reset');
											window.open('/layout/vouchers/job_card_pdf.php', '_blank');
											window.location.href= page;
											//window.location.href="/layout/vouchers/job_card_list.php";
										}
									});
								} 
								else 
								{
									alert('Please select a Service item!');
								};
							} 
							else 
							{
								alert('Please select the date of Job Card!');
							};
						} 
						else 
						{
							alert('Please type the name of the Customer!');
						};
					} 
					else 
					{
						alert('Please type price for the Service item(s) selected!');
					};
				} 
				else 
				{
					alert('Please select the receiving ledger!');
				};
			});
		}

		function set_status_job_card_modal()
		{
			$(document).on('click','#btn_job_card_set_status',function()
			{
				var job_card_id = $(this).attr('data-id');
				$('#job_card_update_btn').hide();
				$('#job_card_status_save').show();
				$('#job_card_status_form').trigger('reset');
				$('#job_card_status_id').val(job_card_id);
				$('#job_card_status_modal').modal('show');
			});
		}

		function set_status_job_card_save()
		{
			$(document).on('click','#job_card_status_save',function(){
				var page = window.location.pathname;
				var status = $('#job_card_status').val();
				var staff = $('#job_card_status_staff').val();
				var job_card_id = $('#job_card_status_id').val();
				$.ajax({
					url:'/layout/vouchers/job_card_status_save.php',
					method:'POST',
					data:{
						status:status,
						staff:staff,
						job_card_id:job_card_id
					},
					success:function()
					{
						$('#job_card_status_modal').modal('hide');
						window.location.href= page;
					}
				});
			});
		}

		function reprint_job_card()
		{
			$(document).on('click','#btn_print_job_card_POS, #btn_print_job_card_A4',function(){
				var job_card_id = $(this).attr('data-id');
				var id = $(this).attr('id');
				$.ajax({
					url:'/layout/vouchers/job_card_reprint.php',
					method:'POST',
					data:{
						job_card_id:job_card_id
					},
					success:function(data)
					{
						if(id == 'btn_print_job_card_POS')
						{
							window.open('/layout/vouchers/job_card_pdf.php', '_blank');
						}
						else if(id == 'btn_print_job_card_A4')
						{
							window.open('/layout/vouchers/job_card_pdf_A4.php', '_blank');
						};
					}
				});
			});
		}

		function delete_job_card()
		{
			$(document).on('click','#btn_delete_job_card',function(){
				var job_card_id = $(this).attr('data-id');
				var currentRow=$(this).closest("tr");
				var date = currentRow.find("td:eq(0)").text();
				var customer = currentRow.find("td:eq(1)").text();
				$('#job_card_invoice_delete_question').text('Are you sure you want to delete '+customer+' Job Card dated ' + date + '?');
				$('#job_card_invoice_delete_modal').modal('show');
				$(document).on('click','#job_card_delete_yes',function(){
					$.ajax({  
						url:'/layout/vouchers/job_card_delete.php',  
						type:'POST',  
						data:{job_card_id:job_card_id},
						success:function(){
							$('#job_card_invoice_delete_modal').modal('hide');
							window.location.href="/layout/vouchers/job_card_list.php";
						}  
					});
				});
				$(document).on('click','#job_card_delete_no',function(){
					$('#job_card_invoice_delete_modal').modal('hide');
				});
			});
		}

		function search_job_card_by_name()
		{
			$(document).on('keyup','#job_card_name',function(e){
				e.preventDefault();
				var name = $('#job_card_name').val();

				$.ajax({
					url:'/layout/vouchers/job_card_search_by_name.php',
					method:'POST',
					data:{name:name},
					success:function(data)
					{
						$('#job_card_list_table').html(data);
					}
				});
			});
		}

		function search_job_card_by_date()
		{
			$(document).on('change','#job_card_search_from, #job_card_search_to',function(e){
				e.preventDefault();
				var start_date = $('#job_card_search_from').val();
				var end_date = $('#job_card_search_to').val();

				$.ajax({
					url:'/layout/vouchers/job_card_search_by_date.php',
					method:'POST',
					data:{start_date:start_date,end_date:end_date},
					success:function(data)
					{
						$('#job_card_list_table').html(data);
					}
				});
			});
		}

		function search_job_card_by_status()
		{
			$(document).on('change','#job_card_status_search',function(e){
				e.preventDefault();
				var status = $('#job_card_status_search').val();

				$.ajax({
					url:'/layout/vouchers/job_card_search_by_status.php',
					method:'POST',
					data:{status:status},
					success:function(data)
					{
						$('#job_card_list_table').html(data);
					}
				});
			});
		}

	//NON-DEDUCTIBLE_SALES
			function new_nds_sales_modal()
			{
				$(document).on('click','#new_nds_sales_icon',function()
				{
					var vat_type = $('#session_vat_type').val();
					var vat_calc_type = $('#session_vat_calc_type').val();
					$('#nds_sales_update_btn').hide();
					$('#nds_sales_save_btn').show();
					$('#nds_sales_create_form').trigger('reset');
					$('#nds_sales_credit').val(35);
					if(vat_type != 'None')
					{
						$('#nds_sales_vat_type_div').prop('class','col-md-2 mb-2 form-group');
						$('#nds_sales_calc_type_div').prop('hidden',false);
						$('#nds_sales_vat_type').val(vat_type);
						$('#nds_sales_calc_type').val(vat_calc_type);
					}
					$.ajax({
						url:'/layout/vouchers/nds_sales_unique.php',
						method:'POST',
						datatype:'JSON',
						data:{
							vat_type:vat_type
						},
						success:function(data)
						{
							var res = $.parseJSON(data);
							$('#nds_sales_unique').val(res[0]);
							$('#nds_sales_debit').val(res[2]);
							$('#nds_sales_debitD').val(res[2]);
							if(res[1] == 2)
							{
								$('#nds_sales_debit').prop('hidden', false);
								$('#nds_sales_debitD').prop('hidden', true);
							}
							else
							{
								$('#nds_sales_debit').prop('hidden', true);
								$('#nds_sales_debitD').prop('hidden', false);
							};
							$('#nds_sales_create_modal').modal('show');
						}
					});
				});
			}
	
			function create_customer_activate_field()
			{
				$(document).on('click','#nds_sales_create_customer',function()
				{ 
					$('#nds_sales_customer_select_div').prop('hidden',true);
					$('#nds_sales_customer_input_div').prop('hidden',false);
				});
			}
	
			function save_customer_nds_sales()
			{
				$(document).on('click','#nds_sales_save_customer',function()
				{ 
					var customer = $('#nds_sales_customer_input').val();
					var telephone = $('#nds_sales_telephone').val();
					var branch_id = $('#nds_sales_branch_id').val();
					if(customer != '')
					{
						if(telephone != '')
						{
							$.ajax({
								url:'/layout/vouchers/nds_sales_save_customer.php',
								method:'POST',
								datatype:'JSON',
								data:{
									customer:customer, 
									telephone:telephone, 
									branch_id:branch_id
								},
								success:function(data)
								{
									var res = $.parseJSON(data);
									$('#nds_sales_telephone').val(res[1]);
									$('#nds_sales_customer_select_div').html(res[0]);
									$('#nds_sales_customer_select_div').prop('hidden',false);
									$('#nds_sales_customer_input_div').prop('hidden',true);
								}
							});
						}
						else
						{
							$('#nds_sales_create_form_msg').html('<h6 style=color:red;>Please the Telephone cannot be EMPTY!</h6>');
							$('#nds_sales_create_form_msg').hide().slideDown().delay(2000).fadeOut();
						};
					}
					else
					{
						$('#nds_sales_create_form_msg').html('<h6 style=color:red;>Please the Customer Name cannot be EMPTY!</h6>');
						$('#nds_sales_create_form_msg').hide().slideDown().delay(2000).fadeOut();
					};
				});
			}
	
			function get_customer_telephone()
			{
				$(document).on('change','#nds_sales_customer_select',function()
				{ 
					var customer_id = $('#nds_sales_customer_select').val();
					$.ajax({
						url:'/layout/vouchers/nds_sales_get_customer_telephone.php',
						method:'POST',
						data:{customer_id:customer_id},
						success:function(data)
						{
							$('#nds_sales_telephone').val(data);
						}
					});
				});
			}
	
			function cancel_nds_sales_modal()
			{
				$(document).on('click','#nds_sales_cancel_btn',function()
				{
					var page = window.location.pathname;
					$('#nds_sales_create_form').trigger('reset');
					$('#nds_sales_create_modal').modal('hide');
					window.location.href= page;
					//window.location.href="/layout/vouchers/nds_sales_list.php";
				});
			}
	
			function add_nds_sales_item_row()
			{
				$(document).on('change','.stock_sales_desc',function(){ 
					var i = $('#nds_sales_items_table tr:last').attr('id');
					var stock_item_id = $('#stock_sales_desc'+i).val();
					if(stock_item_id > 0)
					{
						i++;
						$.ajax({
							url:'/layout/vouchers/nds_sales_item_list.php',
							method:'POST',
							data:{i:i},
							success:function(data)
							{
								$('#nds_sales_items_table').append(data);
							}
						});
					};
				});
			}
	
			function nds_sales_validate_qty()
			{
				/*$(document).on('keyup','.nds_sales_qty',function()
				{
					var i = $(this).attr('data-id');
					var block = $(this).attr('data-id1');
					var stock_item_id = $('#stock_sales_desc'+i).val();
					var qty = $('#nds_sales_qty'+i).val();
					
					$.ajax({
						url:'/layout/vouchers/nds_sales_block_negative.php',
						method:'POST',
						data:{stock_item_id:stock_item_id},
						success:function(data)
						{
							var balance = parseFloat(data);
							var quantity = parseFloat(qty);
							if(balance < quantity && block == 'Yes')
							{
								$('#nds_sales_create_modal').modal('hide');
								$('#nds_sales_invoice_delete_question').text('Please you do not have sufficient quantity to proceed. Current qty:' + balance + ' is less than:' + quantity + '!');
								$('#nds_sales_invoice_delete_modal_title').text('Insuffient Quantity');
								$('#nds_sales_delete_yes').text('OK');
								$('#nds_sales_delete_no').hide();
								$('#nds_sales_invoice_delete_modal').modal('show');
								$(document).on('click','#nds_sales_delete_yes',function()
								{
									$('#nds_sales_invoice_delete_modal').modal('hide');
									$('#nds_sales_create_modal').modal('show');
									$('#nds_sales_qty'+i).val(balance);
									$('#nds_sales_qty'+i).focus();
								});
								$(document).on('click','#nds_sales_delete_no',function(){
									$('#nds_sales_invoice_delete_modal').modal('hide');
								});
							};
						}
					});
				});*/
			}
	
			function add_nds_sales_item_price()
			{
				$(document).on('change','.stock_sales_desc',function(){
					var i = $(this).attr('data-id');
					var stock_item_id = $('#stock_sales_desc'+i).val();
					var vat_type = $('#nds_sales_vat_type').val();
					var calc_type = $('#nds_sales_calc_type').val();
					if(isNaN(parseFloat($('#nds_sales_discount_amount').val())))
					{
						var discount = 0;
					}
					else
					{
						var discount = parseFloat($('#nds_sales_discount_amount').val());
					};
					if(isNaN(parseFloat($('#nds_sales_discount_rate').val())))
					{
						var discount_perc = 0;
					}
					else
					{
						var discount_perc = parseFloat($('#nds_sales_discount_rate').val());
					};
	
					if(discount_perc !='' && discount_perc > 0)
					{
						var disc = parseFloat(discount_perc * sub_total).toFixed(2);
						$('#nds_sales_discount_amount').val(disc);
					}
					else if((discount_perc =='' || discount_perc==0) && discount > 0)
					{
						var disc = discount;
					}
					else
					{
						var disc = 0
					};
					$.ajax({
						url:'/layout/vouchers/nds_sales_item_price.php',
						method:'POST',
						data:{stock_item_id:stock_item_id},
						datatype:'JSON',
						success:function(data)
						{
							var res = $.parseJSON(data);
							$('#nds_sales_price'+i).val(res[0]);
							$('#nds_sales_priceD'+i).val(res[0]);
							$('#nds_sales_qty'+i).attr('data-id1',res[1]);
							var qty = $('#nds_sales_qty'+i).val();
							var amt = qty * res[0];
							$('#nds_sales_amt'+i).val(amt);
							$('#nds_sales_amtD'+i).val(amt);
	
							var total = 0;
							$(".nds_sales_amt").each(function()
							{
								total += +$(this).val();
							});
							var amt_after_discount = total - disc;
							$('#nds_sales_amount').val(total);
							$('#nds_sales_amount_2').val(total);
							$('#nds_sales_sub_total_amount').val(total);
							$('#nds_sales_sub_total_amountD').val(total);
							$('#nds_sales_total_amount').val(amt_after_discount);
							$('#nds_sales_total_amountD').val(amt_after_discount);
	
							var amount = parseFloat($('#nds_sales_total_amount').val());
							
							if(vat_type != 'None' && vat_type == 'Standard Rate')
							{
								$('#nds_sales_vat_type_div').prop('class','col-md-2 mb-2 form-group');
								$('#nds_sales_calc_type_div').prop('hidden',false);
								$('#nds_sales_vat_list').prop('hidden',false);
								$('#vat_row').prop('hidden',false);
								var covid_perc = $('#session_covid_perc').val();
								var nhil_perc = $('#session_nhil_perc').val();
								var getfund_perc = $('#session_getfund_perc').val();
								var vat_perc = $('#session_vat_perc').val();
								
								$('#nds_sales_covid_rate').val(covid_perc);
								$('#nds_sales_getfund_rate').val(getfund_perc);
								$('#nds_sales_nhil_rate').val(nhil_perc);
								$('#nds_sales_vat_rate').val(vat_perc);
			
								var covid_rate = parseFloat($('#nds_sales_covid_rate').val());
								var getfund_rate = parseFloat($('#nds_sales_getfund_rate').val());
								var nhil_rate = parseFloat($('#nds_sales_nhil_rate').val());
								var vat_rate = parseFloat($('#nds_sales_vat_rate').val());
								var total_levy_rate = parseFloat(parseFloat(covid_rate) + parseFloat(getfund_rate) + parseFloat(nhil_rate));
			
								if(amount > 0)
								{
									if(calc_type == 'Inclusive')
									{
										var total_after_levies = parseFloat(parseFloat(amount)/parseFloat(1 + vat_rate)).toFixed(2);
										var vat = parseFloat((parseFloat(amount) * parseFloat(vat_rate))/parseFloat(1 + vat_rate)).toFixed(2);
										var covid = parseFloat((parseFloat(total_after_levies) * parseFloat(covid_rate))/parseFloat(1 + total_levy_rate)).toFixed(2);
										var getfund = parseFloat((parseFloat(total_after_levies) * parseFloat(getfund_rate))/parseFloat(1 + total_levy_rate)).toFixed(2);
										var nhil = parseFloat((parseFloat(total_after_levies) * parseFloat(nhil_rate))/parseFloat(1 + total_levy_rate)).toFixed(2);
										var total_levy = parseFloat(parseFloat(covid) + parseFloat(getfund) + parseFloat(nhil)).toFixed(2);
										var net = parseFloat(amount).toFixed(2);
									}
									else if(calc_type == 'Exclusive')
									{
										var covid = parseFloat(amount * covid_rate).toFixed(2);
										var getfund = parseFloat(amount * getfund_rate).toFixed(2);
										var nhil = parseFloat(amount * nhil_rate).toFixed(2);
										var total_levy = parseFloat(parseFloat(covid) + parseFloat(getfund) + parseFloat(nhil)).toFixed(2);
										var total_after_levies = parseFloat(parseFloat(amount) + parseFloat(total_levy)).toFixed(2);
										var vat = parseFloat(parseFloat(total_after_levies) * parseFloat(vat_rate)).toFixed(2);
										var net = parseFloat(parseFloat(total_after_levies) + parseFloat(vat)).toFixed(2);
									};
									$('#nds_sales_covid_amount').val(covid);
									$('#nds_sales_covid_amountD').val(covid);
									$('#nds_sales_getfund_amount').val(getfund);
									$('#nds_sales_getfund_amountD').val(getfund);
									$('#nds_sales_nhil_amount').val(nhil);
									$('#nds_sales_nhil_amountD').val(nhil);
									$('#nds_sales_vat_amount').val(vat);
									$('#nds_sales_vat_amountD').val(vat);
									$('#nds_sales_total_levies_amount').val(total_levy);
									$('#nds_sales_total_levies_amountD').val(total_levy);
									$('#nds_sales_total_after_levies_amount').val(total_after_levies);
									$('#nds_sales_total_after_levies_amountD').val(total_after_levies);
									$('#nds_sales_net_amount_amount').val(net);
									$('#nds_sales_net_amount_amountD').val(net);
									//$('#nds_sales_amount').val(net);
									//$('#nds_sales_amount_2').val(net);
								};
							}
							else if(vat_type != 'None' && vat_type == 'Flat Rate')
							{
								$('#nds_sales_vat_type_div').prop('class','col-md-2 mb-2 form-group');
								$('#nds_sales_calc_type_div').prop('hidden',false);
								$('#nds_sales_vat_list').prop('hidden',false);
								$('#vat_row').prop('hidden',false);
								var covid_perc = $('#session_covid_perc').val();
								var nhil_perc = 0;
								var getfund_perc = 0;
								var vat_perc = 0.030;
								
								$('#nds_sales_covid_rate').val(covid_perc);
								$('#nds_sales_getfund_rate').val(getfund_perc);
								$('#nds_sales_nhil_rate').val(nhil_perc);
								$('#nds_sales_vat_rate').val(vat_perc);
								
								var covid_rate = parseFloat($('#nds_sales_covid_rate').val()).toFixed(3);
								var getfund_rate = parseFloat($('#nds_sales_getfund_rate').val()).toFixed(3);
								var nhil_rate = parseFloat($('#nds_sales_nhil_rate').val()).toFixed(3);
								var vat_rate = parseFloat($('#nds_sales_vat_rate').val()).toFixed(3);
								var total_levy_rate = parseFloat(covid_rate) + parseFloat(getfund_rate) + parseFloat(nhil_rate);
								var covid_vat_rate = parseFloat(parseFloat(covid_rate) + parseFloat(vat_rate)).toFixed(3);
			
								if(amount > 0)
								{
									if(calc_type == 'Inclusive')
									{
										var covid = parseFloat((parseFloat(amount)/parseFloat(1 + parseFloat(covid_vat_rate))) * parseFloat(covid_rate)).toFixed(2);
										var vat = parseFloat((parseFloat(amount)/parseFloat(1 + parseFloat(covid_vat_rate))) * parseFloat(vat_rate)).toFixed(2);
										var getfund = 0;
										var nhil = 0;
										var total_levy = parseFloat(parseFloat(covid) + parseFloat(getfund) + parseFloat(nhil)).toFixed(2);
										var net = parseFloat(amount).toFixed(2);
									}
									else if(calc_type == 'Exclusive')
									{
										var covid = parseFloat(parseFloat(amount) * parseFloat(covid_rate)).toFixed(2);
										var vat = parseFloat(parseFloat(amount) * parseFloat(vat_rate)).toFixed(2);
										var getfund = 0;
										var nhil = 0;
										var total_levy = parseFloat(parseFloat(covid) + parseFloat(getfund) + parseFloat(nhil)).toFixed(2);
										var net = parseFloat(parseFloat(amount) + parseFloat(total_levy) + parseFloat(vat)).toFixed(2);
									};
									$('#nds_sales_covid_amount').val(covid);
									$('#nds_sales_covid_amountD').val(covid);
									$('#nds_sales_getfund_amount').val(getfund);
									$('#nds_sales_getfund_amountD').val(getfund);
									$('#nds_sales_nhil_amount').val(nhil);
									$('#nds_sales_nhil_amountD').val(nhil);
									$('#nds_sales_vat_amount').val(vat);
									$('#nds_sales_vat_amountD').val(vat);
									$('#nds_sales_total_levies_amount').val(total_levy);
									$('#nds_sales_total_levies_amountD').val(total_levy);
									$('#nds_sales_total_after_levies_amount').val(net);
									$('#nds_sales_total_after_levies_amountD').val(net);
									$('#nds_sales_net_amount_amount').val(net);
									$('#nds_sales_net_amount_amountD').val(net);
									//$('#nds_sales_amount').val(net);
									//$('#nds_sales_amount_2').val(net);
								};
							}
							else if(vat_type == 'None')
							{
								$('#nds_sales_vat_type_div').prop('class','col-md-4 mb-4 form-group');
								$('#nds_sales_calc_type_div').prop('hidden',true);
								$('#nds_sales_vat_list').prop('hidden',true);
								$('#nds_sales_covid_rate').val(0);
								$('#nds_sales_covid_amount').val(0);
								$('#nds_sales_covid_amountD').val(0);
								$('#nds_sales_getfund_rate').val(0);
								$('#nds_sales_getfund_amount').val(0);
								$('#nds_sales_getfund_amountD').val(0);
								$('#nds_sales_nhil_rate').val(0);
								$('#nds_sales_nhil_amount').val(0);
								$('#nds_sales_nhil_amountD').val(0);
								$('#nds_sales_total_levies_amount').val(0);
								$('#nds_sales_total_levies_amountD').val(0);
								$('#nds_sales_total_after_levies_amount').val(0);
								$('#nds_sales_total_after_levies_amountD').val(0);
								$('#nds_sales_vat_rate').val(0);
								$('#nds_sales_vat_amount').val(0);
								$('#nds_sales_vat_amountD').val(0);
								$('#nds_sales_net_amount_amount').val(0);
								$('#nds_sales_net_amount_amountD').val(0);
								$('#nds_sales_vat_witholding_rate').val(0);
								$('#nds_sales_vat_witholding_amount').val(0);
								$('#nds_sales_vat_witholding_amountD').val(0);
								//$('#nds_sales_amount').val(amount);
								//$('#nds_sales_amount_2').val(amount);
							};
						}
					});
				});
			}
	
			function get_nds_sales_item_amount()
			{
				$(document).on('keyup', '.nds_sales_price, .nds_sales_qty', function()
				{  
					var i = $(this).attr("data-id"); 
					var qty = $('#nds_sales_qty'+i).val();
					var price = $('#nds_sales_price'+i).val();
					var vat_type = $('#nds_sales_vat_type').val();
					var calc_type = $('#nds_sales_calc_type').val();
					if(isNaN(parseFloat($('#nds_sales_discount_amount').val())))
					{
						var discount = 0;
					}
					else
					{
						var discount = parseFloat($('#nds_sales_discount_amount').val());
					};
					if(isNaN(parseFloat($('#nds_sales_discount_rate').val())))
					{
						var discount_perc = 0;
					}
					else
					{
						var discount_perc = parseFloat($('#nds_sales_discount_rate').val());
					};
	
					if(discount_perc !='' && discount_perc > 0)
					{
						var disc = parseFloat(discount_perc * sub_total).toFixed(2);
						$('#nds_sales_discount_amount').val(disc);
					}
					else if((discount_perc =='' || discount_perc==0) && discount > 0)
					{
						var disc = discount;
					}
					else
					{
						var disc = 0
					};
					var amt = qty * price;
					$('#nds_sales_amt'+i).val(amt);
					$('#nds_sales_amtD'+i).val(amt);
	
					var total = 0;
					$(".nds_sales_amt").each(function()
					{
						total += +$(this).val();
					});
					var amt_after_discount = total - disc;
					$('#nds_sales_amount').val(total);
					$('#nds_sales_amount_2').val(total);
					$('#nds_sales_sub_total_amount').val(total);
					$('#nds_sales_sub_total_amountD').val(total);
					$('#nds_sales_total_amount').val(amt_after_discount);
					$('#nds_sales_total_amountD').val(amt_after_discount);
	
					var amount = parseFloat($('#nds_sales_total_amount').val());
					
					if(vat_type != 'None' && vat_type == 'Standard Rate')
					{
						$('#nds_sales_vat_type_div').prop('class','col-md-2 mb-2 form-group');
						$('#nds_sales_calc_type_div').prop('hidden',false);
						$('#nds_sales_vat_list').prop('hidden',false);
						$('#vat_row').prop('hidden',false);
						var covid_perc = $('#session_covid_perc').val();
						var nhil_perc = $('#session_nhil_perc').val();
						var getfund_perc = $('#session_getfund_perc').val();
						var vat_perc = $('#session_vat_perc').val();
						
						$('#nds_sales_covid_rate').val(covid_perc);
						$('#nds_sales_getfund_rate').val(getfund_perc);
						$('#nds_sales_nhil_rate').val(nhil_perc);
						$('#nds_sales_vat_rate').val(vat_perc);
	
						var covid_rate = parseFloat($('#nds_sales_covid_rate').val());
						var getfund_rate = parseFloat($('#nds_sales_getfund_rate').val());
						var nhil_rate = parseFloat($('#nds_sales_nhil_rate').val());
						var vat_rate = parseFloat($('#nds_sales_vat_rate').val());
						var total_levy_rate = parseFloat(parseFloat(covid_rate) + parseFloat(getfund_rate) + parseFloat(nhil_rate));
	
						if(amount > 0)
						{
							if(calc_type == 'Inclusive')
							{
								var total_after_levies = parseFloat(parseFloat(amount)/parseFloat(1 + vat_rate)).toFixed(2);
								var vat = parseFloat((parseFloat(amount) * parseFloat(vat_rate))/parseFloat(1 + vat_rate)).toFixed(2);
								var covid = parseFloat((parseFloat(total_after_levies) * parseFloat(covid_rate))/parseFloat(1 + total_levy_rate)).toFixed(2);
								var getfund = parseFloat((parseFloat(total_after_levies) * parseFloat(getfund_rate))/parseFloat(1 + total_levy_rate)).toFixed(2);
								var nhil = parseFloat((parseFloat(total_after_levies) * parseFloat(nhil_rate))/parseFloat(1 + total_levy_rate)).toFixed(2);
								var total_levy = parseFloat(parseFloat(covid) + parseFloat(getfund) + parseFloat(nhil)).toFixed(2);
								var net = parseFloat(amount).toFixed(2);
							}
							else if(calc_type == 'Exclusive')
							{
								var covid = parseFloat(amount * covid_rate).toFixed(2);
								var getfund = parseFloat(amount * getfund_rate).toFixed(2);
								var nhil = parseFloat(amount * nhil_rate).toFixed(2);
								var total_levy = parseFloat(parseFloat(covid) + parseFloat(getfund) + parseFloat(nhil)).toFixed(2);
								var total_after_levies = parseFloat(parseFloat(amount) + parseFloat(total_levy)).toFixed(2);
								var vat = parseFloat(parseFloat(total_after_levies) * parseFloat(vat_rate)).toFixed(2);
								var net = parseFloat(parseFloat(total_after_levies) + parseFloat(vat)).toFixed(2);
							};
							$('#nds_sales_covid_amount').val(covid);
							$('#nds_sales_covid_amountD').val(covid);
							$('#nds_sales_getfund_amount').val(getfund);
							$('#nds_sales_getfund_amountD').val(getfund);
							$('#nds_sales_nhil_amount').val(nhil);
							$('#nds_sales_nhil_amountD').val(nhil);
							$('#nds_sales_vat_amount').val(vat);
							$('#nds_sales_vat_amountD').val(vat);
							$('#nds_sales_total_levies_amount').val(total_levy);
							$('#nds_sales_total_levies_amountD').val(total_levy);
							$('#nds_sales_total_after_levies_amount').val(total_after_levies);
							$('#nds_sales_total_after_levies_amountD').val(total_after_levies);
							$('#nds_sales_net_amount_amount').val(net);
							$('#nds_sales_net_amount_amountD').val(net);
							//$('#nds_sales_amount').val(net);
							//$('#nds_sales_amount_2').val(net);
						};
					}
					else if(vat_type != 'None' && vat_type == 'Flat Rate')
					{
						$('#nds_sales_vat_type_div').prop('class','col-md-2 mb-2 form-group');
						$('#nds_sales_calc_type_div').prop('hidden',false);
						$('#nds_sales_vat_list').prop('hidden',false);
						$('#vat_row').prop('hidden',false);
						var covid_perc = $('#session_covid_perc').val();
						var nhil_perc = 0;
						var getfund_perc = 0;
						var vat_perc = 0.030;
						
						$('#nds_sales_covid_rate').val(covid_perc);
						$('#nds_sales_getfund_rate').val(getfund_perc);
						$('#nds_sales_nhil_rate').val(nhil_perc);
						$('#nds_sales_vat_rate').val(vat_perc);
						
						var covid_rate = parseFloat($('#nds_sales_covid_rate').val()).toFixed(3);
						var getfund_rate = parseFloat($('#nds_sales_getfund_rate').val()).toFixed(3);
						var nhil_rate = parseFloat($('#nds_sales_nhil_rate').val()).toFixed(3);
						var vat_rate = parseFloat($('#nds_sales_vat_rate').val()).toFixed(3);
						var total_levy_rate = parseFloat(covid_rate) + parseFloat(getfund_rate) + parseFloat(nhil_rate);
						var covid_vat_rate = parseFloat(parseFloat(covid_rate) + parseFloat(vat_rate)).toFixed(3);
	
						if(amount > 0)
						{
							if(calc_type == 'Inclusive')
							{
								var covid = parseFloat((parseFloat(amount)/parseFloat(1 + parseFloat(covid_vat_rate))) * parseFloat(covid_rate)).toFixed(2);
								var vat = parseFloat((parseFloat(amount)/parseFloat(1 + parseFloat(covid_vat_rate))) * parseFloat(vat_rate)).toFixed(2);
								var getfund = 0;
								var nhil = 0;
								var total_levy = parseFloat(parseFloat(covid) + parseFloat(getfund) + parseFloat(nhil)).toFixed(2);
								var net = parseFloat(amount).toFixed(2);
							}
							else if(calc_type == 'Exclusive')
							{
								var covid = parseFloat(parseFloat(amount) * parseFloat(covid_rate)).toFixed(2);
								var vat = parseFloat(parseFloat(amount) * parseFloat(vat_rate)).toFixed(2);
								var getfund = 0;
								var nhil = 0;
								var total_levy = parseFloat(parseFloat(covid) + parseFloat(getfund) + parseFloat(nhil)).toFixed(2);
								var net = parseFloat(parseFloat(amount) + parseFloat(total_levy) + parseFloat(vat)).toFixed(2);
							};
							$('#nds_sales_covid_amount').val(covid);
							$('#nds_sales_covid_amountD').val(covid);
							$('#nds_sales_getfund_amount').val(getfund);
							$('#nds_sales_getfund_amountD').val(getfund);
							$('#nds_sales_nhil_amount').val(nhil);
							$('#nds_sales_nhil_amountD').val(nhil);
							$('#nds_sales_vat_amount').val(vat);
							$('#nds_sales_vat_amountD').val(vat);
							$('#nds_sales_total_levies_amount').val(total_levy);
							$('#nds_sales_total_levies_amountD').val(total_levy);
							$('#nds_sales_total_after_levies_amount').val(net);
							$('#nds_sales_total_after_levies_amountD').val(net);
							$('#nds_sales_net_amount_amount').val(net);
							$('#nds_sales_net_amount_amountD').val(net);
							//$('#nds_sales_amount').val(net);
							//$('#nds_sales_amount_2').val(net);
						};
					}
					else if(vat_type == 'None')
					{
						$('#nds_sales_vat_type_div').prop('class','col-md-4 mb-4 form-group');
						$('#nds_sales_calc_type_div').prop('hidden',true);
						$('#nds_sales_vat_list').prop('hidden',true);
						$('#nds_sales_covid_rate').val(0);
						$('#nds_sales_covid_amount').val(0);
						$('#nds_sales_covid_amountD').val(0);
						$('#nds_sales_getfund_rate').val(0);
						$('#nds_sales_getfund_amount').val(0);
						$('#nds_sales_getfund_amountD').val(0);
						$('#nds_sales_nhil_rate').val(0);
						$('#nds_sales_nhil_amount').val(0);
						$('#nds_sales_nhil_amountD').val(0);
						$('#nds_sales_total_levies_amount').val(0);
						$('#nds_sales_total_levies_amountD').val(0);
						$('#nds_sales_total_after_levies_amount').val(0);
						$('#nds_sales_total_after_levies_amountD').val(0);
						$('#nds_sales_vat_rate').val(0);
						$('#nds_sales_vat_amount').val(0);
						$('#nds_sales_vat_amountD').val(0);
						$('#nds_sales_net_amount_amount').val(0);
						$('#nds_sales_net_amount_amountD').val(0);
						$('#nds_sales_vat_witholding_rate').val(0);
						$('#nds_sales_vat_witholding_amount').val(0);
						$('#nds_sales_vat_witholding_amountD').val(0);
						//$('#nds_sales_amount').val(amount);
						//$('#nds_sales_amount_2').val(amount);
					};
				});
			}
	
			function delete_nds_sales_item_row()
			{
				$(document).on('click', '#delete_nds_sales_item', function()
				{  
					var button_id = $(this).attr("data-id");
					var discount = $('#nds_sales_discount_amount').val();
					$('#'+button_id+'').remove();
					var total = 0;
					$(".nds_sales_amt").each(function()
					{
						total += +$(this).val();
					});
					var amt = total - discount;
					$('#nds_sales_amount').val(total);
					$('#nds_sales_amount_2').val(total);
					$('#nds_sales_sub_total_amount').val(total);
					$('#nds_sales_sub_total_amountD').val(total);
					$('#nds_sales_total_amount').val(amt);
					$('#nds_sales_total_amount').val(amt);
				});
			}
			
			function nds_sales_vat_type()
			{
				$(document).on('change keyup','#nds_sales_vat_type, #nds_sales_calc_type',function()
				{
					var vat_type = $('#nds_sales_vat_type').val();
					var calc_type = $('#nds_sales_calc_type').val();
					var amount = parseFloat($('#nds_sales_total_amount').val());
					
					if(vat_type != 'None' && vat_type == 'Standard Rate')
					{
						$('#nds_sales_vat_type_div').prop('class','col-md-2 mb-2 form-group');
						$('#nds_sales_calc_type_div').prop('hidden',false);
						$('#nds_sales_vat_list').prop('hidden',false);
						$('#vat_row').prop('hidden',false);
						var covid_perc = $('#session_covid_perc').val();
						var nhil_perc = $('#session_nhil_perc').val();
						var getfund_perc = $('#session_getfund_perc').val();
						var vat_perc = $('#session_vat_perc').val();
						
						$('#nds_sales_covid_rate').val(covid_perc);
						$('#nds_sales_getfund_rate').val(getfund_perc);
						$('#nds_sales_nhil_rate').val(nhil_perc);
						$('#nds_sales_vat_rate').val(vat_perc);

						var covid_rate = parseFloat($('#nds_sales_covid_rate').val());
						var getfund_rate = parseFloat($('#nds_sales_getfund_rate').val());
						var nhil_rate = parseFloat($('#nds_sales_nhil_rate').val());
						var vat_rate = parseFloat($('#nds_sales_vat_rate').val());
						var total_levy_rate = parseFloat(parseFloat(covid_rate) + parseFloat(getfund_rate) + parseFloat(nhil_rate));

						if(amount > 0)
						{
							if(calc_type == 'Inclusive')
							{
								var total_after_levies = parseFloat(parseFloat(amount)/parseFloat(1 + vat_rate)).toFixed(2);
								var vat = parseFloat((parseFloat(amount) * parseFloat(vat_rate))/parseFloat(1 + vat_rate)).toFixed(2);
								var covid = parseFloat((parseFloat(total_after_levies) * parseFloat(covid_rate))/parseFloat(1 + total_levy_rate)).toFixed(2);
								var getfund = parseFloat((parseFloat(total_after_levies) * parseFloat(getfund_rate))/parseFloat(1 + total_levy_rate)).toFixed(2);
								var nhil = parseFloat((parseFloat(total_after_levies) * parseFloat(nhil_rate))/parseFloat(1 + total_levy_rate)).toFixed(2);
								var total_levy = parseFloat(parseFloat(covid) + parseFloat(getfund) + parseFloat(nhil)).toFixed(2);
								var net = parseFloat(amount).toFixed(2);
							}
							else if(calc_type == 'Exclusive')
							{
								var covid = parseFloat(amount * covid_rate).toFixed(2);
								var getfund = parseFloat(amount * getfund_rate).toFixed(2);
								var nhil = parseFloat(amount * nhil_rate).toFixed(2);
								var total_levy = parseFloat(parseFloat(covid) + parseFloat(getfund) + parseFloat(nhil)).toFixed(2);
								var total_after_levies = parseFloat(parseFloat(amount) + parseFloat(total_levy)).toFixed(2);
								var vat = parseFloat(parseFloat(total_after_levies) * parseFloat(vat_rate)).toFixed(2);
								var net = parseFloat(parseFloat(total_after_levies) + parseFloat(vat)).toFixed(2);
							};
							$('#nds_sales_covid_amount').val(covid);
							$('#nds_sales_covid_amountD').val(covid);
							$('#nds_sales_getfund_amount').val(getfund);
							$('#nds_sales_getfund_amountD').val(getfund);
							$('#nds_sales_nhil_amount').val(nhil);
							$('#nds_sales_nhil_amountD').val(nhil);
							$('#nds_sales_vat_amount').val(vat);
							$('#nds_sales_vat_amountD').val(vat);
							$('#nds_sales_total_levies_amount').val(total_levy);
							$('#nds_sales_total_levies_amountD').val(total_levy);
							$('#nds_sales_total_after_levies_amount').val(total_after_levies);
							$('#nds_sales_total_after_levies_amountD').val(total_after_levies);
							$('#nds_sales_net_amount_amount').val(net);
							$('#nds_sales_net_amount_amountD').val(net);
							$('#nds_sales_amount').val(net);
							$('#nds_sales_amount_2').val(net);
						};
					}
					else if(vat_type != 'None' && vat_type == 'Flat Rate')
					{
						$('#nds_sales_vat_type_div').prop('class','col-md-2 mb-2 form-group');
						$('#nds_sales_calc_type_div').prop('hidden',false);
						$('#nds_sales_vat_list').prop('hidden',false);
						$('#vat_row').prop('hidden',false);
						var covid_perc = $('#session_covid_perc').val();
						var nhil_perc = 0;
						var getfund_perc = 0;
						//var nhil_perc = $('#session_nhil_perc').val();
						//var getfund_perc = $('#session_getfund_perc').val();
						var vat_perc = 0.030;
						
						$('#nds_sales_covid_rate').val(covid_perc);
						$('#nds_sales_getfund_rate').val(getfund_perc);
						$('#nds_sales_nhil_rate').val(nhil_perc);
						$('#nds_sales_vat_rate').val(vat_perc);
						
						var covid_rate = parseFloat($('#nds_sales_covid_rate').val()).toFixed(3);
						var getfund_rate = parseFloat($('#nds_sales_getfund_rate').val()).toFixed(3);
						var nhil_rate = parseFloat($('#nds_sales_nhil_rate').val()).toFixed(3);
						var vat_rate = parseFloat($('#nds_sales_vat_rate').val()).toFixed(3);
						var total_levy_rate = parseFloat(covid_rate) + parseFloat(getfund_rate) + parseFloat(nhil_rate);
						var covid_vat_rate = parseFloat(parseFloat(covid_rate) + parseFloat(vat_rate)).toFixed(3);

						if(amount > 0)
						{
							if(calc_type == 'Inclusive')
							{
								var covid = parseFloat((parseFloat(amount)/parseFloat(1 + parseFloat(covid_vat_rate))) * parseFloat(covid_rate)).toFixed(2);
								var vat = parseFloat((parseFloat(amount)/parseFloat(1 + parseFloat(covid_vat_rate))) * parseFloat(vat_rate)).toFixed(2);
								var getfund = 0;
								var nhil = 0;
								var total_levy = parseFloat(parseFloat(covid) + parseFloat(getfund) + parseFloat(nhil)).toFixed(2);
								var net = parseFloat(amount).toFixed(2);
							}
							else if(calc_type == 'Exclusive')
							{
								var covid = parseFloat(parseFloat(amount) * parseFloat(covid_rate)).toFixed(2);
								var vat = parseFloat(parseFloat(amount) * parseFloat(vat_rate)).toFixed(2);
								var getfund = 0;
								var nhil = 0;
								var total_levy = parseFloat(parseFloat(covid) + parseFloat(getfund) + parseFloat(nhil)).toFixed(2);
								var net = parseFloat(parseFloat(amount) + parseFloat(total_levy) + parseFloat(vat)).toFixed(2);
							};
							$('#nds_sales_covid_amount').val(covid);
							$('#nds_sales_covid_amountD').val(covid);
							$('#nds_sales_getfund_amount').val(getfund);
							$('#nds_sales_getfund_amountD').val(getfund);
							$('#nds_sales_nhil_amount').val(nhil);
							$('#nds_sales_nhil_amountD').val(nhil);
							$('#nds_sales_vat_amount').val(vat);
							$('#nds_sales_vat_amountD').val(vat);
							$('#nds_sales_total_levies_amount').val(total_levy);
							$('#nds_sales_total_levies_amountD').val(total_levy);
							$('#nds_sales_total_after_levies_amount').val(net);
							$('#nds_sales_total_after_levies_amountD').val(net);
							$('#nds_sales_net_amount_amount').val(net);
							$('#nds_sales_net_amount_amountD').val(net);
							$('#nds_sales_amount').val(net);
							$('#nds_sales_amount_2').val(net);
						};
					}
					else if(vat_type == 'None')
					{
						$('#nds_sales_vat_type_div').prop('class','col-md-4 mb-4 form-group');
						$('#nds_sales_calc_type_div').prop('hidden',true);
						$('#nds_sales_vat_list').prop('hidden',true);
						$('#nds_sales_covid_rate').val(0);
						$('#nds_sales_covid_amount').val(0);
						$('#nds_sales_covid_amountD').val(0);
						$('#nds_sales_getfund_rate').val(0);
						$('#nds_sales_getfund_amount').val(0);
						$('#nds_sales_getfund_amountD').val(0);
						$('#nds_sales_nhil_rate').val(0);
						$('#nds_sales_nhil_amount').val(0);
						$('#nds_sales_nhil_amountD').val(0);
						$('#nds_sales_total_levies_amount').val(0);
						$('#nds_sales_total_levies_amountD').val(0);
						$('#nds_sales_total_after_levies_amount').val(0);
						$('#nds_sales_total_after_levies_amountD').val(0);
						$('#nds_sales_vat_rate').val(0);
						$('#nds_sales_vat_amount').val(0);
						$('#nds_sales_vat_amountD').val(0);
						$('#nds_sales_net_amount_amount').val(0);
						$('#nds_sales_net_amount_amountD').val(0);
						$('#nds_sales_vat_witholding_rate').val(0);
						$('#nds_sales_vat_witholding_amount').val(0);
						$('#nds_sales_vat_witholding_amountD').val(0);
						$('#nds_sales_amount').val(amount);
						$('#nds_sales_amount_2').val(amount);
					};
				});
			}

			function nds_sales_vat_rate()
			{
				$(document).on('keyup','#nds_sales_discount_rate, #nds_sales_discount_amount, .nds_sales_qty, #nds_sales_price, #nds_sales_amt, #nds_sales_covid_rate, #nds_sales_getfund_rate, #nds_sales_nhil_rate, #nds_sales_vat_rate',function()
				{
					var vat_type = $('#nds_sales_vat_type').val();
					var calc_type = $('#nds_sales_calc_type').val();
					var sub_total = parseFloat($('#nds_sales_sub_total_amount').val());
					if(isNaN(parseFloat($('#nds_sales_discount_amount').val())))
					{
						var discount = 0;
					}
					else
					{
						var discount = parseFloat($('#nds_sales_discount_amount').val());
					};
					if(isNaN(parseFloat($('#nds_sales_discount_rate').val())))
					{
						var discount_perc = 0;
					}
					else
					{
						var discount_perc = parseFloat($('#nds_sales_discount_rate').val());
					};
	
					if(discount_perc !='' && discount_perc > 0)
					{
						var disc = parseFloat(discount_perc * sub_total).toFixed(2);
						$('#nds_sales_discount_amount').val(disc);
					}
					else if((discount_perc =='' || discount_perc==0) && discount > 0)
					{
						var disc = discount;
					}
					else
					{
						var disc = 0
					};
					var amt = parseFloat(sub_total - disc).toFixed(2);
					$('#nds_sales_total_amount').val(amt);
					$('#nds_sales_total_amountD').val(amt);

					var amount = parseFloat($('#nds_sales_total_amount').val());
					
					if(vat_type != 'None' && vat_type == 'Standard Rate')
					{
						$('#nds_sales_vat_type_div').prop('class','col-md-2 mb-2 form-group');
						$('#nds_sales_calc_type_div').prop('hidden',false);
						$('#nds_sales_vat_list').prop('hidden',false);
						$('#vat_row').prop('hidden',false);
						var covid_perc = $('#session_covid_perc').val();
						var nhil_perc = $('#session_nhil_perc').val();
						var getfund_perc = $('#session_getfund_perc').val();
						var vat_perc = $('#session_vat_perc').val();
						
						$('#nds_sales_covid_rate').val(covid_perc);
						$('#nds_sales_getfund_rate').val(getfund_perc);
						$('#nds_sales_nhil_rate').val(nhil_perc);
						$('#nds_sales_vat_rate').val(vat_perc);

						var covid_rate = parseFloat($('#nds_sales_covid_rate').val());
						var getfund_rate = parseFloat($('#nds_sales_getfund_rate').val());
						var nhil_rate = parseFloat($('#nds_sales_nhil_rate').val());
						var vat_rate = parseFloat($('#nds_sales_vat_rate').val());
						var total_levy_rate = parseFloat(parseFloat(covid_rate) + parseFloat(getfund_rate) + parseFloat(nhil_rate));

						if(amount > 0)
						{
							if(calc_type == 'Inclusive')
							{
								var total_after_levies = parseFloat(parseFloat(amount)/parseFloat(1 + vat_rate)).toFixed(2);
								var vat = parseFloat((parseFloat(amount) * parseFloat(vat_rate))/parseFloat(1 + vat_rate)).toFixed(2);
								var covid = parseFloat((parseFloat(total_after_levies) * parseFloat(covid_rate))/parseFloat(1 + total_levy_rate)).toFixed(2);
								var getfund = parseFloat((parseFloat(total_after_levies) * parseFloat(getfund_rate))/parseFloat(1 + total_levy_rate)).toFixed(2);
								var nhil = parseFloat((parseFloat(total_after_levies) * parseFloat(nhil_rate))/parseFloat(1 + total_levy_rate)).toFixed(2);
								var total_levy = parseFloat(parseFloat(covid) + parseFloat(getfund) + parseFloat(nhil)).toFixed(2);
								var net = parseFloat(amount).toFixed(2);
							}
							else if(calc_type == 'Exclusive')
							{
								var covid = parseFloat(amount * covid_rate).toFixed(2);
								var getfund = parseFloat(amount * getfund_rate).toFixed(2);
								var nhil = parseFloat(amount * nhil_rate).toFixed(2);
								var total_levy = parseFloat(parseFloat(covid) + parseFloat(getfund) + parseFloat(nhil)).toFixed(2);
								var total_after_levies = parseFloat(parseFloat(amount) + parseFloat(total_levy)).toFixed(2);
								var vat = parseFloat(parseFloat(total_after_levies) * parseFloat(vat_rate)).toFixed(2);
								var net = parseFloat(parseFloat(total_after_levies) + parseFloat(vat)).toFixed(2);
							};
							$('#nds_sales_covid_amount').val(covid);
							$('#nds_sales_covid_amountD').val(covid);
							$('#nds_sales_getfund_amount').val(getfund);
							$('#nds_sales_getfund_amountD').val(getfund);
							$('#nds_sales_nhil_amount').val(nhil);
							$('#nds_sales_nhil_amountD').val(nhil);
							$('#nds_sales_vat_amount').val(vat);
							$('#nds_sales_vat_amountD').val(vat);
							$('#nds_sales_total_levies_amount').val(total_levy);
							$('#nds_sales_total_levies_amountD').val(total_levy);
							$('#nds_sales_total_after_levies_amount').val(total_after_levies);
							$('#nds_sales_total_after_levies_amountD').val(total_after_levies);
							$('#nds_sales_net_amount_amount').val(net);
							$('#nds_sales_net_amount_amountD').val(net);
							$('#nds_sales_amount').val(net);
							$('#nds_sales_amount_2').val(net);
						};
					}
					else if(vat_type != 'None' && vat_type == 'Flat Rate')
					{
						$('#nds_sales_vat_type_div').prop('class','col-md-2 mb-2 form-group');
						$('#nds_sales_calc_type_div').prop('hidden',false);
						$('#nds_sales_vat_list').prop('hidden',false);
						$('#vat_row').prop('hidden',false);
						var covid_perc = $('#session_covid_perc').val();
						var nhil_perc = 0;
						var getfund_perc = 0;
						var vat_perc = 0.030;
						
						$('#nds_sales_covid_rate').val(covid_perc);
						$('#nds_sales_getfund_rate').val(getfund_perc);
						$('#nds_sales_nhil_rate').val(nhil_perc);
						$('#nds_sales_vat_rate').val(vat_perc);
						
						var covid_rate = parseFloat($('#nds_sales_covid_rate').val()).toFixed(3);
						var getfund_rate = parseFloat($('#nds_sales_getfund_rate').val()).toFixed(3);
						var nhil_rate = parseFloat($('#nds_sales_nhil_rate').val()).toFixed(3);
						var vat_rate = parseFloat($('#nds_sales_vat_rate').val()).toFixed(3);
						var total_levy_rate = parseFloat(covid_rate) + parseFloat(getfund_rate) + parseFloat(nhil_rate);
						var covid_vat_rate = parseFloat(parseFloat(covid_rate) + parseFloat(vat_rate)).toFixed(3);

						if(amount > 0)
						{
							if(calc_type == 'Inclusive')
							{
								var covid = parseFloat((parseFloat(amount)/parseFloat(1 + parseFloat(covid_vat_rate))) * parseFloat(covid_rate)).toFixed(2);
								var vat = parseFloat((parseFloat(amount)/parseFloat(1 + parseFloat(covid_vat_rate))) * parseFloat(vat_rate)).toFixed(2);
								var getfund = 0;
								var nhil = 0;
								var total_levy = parseFloat(parseFloat(covid) + parseFloat(getfund) + parseFloat(nhil)).toFixed(2);
								var net = parseFloat(amount).toFixed(2);
							}
							else if(calc_type == 'Exclusive')
							{
								var covid = parseFloat(parseFloat(amount) * parseFloat(covid_rate)).toFixed(2);
								var vat = parseFloat(parseFloat(amount) * parseFloat(vat_rate)).toFixed(2);
								var getfund = 0;
								var nhil = 0;
								var total_levy = parseFloat(parseFloat(covid) + parseFloat(getfund) + parseFloat(nhil)).toFixed(2);
								var net = parseFloat(parseFloat(amount) + parseFloat(total_levy) + parseFloat(vat)).toFixed(2);
							};
							$('#nds_sales_covid_amount').val(covid);
							$('#nds_sales_covid_amountD').val(covid);
							$('#nds_sales_getfund_amount').val(getfund);
							$('#nds_sales_getfund_amountD').val(getfund);
							$('#nds_sales_nhil_amount').val(nhil);
							$('#nds_sales_nhil_amountD').val(nhil);
							$('#nds_sales_vat_amount').val(vat);
							$('#nds_sales_vat_amountD').val(vat);
							$('#nds_sales_total_levies_amount').val(total_levy);
							$('#nds_sales_total_levies_amountD').val(total_levy);
							$('#nds_sales_total_after_levies_amount').val(net);
							$('#nds_sales_total_after_levies_amountD').val(net);
							$('#nds_sales_net_amount_amount').val(net);
							$('#nds_sales_net_amount_amountD').val(net);
							$('#nds_sales_amount').val(net);
							$('#nds_sales_amount_2').val(net);
						};
					}
					else if(vat_type == 'None')
					{
						$('#nds_sales_vat_type_div').prop('class','col-md-4 mb-4 form-group');
						$('#nds_sales_calc_type_div').prop('hidden',true);
						$('#nds_sales_vat_list').prop('hidden',true);
						$('#nds_sales_covid_rate').val(0);
						$('#nds_sales_covid_amount').val(0);
						$('#nds_sales_covid_amountD').val(0);
						$('#nds_sales_getfund_rate').val(0);
						$('#nds_sales_getfund_amount').val(0);
						$('#nds_sales_getfund_amountD').val(0);
						$('#nds_sales_nhil_rate').val(0);
						$('#nds_sales_nhil_amount').val(0);
						$('#nds_sales_nhil_amountD').val(0);
						$('#nds_sales_total_levies_amount').val(0);
						$('#nds_sales_total_levies_amountD').val(0);
						$('#nds_sales_total_after_levies_amount').val(0);
						$('#nds_sales_total_after_levies_amountD').val(0);
						$('#nds_sales_vat_rate').val(0);
						$('#nds_sales_vat_amount').val(0);
						$('#nds_sales_vat_amountD').val(0);
						$('#nds_sales_net_amount_amount').val(0);
						$('#nds_sales_net_amount_amountD').val(0);
						$('#nds_sales_vat_witholding_rate').val(0);
						$('#nds_sales_vat_witholding_amount').val(0);
						$('#nds_sales_vat_witholding_amountD').val(0);
						$('#nds_sales_amount').val(amount);
						$('#nds_sales_amount_2').val(amount);
					};
				});
			}
	
			function save_nds_sales()
			{
				$(document).on('click','#nds_sales_save_btn',function(e){
					e.preventDefault();
					var last_tr_id = $("#nds_sales_items_table tr:last").attr("id");
					var last_tr_select = $("#nds_sales_items_table tr:last option:selected").val();
					if(last_tr_select =="" || last_tr_select ==0)
					{
						$('#'+last_tr_id+'').remove();
					};
					var debit = $('#nds_sales_debit').val();
					var credit = $('#nds_sales_credit').val();
					var amount = $('#nds_sales_amount').val();
					var customer = $('#nds_sales_customer_select').val();
					var ref_no = $('#nds_sales_ref_no').val();
					var date = $('#nds_sales_date').val();
					var received_by = $('#nds_sales_received_by').val();
					var narration = $('#nds_sales_narration').val();
					var desc = $('#nds_sales_desc').val();
					var page = window.location.pathname;
					if (debit !=="" && debit > 0) 
					{
						if (credit !=="" && credit > 0) 
						{
							if (amount !=="" && amount > 0) 
							{
								if (customer !=="") 
								{
									if (ref_no !=="") 
									{
										if (date !=="") 
										{
											if (received_by !=="") 
											{
												if (desc !=="") 
												{
													$.ajax({
														url:'/layout/vouchers/nds_sales_save.php',
														method:'POST',
														data:$('#nds_sales_create_form').serialize(),
														success:function(data)
														{
															$('#nds_sales_create_form').trigger('reset');
															$('#nds_sales_create_modal').modal('hide');
															if(data == 'exist')
															{
																alert('This Invoice has been SAVED already!');
															}
															else if(data == 'no_item')
															{
																alert('No Items selected for sale!');
															}
															else if(data == 'no_company')
															{
																alert('No Active Company!');
															}
															else if(data == 'saved')
															{
																window.open('/layout/vouchers/nds_sales_pdf_A4.php', '_blank');
																window.location.href= page;
																//window.location.href="/layout/vouchers/nds_sales_list.php";
															};
														}
													});
												} 
												else 
												{
													alert('Please select an item sold!');
												};
											} 
											else 
											{
												alert('Please type the name of the person receiving the goods!');
											};
										} 
										else 
										{
											alert('Please select the date of sales!');
										};
									} 
									else 
									{
										alert('Please type the supplier invoice number!');
									};
								} 
								else 
								{
									alert('Please the Customer Name cannot be EMPTY!');
								};
							} 
							else 
							{
								alert('Please type price for each item sold!');
							};
						} 
						else 
						{
							alert('Please select the ledger from which the sales was made (Supplier or Cash Account)!');
						};
					} 
					else 
					{
						alert('Please select the ledger into which the sales was made (Purchases Account)!');
					};
				});
			}
	
			function edit_nds_sales()
			{
				$(document).on('click','#btn_edit_nds_sales',function(){
					var nds_sales_id = $(this).attr('data-id');
					$.ajax({
						url:'/layout/vouchers/nds_sales_edit.php',
						method:'POST',
						data:{nds_sales_id:nds_sales_id},
						datatype:'JSON',
						success:function(data)
						{
							var res = $.parseJSON(data);
							$('#nds_sales_id').val(res[0]);
							$('#nds_sales_date').val(res[1]);
							$('#nds_sales_debit').val(res[2]);
							$('#nds_sales_debitD').val(res[2]);
							$('#nds_sales_credit').val(res[3]);
							$('#nds_sales_amount').val(res[4]);
							$('#nds_sales_amount_2').val(res[4]);
							$('#nds_sales_telephone').val(res[5]);
							$('#nds_sales_customer_select').val(res[6]);
							$('#nds_sales_items_list').html(res[7]);
							$('#nds_sales_narration').val(res[8]);
							$('#nds_sales_vat_type').val(res[9]);
							$('#nds_sales_calc_type').val(res[10]);
							$('#nds_sales_covid_rate').val(res[11]);
							$('#nds_sales_nhil_rate').val(res[12]);
							$('#nds_sales_getfund_rate').val(res[13]);
							$('#nds_sales_vat_rate').val(res[14]);
							$('#nds_sales_covid_amount').val(res[15]);
							$('#nds_sales_covid_amountD').val(res[15]);
							$('#nds_sales_getfund_amount').val(res[16]);
							$('#nds_sales_getfund_amountD').val(res[16]);
							$('#nds_sales_nhil_amount').val(res[17]);
							$('#nds_sales_nhil_amountD').val(res[17]);
							$('#nds_sales_vat_amount').val(res[18]);
							$('#nds_sales_vat_amountD').val(res[18]);
							$('#nds_sales_total_levies_amount').val(res[19]);
							$('#nds_sales_total_levies_amountD').val(res[19]);
							$('#nds_sales_total_after_levies_amount').val(res[20]);
							$('#nds_sales_total_after_levies_amountD').val(res[20]);
							$('#nds_sales_discount_amount').val(res[21]);
							$('#nds_sales_discount_amountD').val(res[21]);
							$('#nds_sales_discount_rate').val(res[22]);
							$('#nds_sales_sub_total_amount').val(res[23]);
							$('#nds_sales_sub_total_amountD').val(res[23]);
							$('#nds_sales_total_amount').val(res[24]);
							$('#nds_sales_total_amountD').val(res[24]);
							$('#nds_sales_branch_id').val(res[25]);
							$('#nds_sales_branch_idD').val(res[25]);
							$('#nds_sales_net_amount_amount').val(res[4]);
							$('#nds_sales_net_amount_amountD').val(res[4]);
							if(res[9] != 'None' && res[9] == 'Standard Rate')
							{
								$('#nds_sales_vat_type_div').prop('class','col-md-2 mb-2 form-group');
								$('#nds_sales_calc_type_div').prop('hidden',false);
								$('#nds_sales_vat_list').prop('hidden',false);
								$('#vat_row').prop('hidden',false);
							}
							else if(res[9] != 'None' && res[9] == 'Flat Rate')
							{
								$('#nds_sales_vat_type_div').prop('class','col-md-2 mb-2 form-group');
								$('#nds_sales_calc_type_div').prop('hidden',false);
								$('#nds_sales_vat_list').prop('hidden',false);
								$('#vat_row').prop('hidden',true);
							}
							else if(res[9] == 'None')
							{
								$('#nds_sales_vat_type_div').prop('class','col-md-4 mb-4 form-group');
								$('#nds_sales_calc_type_div').prop('hidden',true);
								$('#nds_sales_vat_list').prop('hidden',true);
							};
							if(res[26] == 2)
							{
								$('#nds_sales_debit').prop('hidden', false);
								$('#nds_sales_debitD').prop('hidden', true);
							}
							else
							{
								$('#nds_sales_debit').prop('hidden', true);
								$('#nds_sales_debitD').prop('hidden', false);
							};
							$('#nds_sales_update_btn').show();
							$('#nds_sales_save_btn').hide();
							$('#nds_sales_create_modal').modal('show');
						}
					});
				});
			}
	
			function update_nds_sales()
			{
				$(document).on('click','#nds_sales_update_btn',function(e){
					e.preventDefault();
					var last_tr_id = $("#nds_sales_items_table tr:last").attr("id");
					var last_tr_select = $("#nds_sales_items_table tr:last option:selected").val();
					if(last_tr_select =="" || last_tr_select ==0)
					{
						$('#'+last_tr_id+'').remove();
					};
					var debit = $('#nds_sales_debit').val();
					var credit = $('#nds_sales_credit').val();
					var amount = $('#nds_sales_amount').val();
					var customer = $('#nds_sales_customer_select').val();
					var ref_no = $('#nds_sales_ref_no').val();
					var date = $('#nds_sales_date').val();
					var received_by = $('#nds_sales_received_by').val();
					var narration = $('#nds_sales_narration').val();
					var desc = $('#nds_sales_desc').val();
					var page = window.location.pathname;
					if (debit !=="") 
					{
						if (credit !=="") 
						{
							if (amount !=="") 
							{
								if (customer !=="") 
								{
									if (ref_no !=="") 
									{
										if (date !=="") 
										{
											if (received_by !=="") 
											{
												if (desc !=="") 
												{
													$.ajax({
														url:'/layout/vouchers/nds_sales_update.php',
														method:'POST',
														data:$('#nds_sales_create_form').serialize(),
														success:function(data)
														{
															$('#nds_sales_create_form').trigger('reset');
															window.open('/layout/vouchers/nds_sales_pdf.php', '_blank');
															window.location.href= page;
														}
													});
												} 
												else 
												{
													alert('Please select an item sold!');
												};
											} 
											else 
											{
												alert('Please type the name of the person receiving the goods!');
											};
										} 
										else 
										{
											alert('Please select the date of sales!');
										};
									} 
									else 
									{
										alert('Please type the supplier invoice number!');
									};
								} 
								else 
								{
									alert('Please the Customer Name cannot be EMPTY!');
								};
							} 
							else 
							{
								alert('Please type price for each item sold!');
							};
						} 
						else 
						{
							alert('Please select the ledger from which the sales was made (Supplier or Cash Account)!');
						};
					} 
					else 
					{
						alert('Please select the ledger into which the sales was made (Purchases Account)!');
					};
				});
			}
	
			function reprint_nds_sales()
			{
				$(document).on('click','#btn_nds_sales_invoice_reprint_POS, #btn_nds_sales_invoice_reprint_A4',function()
				{
					var nds_sales_id = $(this).attr('data-id');
					var id = $(this).attr('id');
					$.ajax({
							url:'/layout/vouchers/nds_sales_reprint.php',
							method:'POST',
							data:{
							nds_sales_id:nds_sales_id
							},
							success:function(data)
							{
							if(id=='btn_nds_sales_invoice_reprint_POS')
							{
								window.open('/layout/vouchers/nds_sales_pdf.php', '_blank');
							}
							else
							{
								window.open('/layout/vouchers/nds_sales_pdf_A4.php', '_blank');
							};
							}
					});
				});
			}
	
			function delete_nds_sales()
			{
				$(document).on('click','#btn_delete_nds_sales',function(){
					var nds_sales_id = $(this).attr('data-id');
					var currentRow=$(this).closest("tr");
					var sales_date = currentRow.find("td:eq(1)").text();
					//var Supplier = currentRow.find("td:eq(3)").text();
					$('#nds_sales_invoice_delete_question').text('Are you sure you want to delete stock sales invoice of ' + sales_date + '?');
					$('#nds_sales_invoice_delete_modal').modal('show');
					$(document).on('click','#nds_sales_delete_yes',function(){
						$.ajax({  
							url:'/layout/vouchers/nds_sales_delete.php',  
							type:'POST',  
							data:{nds_sales_id:nds_sales_id},
							success:function()
							{
								$('#nds_sales_invoice_delete_modal').modal('hide');
								window.location.href="/layout/vouchers/nds_sales_list.php";
							}  
						});
					});
					$(document).on('click','#nds_sales_delete_no',function(){
						$('#nds_sales_invoice_delete_modal').modal('hide');
					});
				});
			}
			
			function search_nds_sales_by_name()
			{
				$(document).on('keyup','#nds_sales_name',function(e)
				{
					e.preventDefault();
					var name = $('#nds_sales_name').val();
					
					$.ajax({
						url:'/layout/vouchers/nds_sales_search_by_name.php',
						method:'POST',
						data:{
							name:name
						},
						success:function(data)
						{
							$('#nds_sales_list_table_div').html(data);
						}
					});
				});
			}
	
			function search_nds_sales_by_date()
			{
				$(document).on('click','#nds_sales_search_icon',function(e){
					e.preventDefault();
					var company_id = $('#session_company_id').val();
					var start_date = $('#nds_sales_search_from').val();
					var end_date = $('#nds_sales_search_to').val();
	
					$.ajax({
						url:'/layout/vouchers/nds_sales_search_by_date.php',
						method:'POST',
						data:{
							start_date:start_date,
							end_date:end_date,
							company_id:company_id
						},
						success:function(data)
						{
							$('#nds_sales_list_table_div').html(data);
						}
					});
				});
			}
	
			function search_nds_sales_by_branch()
			{
				$(document).on('change','#nds_sales_search_by_branch',function()
				{
					var branch_id = $('#nds_sales_search_by_branch').val();
					var start_date = $('#nds_sales_search_from').val();
					var end_date = $('#nds_sales_search_to').val();
	
					$.ajax({
						url:'/layout/vouchers/nds_sales_search_by_branch.php',
						method:'POST',
						data:{
							start_date:start_date,
							end_date:end_date,
							branch_id:branch_id
						},
						success:function(data)
						{
							$('#nds_sales_list_table_div').html(data);
						}
					});
				});
			}
	
	//WAYBILL
			function new_waybill_modal()
			{
				$(document).on('click','#create_waybill, #new_waybill_icon',function()
				{
					var id = $(this).attr('id');
					$('#waybill_create_form').trigger('reset');
					if(id == 'create_waybill')
					{
						var nds_sales_id = $(this).attr('data-id');
						var customer_id = $(this).attr('data-id1');
						$.ajax({
							url:'/layout/vouchers/waybill_new_modal_list.php',
							method:'POST',
							data:{nds_sales_id:nds_sales_id},
							success:function(data)
							{
								$('#waybill_items_list').html(data);
								$('#waybill_customer_id').val(customer_id);
								$('#waybill_nds_sales_id').val(nds_sales_id);
							}
						});
					};
					$.ajax({
						url:'/layout/vouchers/waybill_unique.php',
						method:'POST',
						data:{
							id:id
						},
						success:function(data)
						{
							$('#waybill_unique').val(data);
							$('#waybill_update_btn').hide();
							$('#waybill_save_btn').show();
							$('#waybill_create_modal').modal('show');
						}
					});
				});
			}
	
			function waybill_customer_item_list()
			{
				$(document).on('change','#waybill_customer_id',function()
				{
					var customer_id = $(this).val();
					var customer_telephone = $('option:selected', '#waybill_customer_id').attr('data-customer_telephone');
					var customer_name = $('option:selected', '#waybill_customer_id').attr('data-customer_name');
					
					$.ajax({
						url:'/layout/vouchers/waybill_customer_item_list.php',
						method:'POST',
						data:{customer_id:customer_id},
						success:function(data)
						{
							$('#waybill_customer_phone').val(customer_telephone);
							$('#waybill_customer_phoneD').val(customer_telephone);
							$('#waybill_customer_name').val(customer_name);
							$('#waybill_items_list').html(data);
						}
					});
				});
			}

			function waybill_send_code()
			{
				/*$(document).on('click','#waybill_send_code_btn',function()
				{
					var telephone = $('#waybill_customer_phone').val();
					var name = $('#waybill_customer_name').val();
					$.ajax({
						url:'/layout/vouchers/waybill_send_secret_code.php',
						method:'POST',
						data:{
							telephone:telephone,
							name:name
						},
						success:function(data)
						{
							$('#waybill_secret_code_sent').val(data);
							$('#waybill_msg').html('<p style=color:green;>Secret Code sent!</p>');
							$('#waybill_msg').hide().slideDown().delay(3000).fadeOut();
						}
					});
				});*/
			}
	
			function add_waybill_item_row()
			{
				$(document).on('change','.waybill_stock_item_id',function()
				{ 
					var i = $('#waybill_items_table tr:last').attr('id');
					var iitem = $('#waybill_stock_item_id'+i).val();
					if(iitem > 0)
					{
						i++;
						$.ajax({
							url:'/layout/vouchers/waybill_new_item_row.php',
							method:'POST',
							data:{i:i},
							success:function(data)
							{
								$('#waybill_items_table').append(data);
							}
						});
					}
				});
			}
	
			function validate_waybill_item_qty()
			{
				$(document).on('keyup','.waybill_qty_issue',function()
				{ 
					var i = $(this).attr('data-id');
					var customer_balance = parseFloat($(this).attr('data-qty'));
					var block_negative = $(this).attr('data-negative');
					var branch_balance = $(this).attr('data-branch');
					var qty = parseFloat($(this).val());
					if(qty <= customer_balance)
					{
						if(block_negative == 'Yes' && branch_balance < qty)
						{
							alert('Please the qty:'+qty+' is more than the branch balance of:'+branch_balance+'. Qty declined!');
							$(this).val(branch_balance);
						};
					}
					else
					{
						alert('Please the qty:'+qty+' is more than the customer balance of:'+customer_balance+'. Qty declined!');
						if(customer_balance <= branch_balance)
						{
							$(this).val(customer_balance);
						}
						else
						{
							$(this).val(branch_balance);
						};
					};
				});
			}
	
			function delete_waybill_item_row()
			{
				$(document).on('click', '#delete_waybill_item', function()
				{  
					var id = $(this).attr("data-id");
					$('#'+id+'').remove();
				});
			}
	
			function cancel_waybill_modal()
			{
				$(document).on('click','#waybill_cancel_btn',function()
				{
					var page = window.location.pathname;
					$('#waybill_create_form').trigger('reset');
					$('#waybill_create_modal').modal('hide');
					window.location.href= page;
				});
			}
	
			function save_waybill()
			{
				$(document).on('click','#waybill_save_btn',function(e){
					e.preventDefault();
					var last_tr_id = $("#waybill_items_table tr:last").attr("id");
					var last_tr_select = $("#waybill_items_table tr:last option:selected").val();
					if(last_tr_select == "" || last_tr_select == 0)
					{
						$('#'+last_tr_id+'').remove();
					};
					var waybill_customer_id = $('#waybill_customer_id').val();
					var waybill_date = $('#waybill_date').val();
					var driver = $('#waybill_driver').val();
					var car_number = $('#waybill_car_number').val();
					var code_entered = $('#waybill_secret_code').val();
					var code_sent = $('#waybill_secret_code_sent').val();
					var destination = $('#waybill_destination').val();
	
					var qty = 0;
					$(".waybill_qty_issue").each(function()
					{
						qty += +$(this).val();
					});
					
					//if (code_entered != '' &&  code_sent != '' && code_entered == code_sent) 
					//{
						if (waybill_customer_id !=="") 
						{
							if (waybill_date !=="") 
							{
								if (qty > 0) 
								{
									if (driver != '') 
									{
										if (car_number !='') 
										{
											if (destination !='') 
											{
												$.ajax({
													url:'/layout/vouchers/waybill_save.php',
													method:'POST',
													data:$('#waybill_create_form').serialize(),
													success:function(data)
													{
														$('#waybill_create_form').trigger('reset');
														$('#waybill_create_modal').modal('hide');
														if(data=='exist')
														{
															alert('This Waybill has been SAVED already!');
														}
														else
														{
															window.open('/layout/vouchers/waybill_pdf.php', '_blank');
															window.location.href= page;
															//window.location.href="/layout/vouchers/waybill_list.php";
														};
													}
												});
											} 
											else 
											{
												alert('Please the destination cannot be EMPTY!');
											};
										} 
										else 
										{
											alert('Please the car number cannot be EMPTY!');
										};
									} 
									else 
									{
										alert('Please the driver cannot be EMPTY!');
									};
								} 
								else 
								{
									alert('Please provide quantity for at least one waybill item!');
								};
							} 
							else 
							{
								alert('Please the Date cannot be EMPTY!');
							};
						} 
						else 
						{
							alert('Please select a Customer)!');
						};
					/*} 
					else 
					{
						alert('Please enter the correct secret code sent to the customer phone number!)!');
					};*/
				});
			}
	
			function edit_waybill()
			{
				$(document).on('click','#btn_edit_waybill',function(){
					var waybill_id = $(this).attr('data-id');
					$.ajax({
						url:'/layout/vouchers/waybill_edit.php',
						method:'POST',
						data:{waybill_id:waybill_id},
						datatype:'JSON',
						success:function(data)
						{
							var res = $.parseJSON(data);
							$('#waybill_id').val(res[0]);
							$('#waybill_nds_sales_id').val(res[1]);
							$('#waybill_customer_id').val(res[2]);
							$('#waybill_date').val(res[3]);
							$('#waybill_issued_by').val(res[4]);
							$('#waybill_approved_by').val(res[5]);
							$('#waybill_driver').val(res[6]);
							$('#waybill_car_number').val(res[7]);
							$('#waybill_driver_telephone').val(res[8]);
							$('#waybill_destination').val(res[9]);
							$('#waybill_narration').val(res[10]);
							$('#waybill_items_list').html(res[11]);
							$('#waybill_branch_id').html(res[12]);
							$('#waybill_branch_idD').html(res[12]);
							$('#waybill_update_btn').show();
							$('#waybill_save_btn').hide();
							$('#waybill_create_modal').modal('show');
						}
					});
				});
			}
	
			function update_waybill()
			{
				$(document).on('click','#waybill_update_btn',function(e){
					e.preventDefault();
					var last_tr_id = $("#waybill_items_table tr:last").attr("id");
					var last_tr_select = $("#waybill_items_table tr:last option:selected").val();
					if(last_tr_select == "" || last_tr_select == 0)
					{
						$('#'+last_tr_id+'').remove();
					};
					var waybill_customer_id = $('#waybill_customer_id').val();
					var waybill_date = $('#waybill_date').val();
					var driver = $('#waybill_driver').val();
					var car_number = $('#waybill_car_number').val();
					var page = window.location.pathname;
					if (waybill_customer_id !=="") 
					{
						if (waybill_date !=="") 
						{
							if (driver !='') 
							{
								if (car_number !='') 
								{
									$.ajax({
										url:'/layout/vouchers/waybill_update.php',
										method:'POST',
										data:$('#waybill_create_form').serialize(),
										success:function(data)
										{
											$('#waybill_create_form').trigger('reset');
											window.open('/layout/vouchers/waybill_pdf.php', '_blank');
											window.location.href= page;
										}
									});
								} 
								else 
								{
									alert('Please the car number cannot be EMPTY!');
								};
							} 
							else 
							{
								alert('Please the driver cannot be EMPTY!');
							};
						} 
						else 
						{
							alert('Please the Date cannot be EMPTY!');
						};
					} 
					else 
					{
						alert('Please select a Customer)!');
					};
				});
			}
	
			function reprint_waybill()
			{
				$(document).on('click','#btn_waybill_reprint',function()
				{
					var waybill_id = $(this).attr('data-id');
					$.ajax({
						url:'/layout/vouchers/waybill_reprint.php',
						method:'POST',
						data:{
							waybill_id:waybill_id
						},
						success:function(data)
						{
							window.open('/layout/vouchers/waybill_pdf.php', '_blank');
						}
					});
				});
			}
	
			function delete_waybill()
			{
				$(document).on('click','#btn_delete_waybill',function()
				{
					var waybill_id = $(this).attr('data-id');
					var currentRow=$(this).closest("tr");
					var sales_date = currentRow.find("td:eq(1)").text();
					//var Supplier = currentRow.find("td:eq(3)").text();
					$('#waybill_invoice_delete_question').text('Are you sure you want to delete stock sales invoice of ' + sales_date + '?');
					$('#waybill_invoice_delete_modal').modal('show');
					$(document).on('click','#waybill_delete_yes',function()
					{
						$.ajax({  
							url:'/layout/vouchers/waybill_delete.php',  
							type:'POST',  
							data:{waybill_id:waybill_id},
							success:function(){
								$('#waybill_invoice_delete_modal').modal('hide');
								window.location.href="/layout/vouchers/waybill_list.php";
							}  
						});
					});
					$(document).on('click','#waybill_delete_no',function(){
						$('#waybill_invoice_delete_modal').modal('hide');
					});
				});
			}
	
			function search_waybill_by_name()
			{
				$(document).on('keyup','#waybill_name',function(e){
					e.preventDefault();
					var company_id = $('#session_company_id').val();
					var name = $('#waybill_name').val();
	
					$.ajax({
						url:'/layout/vouchers/waybill_search_by_name.php',
						method:'POST',
						data:{name:name,company_id:company_id},
						success:function(data)
						{
							$('#waybill_list_table').html(data);
						}
					});
				});
			}

			function search_waybill_by_date()
			{
				$(document).on('click','#waybill_search_icon',function(e){
					e.preventDefault();
					var company_id = $('#session_company_id').val();
					var start_date = $('#waybill_search_from').val();
					var end_date = $('#waybill_search_to').val();
	
					$.ajax({
						url:'/layout/vouchers/waybill_search_by_date.php',
						method:'POST',
						data:{start_date:start_date,end_date:end_date,company_id:company_id},
						success:function(data)
						{
							$('#waybill_list_table').html(data);
						}
					});
				});
			}
	
			function search_waybill_by_branch()
			{
				$(document).on('change','#waybill_search_by_branch',function(e){
					e.preventDefault();
					var branch_id = $('#waybill_search_by_branch').val();
					var start_date = $('#waybill_search_from').val();
					var end_date = $('#waybill_search_to').val();
	
					$.ajax({
						url:'/layout/vouchers/waybill_search_by_branch.php',
						method:'POST',
						data:{start_date:start_date,end_date:end_date,branch_id:branch_id},
						success:function(data)
						{
							$('#waybill_list_table').html(data);
						}
					});
				});
			}
	
	//SWAP
			function new_swap_modal()
			{
				$(document).on('click','#new_swap_icon',function()
				{
					var vat_type = 'none';
					$.ajax({
						url:'/layout/vouchers/swap_unique.php',
						method:'POST',
						data:{
							vat_type:vat_type
						},
						success:function(data)
						{
							$('#swap_create_form').trigger('reset');
							$('#swap_unique').val(data);
							$('#swap_credit').val(35);
							$('#swap_update_btn').hide();
							$('#swap_save_btn').show();
							$('#swap_create_modal').modal('show');
						}
					});
				});
			}
	
			function cancel_swap_modal()
			{
				$(document).on('click','#swap_cancel_btn',function()
				{
					var page = window.location.pathname;
					$('#swap_create_form').trigger('reset');
					$('#swap_create_modal').modal('hide');
					window.location.href= page;
					//window.location.href="/layout/vouchers/swap_list.php";
				});
			}
			
			function swap_customer_item_list()
			{
				$(document).on('change','#swap_customer_id',function()
				{
					var customer_id = $(this).val();
					$.ajax({
						url:'/layout/vouchers/swap_customer_item_list.php',
						method:'POST',
						data:{customer_id:customer_id},
						success:function(data)
						{
							$('#swap_items_consumption_list').html(data);
						}
					});
				});
			}
	
			function add_swap_production_item_row()
			{
				$(document).on('change','.swap_production_item_id',function()
				{ 
					var i = $('#swap_items_production_table tr:last').attr('id');
					var item = $('#swap_production_item_id'+i).val();
					if(item > 0)
					{
						i++;
						$.ajax({
							url:'/layout/vouchers/swap_production_item_list.php',
							method:'POST',
							data:{i:i},
							success:function(data)
							{
								$('#swap_items_production_table').append(data);
							}
						});
					};
				});
			}
	
			function delete_swap_production_item_row()
			{
				$(document).on('click', '#delete_swap_item', function()
				{  
					var id = $(this).attr("data-id");
					$('#'+id+'').remove();
				});
			}

			function save_swap()
			{
				$(document).on('click','#swap_save_btn',function(e)
				{
					e.preventDefault();
					/*var last_tr_id = $("#swap_items_production_table tr:last").attr("id");
					var last_tr_select = $("#swap_items_production_table tr:last option:selected").val();
					if(last_tr_select =="" || last_tr_select ==0)
					{
						$('#'+last_tr_id+'').remove();
					};*/
					
					var total_qty_consumed = 0;
					$(".swap_consumption_qty_swap").each(function()
					{
						total_qty_consumed += +$(this).val();
					});
	
					var total_qty_produced = 0;
					$(".swap_production_qty").each(function()
					{
						total_qty_produced += +$(this).val();
					});
	
					var customer = $('#swap_customer_id').val();
					var date = $('#swap_date').val();
					var swap_consumption_item_id = $('#swap_consumption_item_id').val();
					var swap_production_item_id = $('#swap_production_item_id1').val();
					var swap_narration = $('#swap_narration').val();
					var page = window.location.pathname;
					if (customer !=="") 
					{
						if (date !=="") 
						{
							if (swap_consumption_item_id !=="") 
							{
								if (swap_production_item_id > 0) 
								{
									if (total_qty_produced > 0) 
									{
										if (total_qty_consumed > 0) 
										{
											if(swap_narration !='')
											{
												$.ajax({
													url:'/layout/vouchers/swap_save.php',
													method:'POST',
													data:$('#swap_create_form').serialize(),
													success:function(data)
													{
														$('#swap_create_form').trigger('reset');
														$('#swap_create_modal').modal('hide');
														if(data == 'exist')
														{
															alert('This Swap Voucher has been SAVED already!');
														}
														else
														{
															window.open('/layout/vouchers/swap_pdf.php', '_blank');
															window.location.href= page;
														};
													}
												});
											}
											else
											{
												alert('Please the narration cannot be EMPTY');
											};
										} 
										else 
										{
											alert('Please the Total Quantity Consumed cannot be less than 1!');
										};
									} 
									else 
									{
										alert('Please the Total Quantity Produced cannot be less than 1!');
									};
								} 
								else 
								{
									alert('Please select items to swap!');
								};
							} 
							else 
							{
								alert('Please select customer item to swap!');
							};
						} 
						else 
						{
							alert('Please select the date of swap!');
						};
					} 
					else 
					{
						alert('Please the Customer Name cannot be EMPTY!');
					};
				});
			}
	
			function reprint_swap()
			{
				$(document).on('click','#btn_swap_reprint',function()
				{
					var swap_id = $(this).attr('data-id');
					var id = $(this).attr('id');
					$.ajax({
						url:'/layout/vouchers/swap_reprint.php',
						method:'POST',
						data:{
							swap_id:swap_id
						},
						success:function(data)
						{
							window.open('/layout/vouchers/swap_pdf.php', '_blank');
						}
					});
				});
			}
	
			function delete_swap()
			{
				$(document).on('click','#btn_delete_swap',function(){
					var swap_id = $(this).attr('data-id');
					var currentRow=$(this).closest("tr");
					var sales_date = currentRow.find("td:eq(0)").text();
					//var Supplier = currentRow.find("td:eq(3)").text();
					$('#swap_invoice_delete_question').text('Are you sure you want to delete Swap Voucher of ' + sales_date + '?');
					$('#swap_invoice_delete_modal').modal('show');
					$(document).on('click','#swap_delete_yes',function()
					{
						$.ajax({  
							url:'/layout/vouchers/swap_delete.php',  
							type:'POST',  
							data:{swap_id:swap_id},
							success:function(){
								$('#swap_invoice_delete_modal').modal('hide');
								window.location.href="/layout/vouchers/swap_list.php";
							}  
						});
					});
					$(document).on('click','#swap_delete_no',function(){
						$('#swap_invoice_delete_modal').modal('hide');
					});
				});
			}
	
			function search_swap_by_name()
			{
				$(document).on('keyup','#swap_name',function(e){
					e.preventDefault();
					var company_id = $('#session_company_id').val();
					var name = $('#swap_name').val();
	
					$.ajax({
						url:'/layout/vouchers/swap_search_by_name.php',
						method:'POST',
						data:{name:name,company_id:company_id},
						success:function(data)
						{
							$('#swap_list_table').html(data);
						}
					});
				});
			}
	
			function search_swap_by_date()
			{
				$(document).on('click','#swap_search_icon',function(e){
					e.preventDefault();
					var company_id = $('#session_company_id').val();
					var start_date = $('#swap_search_from').val();
					var end_date = $('#swap_search_to').val();
	
					$.ajax({
						url:'/layout/vouchers/swap_search_by_date.php',
						method:'POST',
						data:{start_date:start_date,end_date:end_date,company_id:company_id},
						success:function(data)
						{
							$('#swap_list_table').html(data);
						}
					});
				});
			}
	
			function search_swap_by_branch()
			{
				$(document).on('change','#swap_search_by_branch',function(e)
				{
					e.preventDefault();
					var branch_id = $('#swap_search_by_branch').val();
					var start_date = $('#swap_search_from').val();
					var end_date = $('#swap_search_to').val();
	
					$.ajax({
						url:'/layout/vouchers/swap_search_by_branch.php',
						method:'POST',
						data:{start_date:start_date,end_date:end_date,branch_id:branch_id},
						success:function(data)
						{
							$('#swap_list_table').html(data);
						}
					});
				});
			}

	//STOCK_SALES
		function new_stock_sales_modal()
		{
			$(document).on('click','#new_stock_sales_icon',function()
			{
				var vat_type = $('#session_vat_type').val();
				var vat_calc_type = $('#session_vat_calc_type').val();

				$('#stock_sales_create_form').trigger('reset');
				if(vat_type != 'None')
				{
					$('#stock_sales_vat_type_div').prop('class','col-md-2 mb-2 form-group');
					$('#stock_sales_calc_type_div').prop('hidden',false);
					$('#stock_sales_vat_type').val(vat_type);
					$('#stock_sales_calc_type').val(vat_calc_type);
				}

				$.ajax({
					url:'/layout/vouchers/stock_sales_unique.php',
					method:'POST',
					data:{
						vat_type:vat_type
					},
					success:function(data)
					{
						$('#stock_sales_unique').val(data);
						$('#stock_sales_credit').val(35);
						$('#stock_sales_update_btn').hide();
						$('#stock_sales_save_btn').show();
						$('#stock_sales_create_modal').modal('show');
					}
				});
			});
		}

		function cancel_stock_sales_modal()
		{
			$(document).on('click','#stock_sales_cancel_btn',function()
			{
				var page = window.location.pathname;
				$('#stock_sales_create_form').trigger('reset');
				$('#stock_sales_create_modal').modal('hide');
				window.location.href= page;
				//window.location.href="/layout/vouchers/stock_sales_list.php";
			});
		}

		function add_stock_sales_item_row()
		{
			$(document).on('change','.stock_sales_desc',function()
			{ 
				var i = $('#stock_sales_items_table tr:last').attr('id');
				var stock_item_id = $('#stock_sales_desc'+i).val();
				if(stock_item_id > 0)
				{
					i++;
					$.ajax({
						url:'/layout/vouchers/stock_sales_item_list.php',
						method:'POST',
						data:{i:i},
						success:function(data)
						{
							$('#stock_sales_items_table').append(data);
						}
					});
				};
			});
		}

		function add_stock_sales_item_price()
		{
			$(document).on('change','.stock_sales_desc',function(){
				var i = $(this).attr('data-id');
				var stock_item_id = $('#stock_sales_desc'+i+'').val();
				var qty = $('#stock_sales_qty'+i+'').val();
				var vat_type = $('#stock_sales_vat_type').val();
				var calc_type = $('#stock_sales_calc_type').val();
				if(isNaN(parseFloat($('#stock_sales_discount_amount').val())))
				{
					var discount = 0;
				}
				else
				{
					var discount = parseFloat($('#stock_sales_discount_amount').val());
				};
				if(isNaN(parseFloat($('#stock_sales_discount_rate').val())))
				{
					var discount_perc = 0;
				}
				else
				{
					var discount_perc = parseFloat($('#stock_sales_discount_rate').val());
				};

				if(discount_perc !='' && discount_perc > 0)
				{
					var disc = parseFloat(discount_perc * sub_total).toFixed(2);
					$('#stock_sales_discount_amount').val(disc);
				}
				else if((discount_perc =='' || discount_perc==0) && discount > 0)
				{
					var disc = discount;
				}
				else
				{
					var disc = 0
				};
				$.ajax({
					url:'/layout/vouchers/stock_sales_item_price.php',
					method:'POST',
					data:{stock_item_id:stock_item_id},
					datatype:'JSON',
					success:function(data)
					{
						var res = $.parseJSON(data);
						$('#stock_sales_price'+i+'').val(res[0]);
						$('#stock_sales_priceD'+i+'').val(res[0]);
						$('#stock_sales_qty'+i).attr('data-id1',res[1]);
						var amt = qty * res[0];
						$('#stock_sales_amt'+i).val(amt);
						$('#stock_sales_amtD'+i).val(amt);
						var total = 0;
						$(".stock_sales_amt").each(function()
						{
							total += +$(this).val();
						});
						var amount_after_discount = total - discount;
						$('#stock_sales_amount').val(total);
						$('#stock_sales_amount_2').val(total);
						$('#stock_sales_sub_total_amount').val(total);
						$('#stock_sales_sub_total_amountD').val(total);
						$('#stock_sales_total_amount').val(amount_after_discount);
						$('#stock_sales_total_amountD').val(amount_after_discount);
		
						var amount = parseFloat($('#stock_sales_total_amount').val());
						
						if(vat_type != 'None' && vat_type == 'Standard Rate')
						{
							$('#stock_sales_vat_type_div').prop('class','col-md-2 mb-2 form-group');
							$('#stock_sales_calc_type_div').prop('hidden',false);
							$('#stock_sales_vat_list').prop('hidden',false);
							$('#vat_row').prop('hidden',false);
							var covid_perc = $('#session_covid_perc').val();
							var nhil_perc = $('#session_nhil_perc').val();
							var getfund_perc = $('#session_getfund_perc').val();
							var vat_perc = $('#session_vat_perc').val();
							
							$('#stock_sales_covid_rate').val(covid_perc);
							$('#stock_sales_getfund_rate').val(getfund_perc);
							$('#stock_sales_nhil_rate').val(nhil_perc);
							$('#stock_sales_vat_rate').val(vat_perc);
		
							var covid_rate = parseFloat($('#stock_sales_covid_rate').val());
							var getfund_rate = parseFloat($('#stock_sales_getfund_rate').val());
							var nhil_rate = parseFloat($('#stock_sales_nhil_rate').val());
							var vat_rate = parseFloat($('#stock_sales_vat_rate').val());
							var total_levy_rate = parseFloat(parseFloat(covid_rate) + parseFloat(getfund_rate) + parseFloat(nhil_rate));
		
							if(amount > 0)
							{
								if(calc_type == 'Inclusive')
								{
									var total_after_levies = parseFloat(parseFloat(amount)/parseFloat(1 + vat_rate)).toFixed(2);
									var vat = parseFloat((parseFloat(amount) * parseFloat(vat_rate))/parseFloat(1 + vat_rate)).toFixed(2);
									var covid = parseFloat((parseFloat(total_after_levies) * parseFloat(covid_rate))/parseFloat(1 + total_levy_rate)).toFixed(2);
									var getfund = parseFloat((parseFloat(total_after_levies) * parseFloat(getfund_rate))/parseFloat(1 + total_levy_rate)).toFixed(2);
									var nhil = parseFloat((parseFloat(total_after_levies) * parseFloat(nhil_rate))/parseFloat(1 + total_levy_rate)).toFixed(2);
									var total_levy = parseFloat(parseFloat(covid) + parseFloat(getfund) + parseFloat(nhil)).toFixed(2);
									var net = parseFloat(amount).toFixed(2);
								}
								else if(calc_type == 'Exclusive')
								{
									var covid = parseFloat(amount * covid_rate).toFixed(2);
									var getfund = parseFloat(amount * getfund_rate).toFixed(2);
									var nhil = parseFloat(amount * nhil_rate).toFixed(2);
									var total_levy = parseFloat(parseFloat(covid) + parseFloat(getfund) + parseFloat(nhil)).toFixed(2);
									var total_after_levies = parseFloat(parseFloat(amount) + parseFloat(total_levy)).toFixed(2);
									var vat = parseFloat(parseFloat(total_after_levies) * parseFloat(vat_rate)).toFixed(2);
									var net = parseFloat(parseFloat(total_after_levies) + parseFloat(vat)).toFixed(2);
								};
								$('#stock_sales_covid_amount').val(covid);
								$('#stock_sales_covid_amountD').val(covid);
								$('#stock_sales_getfund_amount').val(getfund);
								$('#stock_sales_getfund_amountD').val(getfund);
								$('#stock_sales_nhil_amount').val(nhil);
								$('#stock_sales_nhil_amountD').val(nhil);
								$('#stock_sales_vat_amount').val(vat);
								$('#stock_sales_vat_amountD').val(vat);
								$('#stock_sales_total_levies_amount').val(total_levy);
								$('#stock_sales_total_levies_amountD').val(total_levy);
								$('#stock_sales_total_after_levies_amount').val(total_after_levies);
								$('#stock_sales_total_after_levies_amountD').val(total_after_levies);
								$('#stock_sales_net_amount_amount').val(net);
								$('#stock_sales_net_amount_amountD').val(net);
								$('#stock_sales_amount').val(net);
								$('#stock_sales_amount_2').val(net);
							};
						}
						else if(vat_type != 'None' && vat_type == 'Flat Rate')
						{
							$('#stock_sales_vat_type_div').prop('class','col-md-2 mb-2 form-group');
							$('#stock_sales_calc_type_div').prop('hidden',false);
							$('#stock_sales_vat_list').prop('hidden',false);
							$('#vat_row').prop('hidden',false);
							var covid_perc = $('#session_covid_perc').val();
							var nhil_perc = 0;
							var getfund_perc = 0;
							var vat_perc = 0.030;
							
							$('#stock_sales_covid_rate').val(covid_perc);
							$('#stock_sales_getfund_rate').val(getfund_perc);
							$('#stock_sales_nhil_rate').val(nhil_perc);
							$('#stock_sales_vat_rate').val(vat_perc);
							
							var covid_rate = parseFloat($('#stock_sales_covid_rate').val()).toFixed(3);
							var getfund_rate = parseFloat($('#stock_sales_getfund_rate').val()).toFixed(3);
							var nhil_rate = parseFloat($('#stock_sales_nhil_rate').val()).toFixed(3);
							var vat_rate = parseFloat($('#stock_sales_vat_rate').val()).toFixed(3);
							var total_levy_rate = parseFloat(covid_rate) + parseFloat(getfund_rate) + parseFloat(nhil_rate);
							var covid_vat_rate = parseFloat(parseFloat(covid_rate) + parseFloat(vat_rate)).toFixed(3);
		
							if(amount > 0)
							{
								if(calc_type == 'Inclusive')
								{
									var covid = parseFloat((parseFloat(amount)/parseFloat(1 + parseFloat(covid_vat_rate))) * parseFloat(covid_rate)).toFixed(2);
									var vat = parseFloat((parseFloat(amount)/parseFloat(1 + parseFloat(covid_vat_rate))) * parseFloat(vat_rate)).toFixed(2);
									var getfund = 0;
									var nhil = 0;
									var total_levy = parseFloat(parseFloat(covid) + parseFloat(getfund) + parseFloat(nhil)).toFixed(2);
									var net = parseFloat(amount).toFixed(2);
								}
								else if(calc_type == 'Exclusive')
								{
									var covid = parseFloat(parseFloat(amount) * parseFloat(covid_rate)).toFixed(2);
									var vat = parseFloat(parseFloat(amount) * parseFloat(vat_rate)).toFixed(2);
									var getfund = 0;
									var nhil = 0;
									var total_levy = parseFloat(parseFloat(covid) + parseFloat(getfund) + parseFloat(nhil)).toFixed(2);
									var net = parseFloat(parseFloat(amount) + parseFloat(total_levy) + parseFloat(vat)).toFixed(2);
								};
								$('#stock_sales_covid_amount').val(covid);
								$('#stock_sales_covid_amountD').val(covid);
								$('#stock_sales_getfund_amount').val(getfund);
								$('#stock_sales_getfund_amountD').val(getfund);
								$('#stock_sales_nhil_amount').val(nhil);
								$('#stock_sales_nhil_amountD').val(nhil);
								$('#stock_sales_vat_amount').val(vat);
								$('#stock_sales_vat_amountD').val(vat);
								$('#stock_sales_total_levies_amount').val(total_levy);
								$('#stock_sales_total_levies_amountD').val(total_levy);
								$('#stock_sales_total_after_levies_amount').val(net);
								$('#stock_sales_total_after_levies_amountD').val(net);
								$('#stock_sales_net_amount_amount').val(net);
								$('#stock_sales_net_amount_amountD').val(net);
								$('#stock_sales_amount').val(net);
								$('#stock_sales_amount_2').val(net);
							};
						}
						else if(vat_type == 'None')
						{
							$('#stock_sales_vat_type_div').prop('class','col-md-4 mb-4 form-group');
							$('#stock_sales_calc_type_div').prop('hidden',true);
							$('#stock_sales_vat_list').prop('hidden',true);
							$('#stock_sales_covid_rate').val(0);
							$('#stock_sales_covid_amount').val(0);
							$('#stock_sales_covid_amountD').val(0);
							$('#stock_sales_getfund_rate').val(0);
							$('#stock_sales_getfund_amount').val(0);
							$('#stock_sales_getfund_amountD').val(0);
							$('#stock_sales_nhil_rate').val(0);
							$('#stock_sales_nhil_amount').val(0);
							$('#stock_sales_nhil_amountD').val(0);
							$('#stock_sales_total_levies_amount').val(0);
							$('#stock_sales_total_levies_amountD').val(0);
							$('#stock_sales_total_after_levies_amount').val(0);
							$('#stock_sales_total_after_levies_amountD').val(0);
							$('#stock_sales_vat_rate').val(0);
							$('#stock_sales_vat_amount').val(0);
							$('#stock_sales_vat_amountD').val(0);
							$('#stock_sales_net_amount_amount').val(0);
							$('#stock_sales_net_amount_amountD').val(0);
							$('#stock_sales_vat_witholding_rate').val(0);
							$('#stock_sales_vat_witholding_amount').val(0);
							$('#stock_sales_vat_witholding_amountD').val(0);
							$('#stock_sales_amount').val(amount);
							$('#stock_sales_amount_2').val(amount);
						};
					}
		        });
			});
		}

		function get_stock_sales_item_amount()
		{
			$(document).on('change keyup', '.stock_sales_price, .stock_sales_qty', function(){  
       			var i = $(this).attr("data-id"); 
       			var qty = $('#stock_sales_qty'+i).val();
       			var price = $('#stock_sales_price'+i).val();
				var vat_type = $('#stock_sales_vat_type').val();
				var calc_type = $('#stock_sales_calc_type').val();
				if(isNaN(parseFloat($('#stock_sales_discount_amount').val())))
				{
					var discount = 0;
				}
				else
				{
					var discount = parseFloat($('#stock_sales_discount_amount').val());
				};
				if(isNaN(parseFloat($('#stock_sales_discount_rate').val())))
				{
					var discount_perc = 0;
				}
				else
				{
					var discount_perc = parseFloat($('#stock_sales_discount_rate').val());
				};

				if(discount_perc !='' && discount_perc > 0)
				{
					var disc = parseFloat(discount_perc * sub_total).toFixed(2);
					$('#stock_sales_discount_amount').val(disc);
				}
				else if((discount_perc =='' || discount_perc==0) && discount > 0)
				{
					var disc = discount;
				}
				else
				{
					var disc = 0
				};
       			var amt = qty * price;
           		$('#stock_sales_amt'+i).val(amt);
           		$('#stock_sales_amtD'+i).val(amt);
				var total = 0;
				$(".stock_sales_amt").each(function()
				{
					total += +$(this).val();
				});
				var amount_after_discount = total - disc;
				$('#stock_sales_amount').val(total);
				$('#stock_sales_amount_2').val(total);
				$('#stock_sales_sub_total_amount').val(total);
				$('#stock_sales_sub_total_amountD').val(total);
				$('#stock_sales_total_amount').val(amount_after_discount);
				$('#stock_sales_total_amountD').val(amount_after_discount);

				var amount = parseFloat($('#stock_sales_total_amount').val());
				
				if(vat_type != 'None' && vat_type == 'Standard Rate')
				{
					$('#stock_sales_vat_type_div').prop('class','col-md-2 mb-2 form-group');
					$('#stock_sales_calc_type_div').prop('hidden',false);
					$('#stock_sales_vat_list').prop('hidden',false);
					$('#vat_row').prop('hidden',false);
					var covid_perc = $('#session_covid_perc').val();
					var nhil_perc = $('#session_nhil_perc').val();
					var getfund_perc = $('#session_getfund_perc').val();
					var vat_perc = $('#session_vat_perc').val();
					
					$('#stock_sales_covid_rate').val(covid_perc);
					$('#stock_sales_getfund_rate').val(getfund_perc);
					$('#stock_sales_nhil_rate').val(nhil_perc);
					$('#stock_sales_vat_rate').val(vat_perc);

					var covid_rate = parseFloat($('#stock_sales_covid_rate').val());
					var getfund_rate = parseFloat($('#stock_sales_getfund_rate').val());
					var nhil_rate = parseFloat($('#stock_sales_nhil_rate').val());
					var vat_rate = parseFloat($('#stock_sales_vat_rate').val());
					var total_levy_rate = parseFloat(parseFloat(covid_rate) + parseFloat(getfund_rate) + parseFloat(nhil_rate));

					if(amount > 0)
					{
						if(calc_type == 'Inclusive')
						{
							var total_after_levies = parseFloat(parseFloat(amount)/parseFloat(1 + vat_rate)).toFixed(2);
							var vat = parseFloat((parseFloat(amount) * parseFloat(vat_rate))/parseFloat(1 + vat_rate)).toFixed(2);
							var covid = parseFloat((parseFloat(total_after_levies) * parseFloat(covid_rate))/parseFloat(1 + total_levy_rate)).toFixed(2);
							var getfund = parseFloat((parseFloat(total_after_levies) * parseFloat(getfund_rate))/parseFloat(1 + total_levy_rate)).toFixed(2);
							var nhil = parseFloat((parseFloat(total_after_levies) * parseFloat(nhil_rate))/parseFloat(1 + total_levy_rate)).toFixed(2);
							var total_levy = parseFloat(parseFloat(covid) + parseFloat(getfund) + parseFloat(nhil)).toFixed(2);
							var net = parseFloat(amount).toFixed(2);
						}
						else if(calc_type == 'Exclusive')
						{
							var covid = parseFloat(amount * covid_rate).toFixed(2);
							var getfund = parseFloat(amount * getfund_rate).toFixed(2);
							var nhil = parseFloat(amount * nhil_rate).toFixed(2);
							var total_levy = parseFloat(parseFloat(covid) + parseFloat(getfund) + parseFloat(nhil)).toFixed(2);
							var total_after_levies = parseFloat(parseFloat(amount) + parseFloat(total_levy)).toFixed(2);
							var vat = parseFloat(parseFloat(total_after_levies) * parseFloat(vat_rate)).toFixed(2);
							var net = parseFloat(parseFloat(total_after_levies) + parseFloat(vat)).toFixed(2);
						};
						$('#stock_sales_covid_amount').val(covid);
						$('#stock_sales_covid_amountD').val(covid);
						$('#stock_sales_getfund_amount').val(getfund);
						$('#stock_sales_getfund_amountD').val(getfund);
						$('#stock_sales_nhil_amount').val(nhil);
						$('#stock_sales_nhil_amountD').val(nhil);
						$('#stock_sales_vat_amount').val(vat);
						$('#stock_sales_vat_amountD').val(vat);
						$('#stock_sales_total_levies_amount').val(total_levy);
						$('#stock_sales_total_levies_amountD').val(total_levy);
						$('#stock_sales_total_after_levies_amount').val(total_after_levies);
						$('#stock_sales_total_after_levies_amountD').val(total_after_levies);
						$('#stock_sales_net_amount_amount').val(net);
						$('#stock_sales_net_amount_amountD').val(net);
						$('#stock_sales_amount').val(net);
						$('#stock_sales_amount_2').val(net);
					};
				}
				else if(vat_type != 'None' && vat_type == 'Flat Rate')
				{
					$('#stock_sales_vat_type_div').prop('class','col-md-2 mb-2 form-group');
					$('#stock_sales_calc_type_div').prop('hidden',false);
					$('#stock_sales_vat_list').prop('hidden',false);
					$('#vat_row').prop('hidden',false);
					var covid_perc = $('#session_covid_perc').val();
					var nhil_perc = 0;
					var getfund_perc = 0;
					var vat_perc = 0.030;
					
					$('#stock_sales_covid_rate').val(covid_perc);
					$('#stock_sales_getfund_rate').val(getfund_perc);
					$('#stock_sales_nhil_rate').val(nhil_perc);
					$('#stock_sales_vat_rate').val(vat_perc);
					
					var covid_rate = parseFloat($('#stock_sales_covid_rate').val()).toFixed(3);
					var getfund_rate = parseFloat($('#stock_sales_getfund_rate').val()).toFixed(3);
					var nhil_rate = parseFloat($('#stock_sales_nhil_rate').val()).toFixed(3);
					var vat_rate = parseFloat($('#stock_sales_vat_rate').val()).toFixed(3);
					var total_levy_rate = parseFloat(covid_rate) + parseFloat(getfund_rate) + parseFloat(nhil_rate);
					var covid_vat_rate = parseFloat(parseFloat(covid_rate) + parseFloat(vat_rate)).toFixed(3);

					if(amount > 0)
					{
						if(calc_type == 'Inclusive')
						{
							var covid = parseFloat((parseFloat(amount)/parseFloat(1 + parseFloat(covid_vat_rate))) * parseFloat(covid_rate)).toFixed(2);
							var vat = parseFloat((parseFloat(amount)/parseFloat(1 + parseFloat(covid_vat_rate))) * parseFloat(vat_rate)).toFixed(2);
							var getfund = 0;
							var nhil = 0;
							var total_levy = parseFloat(parseFloat(covid) + parseFloat(getfund) + parseFloat(nhil)).toFixed(2);
							var net = parseFloat(amount).toFixed(2);
						}
						else if(calc_type == 'Exclusive')
						{
							var covid = parseFloat(parseFloat(amount) * parseFloat(covid_rate)).toFixed(2);
							var vat = parseFloat(parseFloat(amount) * parseFloat(vat_rate)).toFixed(2);
							var getfund = 0;
							var nhil = 0;
							var total_levy = parseFloat(parseFloat(covid) + parseFloat(getfund) + parseFloat(nhil)).toFixed(2);
							var net = parseFloat(parseFloat(amount) + parseFloat(total_levy) + parseFloat(vat)).toFixed(2);
						};
						$('#stock_sales_covid_amount').val(covid);
						$('#stock_sales_covid_amountD').val(covid);
						$('#stock_sales_getfund_amount').val(getfund);
						$('#stock_sales_getfund_amountD').val(getfund);
						$('#stock_sales_nhil_amount').val(nhil);
						$('#stock_sales_nhil_amountD').val(nhil);
						$('#stock_sales_vat_amount').val(vat);
						$('#stock_sales_vat_amountD').val(vat);
						$('#stock_sales_total_levies_amount').val(total_levy);
						$('#stock_sales_total_levies_amountD').val(total_levy);
						$('#stock_sales_total_after_levies_amount').val(net);
						$('#stock_sales_total_after_levies_amountD').val(net);
						$('#stock_sales_net_amount_amount').val(net);
						$('#stock_sales_net_amount_amountD').val(net);
						$('#stock_sales_amount').val(net);
						$('#stock_sales_amount_2').val(net);
					};
				}
				else if(vat_type == 'None')
				{
					$('#stock_sales_vat_type_div').prop('class','col-md-4 mb-4 form-group');
					$('#stock_sales_calc_type_div').prop('hidden',true);
					$('#stock_sales_vat_list').prop('hidden',true);
					$('#stock_sales_covid_rate').val(0);
					$('#stock_sales_covid_amount').val(0);
					$('#stock_sales_covid_amountD').val(0);
					$('#stock_sales_getfund_rate').val(0);
					$('#stock_sales_getfund_amount').val(0);
					$('#stock_sales_getfund_amountD').val(0);
					$('#stock_sales_nhil_rate').val(0);
					$('#stock_sales_nhil_amount').val(0);
					$('#stock_sales_nhil_amountD').val(0);
					$('#stock_sales_total_levies_amount').val(0);
					$('#stock_sales_total_levies_amountD').val(0);
					$('#stock_sales_total_after_levies_amount').val(0);
					$('#stock_sales_total_after_levies_amountD').val(0);
					$('#stock_sales_vat_rate').val(0);
					$('#stock_sales_vat_amount').val(0);
					$('#stock_sales_vat_amountD').val(0);
					$('#stock_sales_net_amount_amount').val(0);
					$('#stock_sales_net_amount_amountD').val(0);
					$('#stock_sales_vat_witholding_rate').val(0);
					$('#stock_sales_vat_witholding_amount').val(0);
					$('#stock_sales_vat_witholding_amountD').val(0);
					$('#stock_sales_amount').val(amount);
					$('#stock_sales_amount_2').val(amount);
				};
           	});
		}

		function delete_stock_sales_item_row()
		{
			$(document).on('click', '#delete_stock_sales_item', function()
			{  
       			var button_id = $(this).attr("data-id");
				var discount = $('#nds_sales_discount_amount').val();
       			//var total_current = $('#stock_sales_amount').val();
       			//var amt = $('#stock_sales_amt'+button_id).val();
				$('#'+button_id+'').remove();
				var total = 0;
				$(".stock_sales_amt").each(function()
				{
					total += +$(this).val();
				});
				var amt = total - discount;
				$('#stock_sales_amount').val(total);
				$('#stock_sales_amount_2').val(total);
				$('#stock_sales_sub_total_amount').val(total);
				$('#stock_sales_sub_total_amountD').val(total);
				$('#stock_sales_total_amount').val(amt);
				$('#stock_sales_total_amount').val(amt);
           	});
		}
		
		function stock_sales_vat_type()
		{
			$(document).on('change keyup','#stock_sales_vat_type, #stock_sales_calc_type',function()
			{
				var vat_type = $('#stock_sales_vat_type').val();
				var calc_type = $('#stock_sales_calc_type').val();
				var amount = parseFloat($('#stock_sales_total_amount').val());
				
				if(vat_type != 'None' && vat_type == 'Standard Rate')
				{
					$('#stock_sales_vat_type_div').prop('class','col-md-2 mb-2 form-group');
					$('#stock_sales_calc_type_div').prop('hidden',false);
					$('#stock_sales_vat_list').prop('hidden',false);
					$('#vat_row').prop('hidden',false);
					var covid_perc = $('#session_covid_perc').val();
					var nhil_perc = $('#session_nhil_perc').val();
					var getfund_perc = $('#session_getfund_perc').val();
					var vat_perc = $('#session_vat_perc').val();
					
					$('#stock_sales_covid_rate').val(covid_perc);
					$('#stock_sales_getfund_rate').val(getfund_perc);
					$('#stock_sales_nhil_rate').val(nhil_perc);
					$('#stock_sales_vat_rate').val(vat_perc);

					var covid_rate = parseFloat($('#stock_sales_covid_rate').val());
					var getfund_rate = parseFloat($('#stock_sales_getfund_rate').val());
					var nhil_rate = parseFloat($('#stock_sales_nhil_rate').val());
					var vat_rate = parseFloat($('#stock_sales_vat_rate').val());
					var total_levy_rate = parseFloat(parseFloat(covid_rate) + parseFloat(getfund_rate) + parseFloat(nhil_rate));

					if(amount > 0)
					{
						if(calc_type == 'Inclusive')
						{
							var total_after_levies = parseFloat(parseFloat(amount)/parseFloat(1 + vat_rate)).toFixed(2);
							var vat = parseFloat((parseFloat(amount) * parseFloat(vat_rate))/parseFloat(1 + vat_rate)).toFixed(2);
							var covid = parseFloat((parseFloat(total_after_levies) * parseFloat(covid_rate))/parseFloat(1 + total_levy_rate)).toFixed(2);
							var getfund = parseFloat((parseFloat(total_after_levies) * parseFloat(getfund_rate))/parseFloat(1 + total_levy_rate)).toFixed(2);
							var nhil = parseFloat((parseFloat(total_after_levies) * parseFloat(nhil_rate))/parseFloat(1 + total_levy_rate)).toFixed(2);
							var total_levy = parseFloat(parseFloat(covid) + parseFloat(getfund) + parseFloat(nhil)).toFixed(2);
							var net = parseFloat(amount).toFixed(2);
						}
						else if(calc_type == 'Exclusive')
						{
							var covid = parseFloat(amount * covid_rate).toFixed(2);
							var getfund = parseFloat(amount * getfund_rate).toFixed(2);
							var nhil = parseFloat(amount * nhil_rate).toFixed(2);
							var total_levy = parseFloat(parseFloat(covid) + parseFloat(getfund) + parseFloat(nhil)).toFixed(2);
							var total_after_levies = parseFloat(parseFloat(amount) + parseFloat(total_levy)).toFixed(2);
							var vat = parseFloat(parseFloat(total_after_levies) * parseFloat(vat_rate)).toFixed(2);
							var net = parseFloat(parseFloat(total_after_levies) + parseFloat(vat)).toFixed(2);
						};
						$('#stock_sales_covid_amount').val(covid);
						$('#stock_sales_covid_amountD').val(covid);
						$('#stock_sales_getfund_amount').val(getfund);
						$('#stock_sales_getfund_amountD').val(getfund);
						$('#stock_sales_nhil_amount').val(nhil);
						$('#stock_sales_nhil_amountD').val(nhil);
						$('#stock_sales_vat_amount').val(vat);
						$('#stock_sales_vat_amountD').val(vat);
						$('#stock_sales_total_levies_amount').val(total_levy);
						$('#stock_sales_total_levies_amountD').val(total_levy);
						$('#stock_sales_total_after_levies_amount').val(total_after_levies);
						$('#stock_sales_total_after_levies_amountD').val(total_after_levies);
						$('#stock_sales_net_amount_amount').val(net);
						$('#stock_sales_net_amount_amountD').val(net);
						$('#stock_sales_amount').val(net);
						$('#stock_sales_amount_2').val(net);
					};
				}
				else if(vat_type != 'None' && vat_type == 'Flat Rate')
				{
					$('#stock_sales_vat_type_div').prop('class','col-md-2 mb-2 form-group');
					$('#stock_sales_calc_type_div').prop('hidden',false);
					$('#stock_sales_vat_list').prop('hidden',false);
					$('#vat_row').prop('hidden',false);
					var covid_perc = $('#session_covid_perc').val();
					var nhil_perc = 0;
					var getfund_perc = 0;
					//var nhil_perc = $('#session_nhil_perc').val();
					//var getfund_perc = $('#session_getfund_perc').val();
					var vat_perc = 0.030;
					
					$('#stock_sales_covid_rate').val(covid_perc);
					$('#stock_sales_getfund_rate').val(getfund_perc);
					$('#stock_sales_nhil_rate').val(nhil_perc);
					$('#stock_sales_vat_rate').val(vat_perc);
					
					var covid_rate = parseFloat($('#stock_sales_covid_rate').val()).toFixed(3);
					var getfund_rate = parseFloat($('#stock_sales_getfund_rate').val()).toFixed(3);
					var nhil_rate = parseFloat($('#stock_sales_nhil_rate').val()).toFixed(3);
					var vat_rate = parseFloat($('#stock_sales_vat_rate').val()).toFixed(3);
					var total_levy_rate = parseFloat(covid_rate) + parseFloat(getfund_rate) + parseFloat(nhil_rate);
					var covid_vat_rate = parseFloat(parseFloat(covid_rate) + parseFloat(vat_rate)).toFixed(3);

					if(amount > 0)
					{
						if(calc_type == 'Inclusive')
						{
							var covid = parseFloat((parseFloat(amount)/parseFloat(1 + parseFloat(covid_vat_rate))) * parseFloat(covid_rate)).toFixed(2);
							var vat = parseFloat((parseFloat(amount)/parseFloat(1 + parseFloat(covid_vat_rate))) * parseFloat(vat_rate)).toFixed(2);
							var getfund = 0;
							var nhil = 0;
							var total_levy = parseFloat(parseFloat(covid) + parseFloat(getfund) + parseFloat(nhil)).toFixed(2);
							var net = parseFloat(amount).toFixed(2);
						}
						else if(calc_type == 'Exclusive')
						{
							var covid = parseFloat(parseFloat(amount) * parseFloat(covid_rate)).toFixed(2);
							var vat = parseFloat(parseFloat(amount) * parseFloat(vat_rate)).toFixed(2);
							var getfund = 0;
							var nhil = 0;
							var total_levy = parseFloat(parseFloat(covid) + parseFloat(getfund) + parseFloat(nhil)).toFixed(2);
							var net = parseFloat(parseFloat(amount) + parseFloat(total_levy) + parseFloat(vat)).toFixed(2);
						};
						$('#stock_sales_covid_amount').val(covid);
						$('#stock_sales_covid_amountD').val(covid);
						$('#stock_sales_getfund_amount').val(getfund);
						$('#stock_sales_getfund_amountD').val(getfund);
						$('#stock_sales_nhil_amount').val(nhil);
						$('#stock_sales_nhil_amountD').val(nhil);
						$('#stock_sales_vat_amount').val(vat);
						$('#stock_sales_vat_amountD').val(vat);
						$('#stock_sales_total_levies_amount').val(total_levy);
						$('#stock_sales_total_levies_amountD').val(total_levy);
						$('#stock_sales_total_after_levies_amount').val(net);
						$('#stock_sales_total_after_levies_amountD').val(net);
						$('#stock_sales_net_amount_amount').val(net);
						$('#stock_sales_net_amount_amountD').val(net);
						$('#stock_sales_amount').val(net);
						$('#stock_sales_amount_2').val(net);
					};
				}
				else if(vat_type == 'None')
				{
					$('#stock_sales_vat_type_div').prop('class','col-md-4 mb-4 form-group');
					$('#stock_sales_calc_type_div').prop('hidden',true);
					$('#stock_sales_vat_list').prop('hidden',true);
					$('#stock_sales_covid_rate').val(0);
					$('#stock_sales_covid_amount').val(0);
					$('#stock_sales_covid_amountD').val(0);
					$('#stock_sales_getfund_rate').val(0);
					$('#stock_sales_getfund_amount').val(0);
					$('#stock_sales_getfund_amountD').val(0);
					$('#stock_sales_nhil_rate').val(0);
					$('#stock_sales_nhil_amount').val(0);
					$('#stock_sales_nhil_amountD').val(0);
					$('#stock_sales_total_levies_amount').val(0);
					$('#stock_sales_total_levies_amountD').val(0);
					$('#stock_sales_total_after_levies_amount').val(0);
					$('#stock_sales_total_after_levies_amountD').val(0);
					$('#stock_sales_vat_rate').val(0);
					$('#stock_sales_vat_amount').val(0);
					$('#stock_sales_vat_amountD').val(0);
					$('#stock_sales_net_amount_amount').val(0);
					$('#stock_sales_net_amount_amountD').val(0);
					$('#stock_sales_vat_witholding_rate').val(0);
					$('#stock_sales_vat_witholding_amount').val(0);
					$('#stock_sales_vat_witholding_amountD').val(0);
					$('#stock_sales_amount').val(amount);
					$('#stock_sales_amount_2').val(amount);
				};
			});
		}

		function stock_sales_vat_rate()
		{
			$(document).on('keyup','#stock_sales_discount_rate, #stock_sales_discount_amount, #stock_sales_covid_rate, #stock_sales_getfund_rate, #stock_sales_nhil_rate, #stock_sales_vat_rate',function()
			{
				var vat_type = $('#stock_sales_vat_type').val();
				var calc_type = $('#stock_sales_calc_type').val();
				var sub_total = parseFloat($('#stock_sales_sub_total_amount').val());
				if(isNaN(parseFloat($('#stock_sales_discount_amount').val())))
				{
					var discount = 0;
				}
				else
				{
					var discount = parseFloat($('#stock_sales_discount_amount').val());
				};
				if(isNaN(parseFloat($('#stock_sales_discount_rate').val())))
				{
					var discount_perc = 0;
				}
				else
				{
					var discount_perc = parseFloat($('#stock_sales_discount_rate').val());
				};

				if(discount_perc !='' && discount_perc > 0)
				{
					var disc = parseFloat(discount_perc * sub_total).toFixed(2);
					$('#stock_sales_discount_amount').val(disc);
				}
				else if((discount_perc =='' || discount_perc==0) && discount > 0)
				{
					var disc = discount;
				}
				else
				{
					var disc = 0
				};
				var amt = parseFloat(sub_total - disc).toFixed(2);
				$('#stock_sales_total_amount').val(amt);
				$('#stock_sales_total_amountD').val(amt);

				var amount = parseFloat($('#stock_sales_total_amount').val());
				
				if(vat_type != 'None' && vat_type == 'Standard Rate')
				{
					$('#stock_sales_vat_type_div').prop('class','col-md-2 mb-2 form-group');
					$('#stock_sales_calc_type_div').prop('hidden',false);
					$('#stock_sales_vat_list').prop('hidden',false);
					$('#vat_row').prop('hidden',false);
					var covid_perc = $('#session_covid_perc').val();
					var nhil_perc = $('#session_nhil_perc').val();
					var getfund_perc = $('#session_getfund_perc').val();
					var vat_perc = $('#session_vat_perc').val();
					
					$('#stock_sales_covid_rate').val(covid_perc);
					$('#stock_sales_getfund_rate').val(getfund_perc);
					$('#stock_sales_nhil_rate').val(nhil_perc);
					$('#stock_sales_vat_rate').val(vat_perc);

					var covid_rate = parseFloat($('#stock_sales_covid_rate').val());
					var getfund_rate = parseFloat($('#stock_sales_getfund_rate').val());
					var nhil_rate = parseFloat($('#stock_sales_nhil_rate').val());
					var vat_rate = parseFloat($('#stock_sales_vat_rate').val());
					var total_levy_rate = parseFloat(parseFloat(covid_rate) + parseFloat(getfund_rate) + parseFloat(nhil_rate));

					if(amount > 0)
					{
						if(calc_type == 'Inclusive')
						{
							var total_after_levies = parseFloat(parseFloat(amount)/parseFloat(1 + vat_rate)).toFixed(2);
							var vat = parseFloat((parseFloat(amount) * parseFloat(vat_rate))/parseFloat(1 + vat_rate)).toFixed(2);
							var covid = parseFloat((parseFloat(total_after_levies) * parseFloat(covid_rate))/parseFloat(1 + total_levy_rate)).toFixed(2);
							var getfund = parseFloat((parseFloat(total_after_levies) * parseFloat(getfund_rate))/parseFloat(1 + total_levy_rate)).toFixed(2);
							var nhil = parseFloat((parseFloat(total_after_levies) * parseFloat(nhil_rate))/parseFloat(1 + total_levy_rate)).toFixed(2);
							var total_levy = parseFloat(parseFloat(covid) + parseFloat(getfund) + parseFloat(nhil)).toFixed(2);
							var net = parseFloat(amount).toFixed(2);
						}
						else if(calc_type == 'Exclusive')
						{
							var covid = parseFloat(amount * covid_rate).toFixed(2);
							var getfund = parseFloat(amount * getfund_rate).toFixed(2);
							var nhil = parseFloat(amount * nhil_rate).toFixed(2);
							var total_levy = parseFloat(parseFloat(covid) + parseFloat(getfund) + parseFloat(nhil)).toFixed(2);
							var total_after_levies = parseFloat(parseFloat(amount) + parseFloat(total_levy)).toFixed(2);
							var vat = parseFloat(parseFloat(total_after_levies) * parseFloat(vat_rate)).toFixed(2);
							var net = parseFloat(parseFloat(total_after_levies) + parseFloat(vat)).toFixed(2);
						};
						$('#stock_sales_covid_amount').val(covid);
						$('#stock_sales_covid_amountD').val(covid);
						$('#stock_sales_getfund_amount').val(getfund);
						$('#stock_sales_getfund_amountD').val(getfund);
						$('#stock_sales_nhil_amount').val(nhil);
						$('#stock_sales_nhil_amountD').val(nhil);
						$('#stock_sales_vat_amount').val(vat);
						$('#stock_sales_vat_amountD').val(vat);
						$('#stock_sales_total_levies_amount').val(total_levy);
						$('#stock_sales_total_levies_amountD').val(total_levy);
						$('#stock_sales_total_after_levies_amount').val(total_after_levies);
						$('#stock_sales_total_after_levies_amountD').val(total_after_levies);
						$('#stock_sales_net_amount_amount').val(net);
						$('#stock_sales_net_amount_amountD').val(net);
						$('#stock_sales_amount').val(net);
						$('#stock_sales_amount_2').val(net);
					};
				}
				else if(vat_type != 'None' && vat_type == 'Flat Rate')
				{
					$('#stock_sales_vat_type_div').prop('class','col-md-2 mb-2 form-group');
					$('#stock_sales_calc_type_div').prop('hidden',false);
					$('#stock_sales_vat_list').prop('hidden',false);
					$('#vat_row').prop('hidden',false);
					var covid_perc = $('#session_covid_perc').val();
					var nhil_perc = 0;
					var getfund_perc = 0;
					var vat_perc = 0.030;
					
					$('#stock_sales_covid_rate').val(covid_perc);
					$('#stock_sales_getfund_rate').val(getfund_perc);
					$('#stock_sales_nhil_rate').val(nhil_perc);
					$('#stock_sales_vat_rate').val(vat_perc);
					
					var covid_rate = parseFloat($('#stock_sales_covid_rate').val()).toFixed(3);
					var getfund_rate = parseFloat($('#stock_sales_getfund_rate').val()).toFixed(3);
					var nhil_rate = parseFloat($('#stock_sales_nhil_rate').val()).toFixed(3);
					var vat_rate = parseFloat($('#stock_sales_vat_rate').val()).toFixed(3);
					var total_levy_rate = parseFloat(covid_rate) + parseFloat(getfund_rate) + parseFloat(nhil_rate);
					var covid_vat_rate = parseFloat(parseFloat(covid_rate) + parseFloat(vat_rate)).toFixed(3);

					if(amount > 0)
					{
						if(calc_type == 'Inclusive')
						{
							var covid = parseFloat((parseFloat(amount)/parseFloat(1 + parseFloat(covid_vat_rate))) * parseFloat(covid_rate)).toFixed(2);
							var vat = parseFloat((parseFloat(amount)/parseFloat(1 + parseFloat(covid_vat_rate))) * parseFloat(vat_rate)).toFixed(2);
							var getfund = 0;
							var nhil = 0;
							var total_levy = parseFloat(parseFloat(covid) + parseFloat(getfund) + parseFloat(nhil)).toFixed(2);
							var net = parseFloat(amount).toFixed(2);
						}
						else if(calc_type == 'Exclusive')
						{
							var covid = parseFloat(parseFloat(amount) * parseFloat(covid_rate)).toFixed(2);
							var vat = parseFloat(parseFloat(amount) * parseFloat(vat_rate)).toFixed(2);
							var getfund = 0;
							var nhil = 0;
							var total_levy = parseFloat(parseFloat(covid) + parseFloat(getfund) + parseFloat(nhil)).toFixed(2);
							var net = parseFloat(parseFloat(amount) + parseFloat(total_levy) + parseFloat(vat)).toFixed(2);
						};
						$('#stock_sales_covid_amount').val(covid);
						$('#stock_sales_covid_amountD').val(covid);
						$('#stock_sales_getfund_amount').val(getfund);
						$('#stock_sales_getfund_amountD').val(getfund);
						$('#stock_sales_nhil_amount').val(nhil);
						$('#stock_sales_nhil_amountD').val(nhil);
						$('#stock_sales_vat_amount').val(vat);
						$('#stock_sales_vat_amountD').val(vat);
						$('#stock_sales_total_levies_amount').val(total_levy);
						$('#stock_sales_total_levies_amountD').val(total_levy);
						$('#stock_sales_total_after_levies_amount').val(net);
						$('#stock_sales_total_after_levies_amountD').val(net);
						$('#stock_sales_net_amount_amount').val(net);
						$('#stock_sales_net_amount_amountD').val(net);
						$('#stock_sales_amount').val(net);
						$('#stock_sales_amount_2').val(net);
					};
				}
				else if(vat_type == 'None')
				{
					$('#stock_sales_vat_type_div').prop('class','col-md-4 mb-4 form-group');
					$('#stock_sales_calc_type_div').prop('hidden',true);
					$('#stock_sales_vat_list').prop('hidden',true);
					$('#stock_sales_covid_rate').val(0);
					$('#stock_sales_covid_amount').val(0);
					$('#stock_sales_covid_amountD').val(0);
					$('#stock_sales_getfund_rate').val(0);
					$('#stock_sales_getfund_amount').val(0);
					$('#stock_sales_getfund_amountD').val(0);
					$('#stock_sales_nhil_rate').val(0);
					$('#stock_sales_nhil_amount').val(0);
					$('#stock_sales_nhil_amountD').val(0);
					$('#stock_sales_total_levies_amount').val(0);
					$('#stock_sales_total_levies_amountD').val(0);
					$('#stock_sales_total_after_levies_amount').val(0);
					$('#stock_sales_total_after_levies_amountD').val(0);
					$('#stock_sales_vat_rate').val(0);
					$('#stock_sales_vat_amount').val(0);
					$('#stock_sales_vat_amountD').val(0);
					$('#stock_sales_net_amount_amount').val(0);
					$('#stock_sales_net_amount_amountD').val(0);
					$('#stock_sales_vat_witholding_rate').val(0);
					$('#stock_sales_vat_witholding_amount').val(0);
					$('#stock_sales_vat_witholding_amountD').val(0);
					$('#stock_sales_amount').val(amount);
					$('#stock_sales_amount_2').val(amount);
				};
			});
		}

		function stock_sales_block_negative()
		{
			$(document).on('keyup','.stock_sales_qty',function()
			{
				var i = $(this).attr('data-id');
				var block = $(this).attr('data-id1');
				var stock_item_id = $('#stock_sales_desc'+i).val();
				var qty = $('#stock_sales_qty'+i).val();
				
				$.ajax({
					url:'/layout/vouchers/stock_sales_block_negative.php',
					method:'POST',
					data:{stock_item_id:stock_item_id},
					success:function(data)
					{
						var balance = parseFloat(data);
						var quantity = parseFloat(qty);
						if(balance < quantity && block == 'Yes')
						{
							$('#stock_sales_create_modal').modal('hide');
							$('#stock_sales_invoice_delete_question').text('Please you do not have sufficient quantity to proceed. Current qty:' + balance + ' is less than:' + quantity + '!');
							$('#stock_sales_invoice_delete_modal_title').text('Insuffient Quantity');
							$('#stock_sales_delete_yes').text('OK');
							$('#stock_sales_delete_no').hide();
							$('#stock_sales_invoice_delete_modal').modal('show');
							$(document).on('click','#stock_sales_delete_yes',function()
							{
								$('#stock_sales_invoice_delete_modal').modal('hide');
								$('#stock_sales_create_modal').modal('show');
								$('#stock_sales_qty'+i).val(balance);
								$('#stock_sales_qty'+i).focus();
							});
							$(document).on('click','#stock_sales_delete_no',function(){
								$('#stock_sales_invoice_delete_modal').modal('hide');
							});
						};
					}
				});
			});
		}

		function save_stock_sales()
		{
			$(document).on('click','#stock_sales_save_btn',function(e){
				e.preventDefault();
				var last_tr_id = $("#stock_sales_items_table tr:last").attr("id");
				var last_tr_select = $("#stock_sales_items_table tr:last option:selected").val();
				if(last_tr_select =="" || last_tr_select ==0)
				{
					$('#'+last_tr_id+'').remove();
				};
				var stock_sales_debit = $('#stock_sales_debit').val();
				var stock_sales_credit = $('#stock_sales_credit').val();
				var stock_sales_amount = $('#stock_sales_amount').val();
				var stock_sales_supplied_by = $('#stock_sales_supplied_by').val();
				var stock_sales_ref_no = $('#stock_sales_ref_no').val();
				var stock_sales_date = $('#stock_sales_date').val();
				var stock_sales_received_by = $('#stock_sales_received_by').val();
				var stock_sales_narration = $('#stock_sales_narration').val();
				var stock_sales_desc = $('#stock_sales_desc').val();
				var page = window.location.pathname;
				if (stock_sales_debit !=="") 
				{
					if (stock_sales_credit !=="") 
					{
						if (stock_sales_amount !=="") 
						{
							if (stock_sales_ref_no !=="") 
							{
								if (stock_sales_date !=="") 
									{
										if (stock_sales_received_by !=="") 
										{
											if (stock_sales_desc !=="") 
											{
												$.ajax({
													url:'/layout/vouchers/stock_sales_save.php',
													method:'POST',
													data:$('#stock_sales_create_form').serialize(),
													success:function(data)
													{
														$('#stock_sales_create_form').trigger('reset');
														$('#stock_sales_create_modal').modal('hide');
														if(data =='exist')
														{
															alert('This Sales Invoice has been saved already!');
														}
														else
														{
															window.open('/layout/vouchers/stock_sales_pdf_A4.php', '_blank');
															/*$('#stock_sales_invoice_delete_question').text('Please click on the type of invoice to print.');
															$('#stock_sales_delete_yes').text('A4');
															$('#stock_sales_delete_no').text('POS');
															$('#stock_sales_invoice_delete_modal').modal('show');
															$(document).on('click','#stock_sales_delete_yes',function()
															{
																window.open('/layout/vouchers/stock_sales_pdf_A4.php', '_blank');
																$('#stock_sales_invoice_delete_modal').modal('hide');
															});
															$(document).on('click','#stock_sales_delete_no',function()
															{
																window.open('/layout/vouchers/stock_sales_pdf.php', '_blank');
																$('#stock_sales_invoice_delete_modal').modal('hide');
															});*/
															window.location.href= page;
														};
													}
										        });
											} 
											else 
											{
												alert('Please select an item sold!');
											}
										} 
										else 
										{
											alert('Please type the name of the person receiving the goods!');
										}
								} 
								else 
								{
									alert('Please select the date of sales!');
								};
							} 
							else 
							{
								alert('Please type the Customer Phone Number in the Reference!');
							}
						} 
						else 
						{
							alert('Please type price for each item sold!');
						}
					} 
					else 
					{
						alert('Please select the ledger from which the sales was made (Supplier or Cash Account)!');
					}
				} 
				else 
				{
					alert('Please select the ledger into which the sales was made (Purchases Account)!');
				};
			});
		}

		function edit_stock_sales()
		{
			$(document).on('click','#btn_edit_stock_sales',function(){
				var stock_sales_id = $(this).attr('data-id');
				$.ajax({
		             url:'/layout/vouchers/stock_sales_edit.php',
		             method:'POST',
		             data:{stock_sales_id:stock_sales_id},
		             datatype:'JSON',
		             success:function(data)
		             {
		             	var res = $.parseJSON(data);
		             	$('#stock_sales_id').val(res[0]);
		             	$('#stock_sales_date').val(res[1]);
		             	$('#stock_sales_debit').val(res[2]);
		             	$('#stock_sales_credit').val(res[3]);
		             	$('#stock_sales_amount').val(res[4]);
		             	$('#stock_sales_amount_2').val(res[4]);
		             	$('#stock_sales_ref_no').val(res[5]);
		             	$('#stock_sales_supplied_by').val(res[6]);
		             	$('#stock_sales_received_by').val(res[7]);
		             	$('#stock_sales_narration').val(res[8]);
		             	$('#stock_sales_branch_id').val(res[9]);
		             	$('#stock_sales_branch_idD').val(res[9]);

						$('#stock_sales_vat_type').val(res[10]);
						$('#stock_sales_calc_type').val(res[11]);
						$('#stock_sales_covid_rate').val(res[12]);
						$('#stock_sales_nhil_rate').val(res[13]);
						$('#stock_sales_getfund_rate').val(res[14]);
						$('#stock_sales_vat_rate').val(res[15]);
						$('#stock_sales_covid_amount').val(res[16]);
						$('#stock_sales_covid_amountD').val(res[16]);
						$('#stock_sales_getfund_amount').val(res[17]);
						$('#stock_sales_getfund_amountD').val(res[17]);
						$('#stock_sales_nhil_amount').val(res[18]);
						$('#stock_sales_nhil_amountD').val(res[18]);
						$('#stock_sales_vat_amount').val(res[19]);
						$('#stock_sales_vat_amountD').val(res[19]);
						$('#stock_sales_total_levies_amount').val(res[20]);
						$('#stock_sales_total_levies_amountD').val(res[20]);
						$('#stock_sales_total_after_levies_amount').val(res[21]);
						$('#stock_sales_total_after_levies_amountD').val(res[21]);
						$('#stock_sales_discount_amount').val(res[22]);
						$('#stock_sales_discount_amountD').val(res[22]);
						$('#stock_sales_discount_rate').val(res[23]);
						$('#stock_sales_sub_total_amount').val(res[24]);
						$('#stock_sales_sub_total_amountD').val(res[24]);
						$('#stock_sales_total_amount').val(res[25]);
						$('#stock_sales_total_amountD').val(res[25]);
						$('#stock_sales_net_amount_amount').val(res[4]);
						$('#stock_sales_net_amount_amountD').val(res[4]);
						if(res[10] != 'None' && res[10] == 'Standard Rate')
						{
							$('#stock_sales_vat_type_div').prop('class','col-md-2 mb-2 form-group');
							$('#stock_sales_calc_type_div').prop('hidden',false);
							$('#stock_sales_vat_list').prop('hidden',false);
							$('#vat_row').prop('hidden',false);
						}
						else if(res[10] != 'None' && res[10] == 'Flat Rate')
						{
							$('#stock_sales_vat_type_div').prop('class','col-md-2 mb-2 form-group');
							$('#stock_sales_calc_type_div').prop('hidden',false);
							$('#stock_sales_vat_list').prop('hidden',false);
							$('#vat_row').prop('hidden',true);
						}
						else if(res[10] == 'None')
						{
							$('#stock_sales_vat_type_div').prop('class','col-md-4 mb-4 form-group');
							$('#stock_sales_calc_type_div').prop('hidden',true);
							$('#stock_sales_vat_list').prop('hidden',true);
						};
		             	$.ajax({
				            url:'/layout/vouchers/stock_sales_items_edit.php',
				            method:'POST',
				            data:{stock_sales_id:stock_sales_id},
				            success:function(data)
				            {
				            	$('#stock_sales_items_list').html(data);
							}
			             });
		             	$('#stock_sales_update_btn').show();
		             	$('#stock_sales_save_btn').hide();
						$('#stock_sales_create_modal').modal('show');
		             }
		        });
			});
		}

		function update_stock_sales()
		{
			$(document).on('click','#stock_sales_update_btn',function(e){
				e.preventDefault();

				var last_tr_id = $("#stock_sales_items_table tr:last").attr("id");
				var last_tr_select = $("#stock_sales_items_table tr:last option:selected").val();
				if(last_tr_select =="" || last_tr_select ==0)
				{
					$('#'+last_tr_id+'').remove();
				};
				var stock_sales_debit = $('#stock_sales_debit').val();
				var stock_sales_credit = $('#stock_sales_credit').val();
				var stock_sales_amount = $('#stock_sales_amount').val();
				var stock_sales_supplied_by = $('#stock_sales_supplied_by').val();
				var stock_sales_ref_no = $('#stock_sales_ref_no').val();
				var stock_sales_date = $('#stock_sales_date').val();
				var stock_sales_received_by = $('#stock_sales_received_by').val();
				var stock_sales_narration = $('#stock_sales_narration').val();
				var stock_sales_desc = $('#stock_sales_desc').val();
				var page = window.location.pathname;
				if (stock_sales_debit !=="") 
				{
					if (stock_sales_credit !=="") 
					{
						if (stock_sales_amount !=="") 
						{
							if (stock_sales_supplied_by !=="") 
							{
								if (stock_sales_ref_no !=="") 
								{
									if (stock_sales_date !=="") 
									{
										if (stock_sales_received_by !=="") 
										{
											if (stock_sales_desc !=="") 
											{
												$.ajax({
													url:'/layout/vouchers/stock_sales_update.php',
													method:'POST',
													data:$('#stock_sales_create_form').serialize(),
													success:function(data)
													{
														$('#stock_sales_create_form').trigger('reset');
														window.open('/layout/vouchers/stock_sales_pdf.php', '_blank');
														window.location.href= page;
														//window.location.href="/layout/vouchers/stock_sales_list.php";
													}
										        });
											} 
											else 
											{
												alert('Please select an item sold!');
											}
										} 
										else 
										{
											alert('Please type the name of the person receiving the goods!');
										}
									} 
									else 
									{
										alert('Please select the date of sales!');
									}
								} 
								else 
								{
									alert('Please type the supplier invoice number!');
								}
							} 
							else 
							{
								alert('Please type the name of the person/institution from whom the sales was made!');
							}
						} 
						else 
						{
							alert('Please type price for each item sold!');
						}
					} 
					else 
					{
						alert('Please select the ledger from which the sales was made (Supplier or Cash Account)!');
					}
				} 
				else 
				{
					alert('Please select the ledger into which the sales was made (Purchases Account)!');
				};
			});
		}

		function reprint_stock_sales()
		{
			$(document).on('click','#btn_stock_sales_reprint',function(){
				var stock_sales_id = $(this).attr('data-id');
				$.ajax({
		             url:'/layout/vouchers/stock_sales_reprint.php',
		             method:'POST',
		             data:{
						stock_sales_id:stock_sales_id
		             },
		             success:function(data)
		             {
		             	window.open('/layout/vouchers/stock_sales_pdf.php', '_blank');
		             }
		        });
			});
		}

		function delete_stock_sales()
		{
			$(document).on('click','#btn_delete_stock_sales',function(){
				var stock_sales_id = $(this).attr('data-id');
				var currentRow=$(this).closest("tr");
				var sales_date = currentRow.find("td:eq(1)").text();
				//var Supplier = currentRow.find("td:eq(3)").text();
				$('#stock_sales_invoice_delete_question').text('Are you sure you want to delete stock sales invoice of ' + sales_date + '?');
				$('#stock_sales_invoice_delete_modal').modal('show');
				$(document).on('click','#stock_sales_delete_yes',function(){
					$.ajax({  
		                 url:'/layout/vouchers/stock_sales_delete.php',  
		                 type:'POST',  
		                 data:{stock_sales_id:stock_sales_id},
		                 success:function(){
		                 	$('#stock_sales_invoice_delete_modal').modal('hide');
		                 	window.location.href="/layout/vouchers/stock_sales_list.php";
		                 }  
		            });
			      });
				$(document).on('click','#stock_sales_delete_no',function(){
					$('#stock_sales_invoice_delete_modal').modal('hide');
				});
			});
		}
		
		function search_stock_sales_invoice_by_name()
		{
			$(document).on('keyup','#stock_sales_name',function(e){
				e.preventDefault();
				var company_id = $('#session_company_id').val();
				var name = $('#stock_sales_name').val();

				$.ajax({
					url:'/layout/vouchers/stock_sales_search_by_name.php',
					method:'POST',
					data:{name:name,company_id:company_id},
					success:function(data)
					{
						$('#stock_sales_list_table_div').html(data);
					}
		        });
			});
		}

		function search_stock_sales_invoice_by_date()
		{
			$(document).on('click','#stock_sales_search_icon',function(e){
				e.preventDefault();
				var company_id = $('#session_company_id').val();
				var start_date = $('#stock_sales_search_from').val();
				var end_date = $('#stock_sales_search_to').val();

				$.ajax({
		             url:'/layout/vouchers/stock_sales_search_by_date.php',
		             method:'POST',
		             data:{start_date:start_date,end_date:end_date,company_id:company_id},
		             success:function(data)
			             {
			             	$('#stock_sales_list_table_div').html(data);
			             }
		        });
			});
		}

		function search_stock_sales_invoice_by_branch()
		{
			$(document).on('change','#stock_sales_search_branch',function(e)
			{
				e.preventDefault();
				var branch_id = $('#stock_sales_search_branch').val();
				var start_date = $('#stock_sales_search_from').val();
				var end_date = $('#stock_sales_search_to').val();

				$.ajax({
					url:'/layout/vouchers/stock_sales_search_by_branch.php',
					method:'POST',
					data:{
						start_date:start_date,
						end_date:end_date,
						branch_id:branch_id
					},
					success:function(data)
					{
						$('#stock_sales_list_table_div').html(data);
					}
		        });
			});
		}

	//ORDER
		function new_order_voucher_modal()
		{
			$(document).on('click','#new_order_icon',function()
			{
				$('#order_customer_id').val(40);
				$('#order_update_btn').hide();
				$('#order_save_pay_btn').hide();
				$('#order_save_btn').show();
				$('#order_create_modal').modal('show');
			});
		}

		function cancel_order_voucher_modal()
		{
			$(document).on('click','#order_cancel_btn',function()
			{
				var page = window.location.pathname;
				$('#order_create_form').trigger('reset');
				$('#order_create_modal').modal('hide');
				window.location.href= page;
			});
		}

		function search_order_menu_by_type()
		{
			$(document).on('change','#order_stock_item_type',function(e){
				var stock_item_type_id = $(this).val();
				$.ajax({
					url:'/layout/vouchers/order_search_menu_by_stock_type.php',
					method:'POST',
					data:{stock_item_type_id:stock_item_type_id},
					success:function(data)
					{
						$('#order_menu_list_div').html(data);
					}
				});
			});
		}

		function search_order_menu()
		{
			$(document).on('keyup','#order_search_menu',function(e){
				var search = $(this).val();
				$.ajax({
					url:'/layout/vouchers/order_search_menu.php',
					method:'POST',
					data:{search:search},
					success:function(data)
					{
						$('#order_menu_list_div').html(data);
					}
				});
			});
		}

		function set_order_table()
		{
			$(document).on('click','.order_table_id',function(e){
				var order_table_id = $(this).attr('data-id');
				$('#order_dining_table_id').val(order_table_id);
			});
		}

		function set_order_item_modal()
		{
			$(document).on('click','.order_stock_item_id',function(e)
			{
				var id = $('#order_item_list_table tr:last').attr('id');
				if(isNaN(id))
				{ 
					var i = 0;
				}
				else
				{
					var i = id;
				};
				i++;
				var stock_item = $(this).attr('data-name');
				var stock_item_id = $(this).attr('data-item');
				var price = $(this).attr('data-price');
				var qty = 1;
				var amount = $(this).attr('data-price');

				$.ajax({
					url:'/layout/vouchers/order_item_save.php',
					method:'POST',
					data:{
						stock_item_id:stock_item_id, 
						price:price, 
						qty:qty,
						amount:amount,
						stock_item:stock_item,
						i:i
					},
					success:function(data)
					{
						$('#order_item_list_table').append(data);
						var total = 0;
						$(".order_item_list_amount").each(function()
						{
							total += +parseFloat($(this).val());
						});
						$('#order_item_list_sub_total').val(total);
						$('#order_item_list_sub_totalD').val(total);
					}
				});
			});
		}

		function set_order_item_amount()
		{
			$(document).on('keyup change','.order_item_list_qty',function(e)
			{
				var id = $(this).attr('data-id');
				var price = $('#order_item_list_price'+id).val();
				if($(this).val() > 0)
				{
					var qty = $(this).val();
				}
				else{
					var qty = 1;
					$('#order_item_list_qty'+id).val(qty);
				};
				var amount = qty * price;
				$('#order_item_list_amount'+id).val(amount);
				$('#order_item_list_amountD'+id).val(amount);
				var total = 0;
				$(".order_item_list_amount").each(function()
				{
					total += +parseFloat($(this).val());
				});
				$('#order_item_list_sub_total').val(total);
				$('#order_item_list_sub_totalD').val(total);
			});
		}
	
		function delete_order_item()
		{
			$(document).on('click','.order_item_list_delete',function(e){
				var id = $(this).attr('data-id');
				$('#'+id+'').remove();
				var total = 0;
				$(".order_item_list_amount").each(function()
				{
					total += +parseFloat($(this).val());
				});
				$('#order_item_list_sub_total').val(total);
				$('#order_item_list_sub_totalD').val(total);
			});
		}
		
		function add_order_payment_row()
		{
			$(document).on('change','.order_payment_ledger_id',function()
			{ 
				var i = $('#order_payment_list_table tr:last').attr('data-id');
				var ledger_id = $('#order_payment_ledger_id'+i).val();
				if(ledger_id > 0)
				{
					i++;
					$.ajax({
						url:'/layout/vouchers/order_payment_add_row.php',
						method:'POST',
						data:{i:i},
						success:function(data)
						{
							$('#order_payment_list_table').append(data);
						}
					});
				};
			});
		}

		function set_order_payment_amount()
		{
			$(document).on('keyup','.order_payment_amount',function(e)
			{
				var total = 0;
				if(isNaN(parseFloat($('#order_payment_cash_tendered').val()))){ var cash_tendered = 0;}else{var cash_tendered = parseFloat($('#order_payment_cash_tendered').val());};
				$('.order_payment_amount').each(function()
				{
					if(isNaN(parseFloat($(this).val()))){ var amount = 0;}else{var amount = parseFloat($(this).val());};
					total += +amount;
				});
				$('#order_payment_list_sub_total').val(total);
				$('#order_payment_list_sub_totalD').val(total);
				$('#order_payment_cash_tendered').val(total);
			});
		}
	
		function delete_order_payment_row()
		{
			$(document).on('click','.order_payment_delete_btn',function(e)
			{
				var id = $(this).attr('data-id');
				$('#op'+id).remove();
				var total = 0;
				$('.order_payment_amount').each(function()
				{
					if(isNaN(parseFloat($(this).val()))){ var amount = 0;}else{var amount = parseFloat($(this).val());};
					total += +amount;
				});
				$('#order_payment_list_sub_total').val(total);
				$('#order_payment_list_sub_totalD').val(total);
			});
		}

		function order_payment_cash_tendered()
		{
			$(document).on('keyup','#order_payment_cash_tendered',function(e)
			{
				var total = 0;
				if(isNaN(parseFloat($('#order_payment_cash_tendered').val()))){ var cash_tendered = 0;}else{var cash_tendered = parseFloat($('#order_payment_cash_tendered').val());};
				$('.order_payment_amount').each(function()
				{
					if(isNaN(parseFloat($(this).val()))){ var amount = 0;}else{var amount = parseFloat($(this).val());};
					total += +amount;
				});
				if(cash_tendered >= total){var balance = cash_tendered - total}else{var balance = 0;};
				$('#order_payment_list_sub_total').val(total);
				$('#order_payment_list_sub_totalD').val(total);
				$('#order_payment_cash_tendered').val(cash_tendered);
				$('#order_payment_balance').val(balance);
				$('#order_payment_balanceD').val(balance);
			});
		}

		function save_order_voucher()
		{
			$(document).on('click','#order_save_btn',function(e)
			{
				e.preventDefault();
				var order_dining_table_id = $('#order_dining_table_id').val();
				var order_item_list_sub_total = $('#order_item_list_sub_total').val();
				var page = window.location.pathname;
				if (order_dining_table_id > 0) 
				{
					if (order_item_list_sub_total > 0) 
					{
						$.ajax({
							url:'/layout/vouchers/order_save.php',
							method:'POST',
							data:$('#order_item_list_form').serialize(),
							success:function(data)
							{
								$('#order_item_list_form').trigger('reset');
								window.location.href= page;
							}
						});
					} 
					else 
					{
						alert('Please select an ITEM from the menu!');
					};
				} 
				else 
				{
					alert('Please select the TABLE you are making the order for!');
				};
			});
		}
		
		function set_order_status()
		{
			$(document).on('click','#order_serve_btn, #order_pending_btn',function()
			{
				var page = window.location.pathname;
				var id = $(this).attr('id');
				var table_order_id = $(this).attr('data-id');
				if(id == 'order_serve_btn')
				{
					var status = 'Served';
				}
				else
				{
					var status = 'Pending';
				};
				$.ajax({
					url:'/layout/vouchers/order_set_status.php',
					method:'POST',
					data:{
						table_order_id:table_order_id,
						status:status
					},
					success:function(data)
					{
						window.location.href= page;
					}
				});
			});
		}
		
		function print_order()
		{
			$(document).on('click','#order_print_btn, .table_print_order_btn',function()
			{
				var table_order_id = $(this).attr('data-id');
				$.ajax({
					url:'/layout/vouchers/order_print.php',
					method:'POST',
					data:{table_order_id:table_order_id},
					success:function(data)
					{
						window.open('/layout/vouchers/order_print_pdf.php', '_blank');
					}
				});
			});
		}
		
		function display_take_away_order()
		{
			$(document).on('click','.table_display_order_btn',function()
			{
				var dining_table_id = $(this).attr('data-table');
				$.ajax({
					url:'/layout/vouchers/order_display_list.php',
					method:'POST',
					data:{dining_table_id:dining_table_id},
					success:function(data)
					{
						$('#table_order_list_table_div').html(data);
						window.open('/layout/vouchers/order_list.php', '_blank');
					}
				});
			});
		}
		
		function pay_order_modal()
		{
			$(document).on('click','#order_pay_btn, .table_pay_order_btn',function()
			{
				var table_order_id = $(this).attr('data-order');
				var dining_table_id = $(this).attr('data-table');
				var ledger_debit_id = $(this).attr('data-debit');
				var bill_amount = $(this).attr('data-amount');
				$('#table_order_id').val(table_order_id);
				$('#dining_table_id').val(dining_table_id);
				$('#order_customer_id').val(ledger_debit_id);
				$('#order_payable_amount').val(bill_amount);
				$('#order_payment_list_order_total').val(bill_amount);
				$('#order_payment_list_order_totalD').val(bill_amount);
				$('#order_table_list_div').prop('hidden',true);
				$('#order_menu_div').prop('hidden',true);
				$('#order_item_list_li').prop('hidden',true);
				$('#order_item_list_nav').prop('hidden',true);
				$('#order_served_btn_div').prop('hidden', true);
				$('#order_unserved_btn_div').prop('hidden', true);
				$('#order_pay_btn_div').prop('hidden', true);
				$('#order_payment_nav').prop('class','tab-pane fade show active');
				$('#order_update_btn').hide();
				$('#order_save_btn').hide();
				$('#order_save_pay_btn').show();
				$('#order_create_modal').modal('show');
			});
		}
		
		function save_pay_order()
		{
			$(document).on('click','#order_save_pay_btn',function()
			{
				var page = window.location.pathname;
				var table_order_id = $('#table_order_id').val();
				var dining_table_id = $('#dining_table_id').val();
				var ledger_debit_id = $('#order_customer_id').val();
				var bill_amount = $('#order_payable_amount').val();
				var amount_paid = $('#order_payment_list_sub_total').val();
				//if(amount_paid >= bill_amount)
				//{
					$.ajax({
						url:'/layout/vouchers/order_pay.php',
						method:'POST',
						data:$('#order_item_list_form').serialize(),
						success:function(data)
						{
							$('#order_item_list_form').trigger('reset');
							$('#order_create_modal').modal('hide');
							window.location.href= page;
						}
					});
				/*}
				else
				{
					alert('Please the Amount Paid:'+amount_paid+' must be equal to or more than the Order Amount:'+bill_amount);
				};*/
			});
		}

		function edit_order_voucher()
		{
			$(document).on('click','#order_edit_btn, .table_add_order_btn',function(){
				var table_order_id = $(this).attr('data-id');
				var dining_table_id = $(this).attr('data-id1');
				var table_type = $(this).attr('data-id2');
				var id = $(this).attr('id');
				if(table_type == 'EAT_IN')
				{
					if(table_order_id > 0)
					{
						$.ajax({
							url:'/layout/vouchers/order_edit.php',
							method:'POST',
							data:{table_order_id:table_order_id, id:id},
							datatype:'JSON',
							success:function(data)
							{
								var res = $.parseJSON(data);
								$('#table_order_id').val(res[0]);
								$('#dining_table_id').val(res[1]);
								$('#order_dining_table_id').val(res[1]);
								$('#order_date').val(res[2]);
								$('#order_dateD').val(res[2]);
								$('#order_customer_id').val(res[3]);
								$('#order_item_list_sub_total').val(res[5]);
								$('#order_item_list_sub_totalD').val(res[5]);
								$('#order_item_list_table_div').html(res[6]);
								$('#order_customer_name').val(res[7]);
								$('#order_customer_phone').val(res[8]);
								$('#order_served_btn_div').html(res[9]);
								$('#order_unserved_btn_div').html(res[10]);
								$('#order_pay_btn_div').html(res[11]);
								$('#order_print_btn_div').html(res[12]);
								if(res[13] == 'Pending')
								{
									$('#order_served_btn_div').prop('hidden', false);
									$('#order_unserved_btn_div').prop('hidden', true);
									$('#order_pay_btn_div').prop('hidden', false);
								}
								else if(res[13] == 'Served')
								{
									$('#order_served_btn_div').prop('hidden', true);
									$('#order_unserved_btn_div').prop('hidden', false);
									$('#order_pay_btn_div').prop('hidden', false);
								}
								else if(res[13] == 'Paid')
								{
									$('#order_served_btn_div').prop('hidden', true);
									$('#order_unserved_btn_div').prop('hidden', true);
									$('#order_pay_btn_div').prop('hidden', true);
								};
								$('#order_table_list_div').prop('hidden', true);
								$('#table_order_item_list_div').prop('class','col-md-7 mb-7 form-group');
								$('#order_update_btn').show();
								$('#order_save_pay_btn').hide();
								$('#order_save_btn').hide();
								$('#order_create_modal').modal('show');
							}
						});
					}
					else
					{
						$('#order_dining_table_id').val(dining_table_id);
						$('#order_dining_table_idD').val(dining_table_id);
						$('#order_customer_id').val(40);
						$('#order_served_btn_div').prop('hidden', true);
						$('#order_unserved_btn_div').prop('hidden', true);
						$('#order_pay_btn_div').prop('hidden', true);
						$('#order_table_list_div').prop('hidden', true);
						$('#table_order_item_list_div').prop('class','col-md-7 mb-7 form-group');
						$('#order_update_btn').hide();
						$('#order_save_pay_btn').hide();
						$('#order_save_btn').show();
						$('#order_create_modal').modal('show');
					}
				}
				else
				{
					$.ajax({
						url:'/layout/vouchers/order_display_list.php',
						method:'POST',
						data:{dining_table_id:dining_table_id},
						success:function(data)
						{
							$('#table_order_list_table_div').html(data);
							window.open('/layout/vouchers/order_list.php', '_blank');
						}
					});
				};
			});
		}

		function update_order_voucher()
		{
			$(document).on('click','#order_update_btn',function(e)
			{
				e.preventDefault();
				var order_dining_table_id = $('#order_dining_table_id').val();
				var order_item_list_sub_total = $('#order_item_list_sub_total').val();
				var page = window.location.pathname;
				if (order_dining_table_id > 0) 
				{
					if (order_item_list_sub_total > 0) 
					{
						$.ajax({
							url:'/layout/vouchers/order_update.php',
							method:'POST',
							data:$('#order_item_list_form').serialize(),
							success:function(data)
							{
								$('#order_item_list_form').trigger('reset');
								window.location.href= page;
							}
						});
					} 
					else 
					{
						alert('Please select an ITEM from the menu!');
					};
				} 
				else 
				{
					alert('Please select the TABLE you are making the order for!');
				};
			});
		}

		function search_order_by_table()
		{
			$(document).on('change','#table_order_search_by_table',function(e){
				e.preventDefault();
				var dining_table_id = $('#table_order_search_by_table').val();

				$.ajax({
					url:'/layout/vouchers/order_search_by_table.php',
					method:'POST',
					data:{dining_table_id:dining_table_id},
					success:function(data)
					{
						$('#table_order_list_table_div').html(data);
					}
				});
			});
		}

		function search_order_by_date()
		{
			$(document).on('change','#table_order_search_from, #table_order_search_to, #table_order_search_by_branch',function(e){
				e.preventDefault();
				var start_date = $('#table_order_search_from').val();
				var end_date = $('#table_order_search_to').val();
				var branch_id = $('#table_order_search_by_branch').val();

				$.ajax({
					url:'/layout/vouchers/order_search_by_date.php',
					method:'POST',
					data:{
						start_date:start_date,
						end_date:end_date,
						branch_id:branch_id
					},
					success:function(data)
					{
						$('#table_order_list_table_div').html(data);
					}
				});
			});
		}

		function delete_order()
		{
			$(document).on('click','#order_delete_btn',function(){
				var table_order_id = $(this).attr('data-id');
				$('#order_delete_question').text('Are you sure you want to delete order no: ' + table_order_id + '?');
				$('#order_delete_modal').modal('show');
				$(document).on('click','#order_delete_yes',function()
				{
					$.ajax({  
						url:'/layout/vouchers/order_delete.php',  
						type:'POST',  
						data:{table_order_id:table_order_id},
						success:function()
						{
							$('#order_delete_modal').modal('hide');
							window.location.href="/layout/vouchers/order_list.php";
						}  
					});
				});
				$(document).on('click','#order_delete_no',function(){
					$('#order_delete_modal').modal('hide');
				});
			});
		}
	//PROFORMA
		function new_proforma_modal()
		{
			$(document).on('click','#new_proforma_icon',function()
			{
				$('#proforma_update_btn').hide();
				$('#proforma_save_btn').show();
				$('#proforma_create_form').trigger('reset');
				$('#proforma_create_modal').modal('show');
			});
		}

		function cancel_proforma_modal()
		{
			$(document).on('click','#proforma_cancel_btn',function()
			{
				var page = window.location.pathname;
				$('#proforma_create_form').trigger('reset');
				$('#proforma_create_modal').modal('hide');
				window.location.href= page;
			});
		}

		function add_proforma_item_row()
		{
			$(document).on('change','.proforma_desc',function(){ 
				var i = $('#proforma_items_table tr:last').attr('id');
				i++;
				$.ajax({
					url:'/layout/vouchers/proforma_item_list.php',
					method:'POST',
					data:{i:i},
					success:function(data)
					{
						$('#proforma_items_table').append(data);
					}
				});
			});
		}

		function add_proforma_item_price()
		{
			$(document).on('change','.proforma_desc',function(){
				var i = $(this).attr('data-id');
				var stock_item_id = $('#proforma_desc'+i+'').val();
				$.ajax({
					url:'/layout/vouchers/proforma_item_price.php',
					method:'POST',
					data:{stock_item_id:stock_item_id},
					datatype:'JSON',
					success:function(data)
					{
						var res = $.parseJSON(data);
						$('#proforma_price'+i+'').val(res[0]);
					}
				});
			});
		}

		function get_proforma_item_amount()
		{
			$(document).on('keyup', '.proforma_price, .proforma_qty', function(){  
				var i = $(this).attr("data-id"); 
				var qty = $('#proforma_qty'+i).val();
				var price = $('#proforma_price'+i).val();
				var amt = qty * price;
				$('#proforma_amt'+i).val(amt);
				
				var sum = 0;
				$('.proforma_amt').each(function()
				{
					var num = $(this).val().replace(',','');
					if(num !=0)
					{
						sum += parseFloat(num);
					};
				});
				$('#proforma_amount').val(sum);
				$('#proforma_amount_2').val(sum);
			});
		}

		function delete_proforma_item_row()
		{
			$(document).on('click', '#btn_delete_proforma_item', function()
			{  
				var button_id = $(this).attr("data-id");
				$('#'+button_id+'').remove();
				
				var sum = 0;
				$('.proforma_amt').each(function(){
					var num = $(this).val().replace(',','');
					if(num !=0)
					{
						sum += parseFloat(num);
					};
				});
				$('#proforma_amount').val(sum);
				$('#proforma_amount_2').val(sum);
			});
		}

		function save_proforma()
		{
			$(document).on('click','#proforma_save_btn',function(e){
				e.preventDefault();
				var last_tr_id = $("#proforma_items_table tr:last").attr("id");
				var last_tr_select = $("#proforma_items_table tr:last option:selected").val();
				if(last_tr_select =="" || last_tr_select ==0)
				{
					$('#'+last_tr_id+'').remove();
				};
				var customer = $('#proforma_customer').val();
				var address = $('#proforma_customer_address').val();
				var amount = $('#proforma_amount').val();
				var telephone = $('#proforma_customer_telephone').val();
				var date = $('#proforma_date').val();
				var page = window.location.pathname;
				if (customer !=="") 
				{
					if (address !=="") 
					{
						if (amount !=="") 
						{
							if (telephone !=="") 
							{
								if (date !=="") 
								{
									$.ajax({
										url:'/layout/vouchers/proforma_save.php',
										method:'POST',
										data:$('#proforma_create_form').serialize(),
										success:function(data)
										{
											$('#proforma_create_form').trigger('reset');
											window.open('/layout/vouchers/proforma_pdf.php', '_blank');
											window.location.href= page;
											//window.location.href="/layout/vouchers/proforma_list.php";
										}
									});
								} 
								else 
								{
									alert('Please select the date of the proforma!');
								};
							} 
							else 
							{
								alert('Please type the telephone number of the customer!');
							};
						} 
						else 
						{
							alert('Please select the items for the proforma!');
						}
					} 
					else 
					{
						alert('Please type the address of the customer!');
					};
				} 
				else 
				{
					alert('Please type the name of the customer!');
				};
			});
		}

		function edit_proforma()
		{
			$(document).on('click','#btn_edit_proforma',function(){
				var proforma_id = $(this).attr('data-id');
				$.ajax({
					url:'/layout/vouchers/proforma_edit.php',
					method:'POST',
					data:{proforma_id:proforma_id},
					datatype:'JSON',
					success:function(data)
					{
						var res = $.parseJSON(data);
						$('#proforma_id').val(res[0]);
						$('#proforma_date').val(res[1]);
						$('#proforma_customer').val(res[2]);
						$('#proforma_customer_address').val(res[3]);
						$('#proforma_amount').val(res[4]);
						$('#proforma_amount_2').val(res[4]);
						$('#proforma_customer_telephone').val(res[5]);
						$('#proforma_narration').val(res[6]);
						$('#proforma_items_list').html(res[7]);
						$('#proforma_update_btn').show();
						$('#proforma_save_btn').hide();
						$('#proforma_create_modal').modal('show');
					}
				});
			});
		}

		function update_proforma()
		{
			$(document).on('click','#proforma_update_btn',function(e){
				e.preventDefault();
				var last_tr_id = $("#proforma_items_table tr:last").attr("id");
				var last_tr_select = $("#proforma_items_table tr:last option:selected").val();
				if(last_tr_select =="" || last_tr_select ==0)
				{
					$('#'+last_tr_id+'').remove();
				};
				var customer = $('#proforma_customer').val();
				var address = $('#proforma_customer_address').val();
				var amount = $('#proforma_amount').val();
				var telephone = $('#proforma_customer_telephone').val();
				var date = $('#proforma_date').val();
				var page = window.location.pathname;
				if (customer !=="") 
				{
					if (address !=="") 
					{
						if (amount !=="") 
						{
							if (telephone !=="") 
							{
								if (date !=="") 
								{
									$.ajax({
										url:'/layout/vouchers/proforma_update.php',
										method:'POST',
										data:$('#proforma_create_form').serialize(),
										success:function(data)
										{
											$('#proforma_create_form').trigger('reset');
											window.open('/layout/vouchers/proforma_pdf.php', '_blank');
											window.location.href= page;
										}
									});
								} 
								else 
								{
									alert('Please select the date of the proforma!');
								};
							} 
							else 
							{
								alert('Please type the telephone number of the customer!');
							};
						} 
						else 
						{
							alert('Please select the items for the proforma!');
						}
					} 
					else 
					{
						alert('Please type the address of the customer!');
					};
				} 
				else 
				{
					alert('Please type the name of the customer!');
				};
			});
		}

		function reprint_proforma()
		{
			$(document).on('click','#btn_proforma_reprint',function(){
				var proforma_id = $(this).attr('data-id');
				$.ajax({
					url:'/layout/vouchers/proforma_reprint.php',
					method:'POST',
					data:{
						proforma_id:proforma_id
					},
					success:function(data)
					{
						window.open('/layout/vouchers/proforma_pdf.php', '_blank');
					}
				});
			});
		}

		function delete_proforma()
		{
			$(document).on('click','#btn_delete_proforma',function(){
				var proforma_id = $(this).attr('data-id');
				var currentRow=$(this).closest("tr");
				var sales_date = currentRow.find("td:eq(1)").text();
				//var Supplier = currentRow.find("td:eq(3)").text();
				$('#proforma_invoice_delete_question').text('Are you sure you want to delete stock sales invoice of ' + sales_date + '?');
				$('#proforma_invoice_delete_modal').modal('show');
				$(document).on('click','#proforma_delete_yes',function(){
					$.ajax({  
						url:'/layout/vouchers/proforma_delete.php',  
						type:'POST',  
						data:{proforma_id:proforma_id},
						success:function(){
							$('#proforma_invoice_delete_modal').modal('hide');
							window.location.href="/layout/vouchers/proforma_list.php";
						}  
					});
				});
				$(document).on('click','#proforma_delete_no',function(){
					$('#proforma_invoice_delete_modal').modal('hide');
				});
			});
		}
		
		function search_proforma_invoice_by_name()
		{
			$(document).on('keyup','#proforma_name',function(e){
				e.preventDefault();
				var company_id = $('#session_company_id').val();
				var name = $('#proforma_name').val();

				$.ajax({
					url:'/layout/vouchers/proforma_search_by_name.php',
					method:'POST',
					data:{name:name,company_id:company_id},
					success:function(data)
					{
						$('#proforma_list_table').html(data);
					}
				});
			});
		}

		function search_proforma_invoice_by_date()
		{
			$(document).on('click','#proforma_search_icon',function(e){
				e.preventDefault();
				var company_id = $('#session_company_id').val();
				var start_date = $('#proforma_search_from').val();
				var end_date = $('#proforma_search_to').val();

				$.ajax({
					url:'/layout/vouchers/proforma_search_by_date.php',
					method:'POST',
					data:{start_date:start_date,end_date:end_date,company_id:company_id},
					success:function(data)
						{
							$('#proforma_list_table').html(data);
						}
				});
			});
		}

	//STOCK_SALES_INVOICE
		function stock_sales_invoice_add_ledger()
		{
			$(document).on('click','#stock_sales_invoice_add_ledger',function(){
				var i = $('#stock_sales_invoice_payment_optionTable tr:last').attr('id');
				$.ajax({
					url:'/layout/vouchers/stock_sales_invoice_add_ledger.php',
					method:'POST',
					data:{i:i},
					success:function(data)
					{
						$('#stock_sales_invoice_payment_optionTable').append(data);
					}
				});
			});
		}

		function stock_sales_invoice_sum_payment_amount()
		{
			$(document).on('keyup', '.payment_option_amount', function()
			{  
				var button_id = $(this).closest('tr').attr('id');
				var ledger_id = $('#payment_option_ledger_id'+button_id).val();
				
				if(ledger_id !='' && ledger_id > 0)
				{
					var sum = 0;
					$(".payment_option_amount").each(function(){
						sum += +$(this).val();
					});
					$("#payment_option_total").val(sum);
					$("#payment_option_cash_tendered").val(sum);
				}
				else
				{
					$(this).val(0);
					alert('Please select the ledger first!');
				};
			});
		}

		function stock_sales_invoice_delete_ledger()
		{
			$(document).on('click', '#delete_payment_option_ledger', function()
			{  
				var button_id = $(this).attr("data-id");
				$('#'+button_id+'').remove();
				var sum = 0;
				$(".payment_option_amount").each(function()
				{
					sum += +$(this).val();
				});
				$("#payment_option_total").val(sum);
				$("#payment_option_cash_tendered").val(sum);
			});
		}

		function stock_sales_invoice_change_amount()
		{
			$(document).on('change', '#payment_option_cash_tendered', function()
			{  
				var total = $('#payment_option_total').val();
				var cash_tendered = $('#payment_option_cash_tendered').val();
				
				if(cash_tendered >=total)
				{
					var change = cash_tendered - total;
					$("#payment_option_change").val(change);
				}
				else
				{
					$(this).val(0);
					alert('Please cash tendered cannot be less than the Total invoice value!');
				};
			});
		}

		function stock_sales_invoice_item_search_modal()
		{
			$(document).on('click','#stock_sales_invoice_search_item',function()
			{
				$('#item_search').prop('id','customer_search');
				$('#customer_list_table').html('');
				$('#item_search_modal_header').text('Item Search');
				$('#item_search_modal_form').trigger('reset');
				$('#item_search_modal').modal('show');
			});
		}
	
		function stock_sales_invoice_item_search()
		{
			$(document).on('keyup','#customer_search',function(e){
				e.preventDefault();
				
				var search = $('#customer_search').val();
				$.ajax({
					url:'/layout/vouchers/stock_sales_invoice_item_search.php',
					method:'POST',
					data:{
						search:search
					},
					success:function(data)
					{
						$('#customer_list_table').html(data);
					}
				});
			});
		}

		function add_stock_sales_invoice_item_row()
		{
			$(document).on('click','#btn_add_stock_sales_invoice_item',function()
			{
				var count = $('#stock_sales_invoiceTable tr:last').attr('id');
				var stock_item_id = $(this).attr('data-id');
				var stock_item = $(this).attr('data-id1');
				var price = $(this).attr('data-id2');
				var i = $(this).closest('tr').attr('id');
				var qty = $('#item_search_qty'+i).val();
				if($('#stock_sales_invoice_discount').val() != '')
				{
					var discount = parseFloat($('#stock_sales_invoice_discount').val());
				}
				else
				{
					var discount = 0;
				}
				if($('#stock_sales_invoice_tax').val() != '')
				{
					var tax = parseFloat($('#stock_sales_invoice_tax').val());
				}
				else
				{
					var tax = 0;
				}
				var amount = qty * price;
				if(qty !='' && qty > 0)
				{
					$.ajax({
						url:'/layout/vouchers/stock_sales_invoice_item_search_save.php',
						method:'POST',
						data:{
							stock_item_id:stock_item_id,
							stock_item:stock_item,
							qty:qty,
							price:price,
							amount:amount,
							count:count
						},
						datatype:'JSON',
						success:function(data)
						{
							$('#item_search_modal_form').trigger('reset');
							$('#customer_search').focus();
							$('#stock_sales_invoiceTable').append(data);
							var sum = 0;
							$(".stock_sales_invoice_item_amount").each(function()
							{
								sum += +$(this).val();
							});
							sub_total = parseFloat(sum);
							var net = sub_total - discount + tax;
							$("#stock_sales_invoice_sub_total").val(sub_total);
							$("#stock_sales_invoice_sub_totalD").val(sub_total);
							$("#stock_sales_invoice_net_total").val(net);
							$("#stock_sales_invoice_net_totalD").val(net);
						}
					});
				}
				else
				{
					alert('Please the quantity cannot be EMPTY!');
				};
			});
		}

		function stock_sales_invoice_delete_item()
		{
			$(document).on('click', '#delete_stock_sales_invoice_item', function()
			{  
				var button_id = $(this).attr("data-id");
				$('#item_list'+button_id+'').remove();
				
				var sum = 0;
				$(".stock_sales_invoice_item_amount").each(function(){
					sum += +$(this).val();
				});
				$("#stock_sales_invoice_sub_total").val(sum);
				$("#stock_sales_invoice_sub_totalD").val(sum);
				$("#stock_sales_invoice_net_total").val(sum);
				$("#stock_sales_invoice_net_totalD").val(sum);
			});
		}

		function stock_sales_invoice_calculate_net_amount()
		{
			$(document).on('keyup', '#stock_sales_invoice_discount, #stock_sales_invoice_tax', function()
			{  
				if($('#stock_sales_invoice_discount').val() != '')
				{
					var discount = parseFloat($('#stock_sales_invoice_discount').val());
				}
				else
				{
					var discount = 0;
				};

				if($('#stock_sales_invoice_tax').val() != '')
				{
					var tax = parseFloat($('#stock_sales_invoice_tax').val());
				}
				else
				{
					var tax = 0;
				};
				var sub_total = parseFloat($('#stock_sales_invoice_sub_total').val());
				var net = sub_total + tax - discount;
				$("#stock_sales_invoice_discountD").val(discount);
				$("#stock_sales_invoice_taxD").val(tax);
				$("#stock_sales_invoice_net_total").val(net);
				$("#stock_sales_invoice_net_totalD").val(net);
			});
		}

		function save_stock_sales_invoice()
		{
			$(document).on('click','#stock_sales_invoice_save_btn',function(e){
				e.preventDefault();
				var customer_id = $('#stock_sales_invoice_customer_id').val();
				var cash_tendered = $('#payment_option_cash_tendered').val();
				var net_total = $('#stock_sales_invoice_net_total').val();
				var default_warehouse = $('#stock_sales_invoice_default_warehouse').val();
				var default_date = $('#default_date').val();
				var payment_option_total = $('#payment_option_total').val();
				
				var page = window.location.pathname;

				if (customer_id !="" && customer_id > 0) 
				{
					if (net_total !="" && net_total > 0) 
					{
						if (payment_option_total !="" && payment_option_total > 0) 
						{
							if (net_total == payment_option_total) 
							{
								if (cash_tendered >= payment_option_total) 
								{
									$.ajax({
										url:'/layout/vouchers/stock_sales_invoice_save.php',
										method:'POST',
										data:$('#stock_sales_invoice_form').serialize(),
										success:function(data)
										{
											//$('#stock_sales_invoice_form').trigger('reset');
											//window.location.href="/layout/vouchers/stock_sales_invoice_template.php";
											window.open('/layout/vouchers/stock_sales_invoice_pdf.php', '_blank');
											window.location.href= page;
										}
									});
								} 
								else 
								{
									alert('Please the Cash Tendered cannot be Empty!');
								};
							} 
							else 
							{
								alert('Please the Total Cash Tendered and the Total Invoice value should be the same!');
							};
						} 
						else 
						{
							alert('Please the TENDERED Amount cannot be empty!');
						};
					} 
					else 
					{
						alert('Please select the ITEMS to selll!');
					};
				} 
				else 
				{
					alert('Please the CUSTOMER cannot be empty!');
				};
			});
		}

		function display_stock_sales_invoice()
		{
			$(document).on('click','#btn_display_stock_sales',function()
			{
				var stock_sales_id = $(this).attr('data-id');
				$.ajax({
					url:'/layout/vouchers/stock_sales_invoice_display.php',
					method:'POST',
					data:{stock_sales_id:stock_sales_id},
					datatype:'JSON',
					success:function(data)
					{
						window.location.href="/layout/vouchers/stock_sales_invoice_template.php";
					}
		        });
			});
		}

		function edit_stock_sales_invoice()
		{
			/*$(document).on('click','#btn_edit_stock_sales',function()
			{
				var stock_sales_id = $(this).attr('data-id');
				$.ajax({
					url:'/layout/vouchers/stock_sales_invoice_edit.php',
					method:'POST',
					data:{stock_sales_id:stock_sales_id},
					datatype:'JSON',
					success:function(data)
					{
						var res = $.parseJSON(data);
						$('#stock_sales_invoice_customer_details').html(res[0]);
						$('#stock_sales_invoice_payment_option').html(res[1]);
						$('#stock_sales_invoice_list_table').html(res[2]);
						$('#stock_sales_invoice_total_table').html(res[3]);
						$('#stock_sales_invoice_warehouse_cash_ledger').html(res[4]);
						$('#stock_sales_invoice_id').val(res[5]);
						$('#stock_sales_update_btn').show();
						$('#stock_sales_save_btn').hide();
						$('#stock_sales_invoice_modal').modal('show');
					}
		        });
			});*/
		}

		function update_stock_sales_invoice()
		{
			$(document).on('click','#stock_sales_invoice_update_btn',function(e)
			{
				e.preventDefault();
				var customer_id = $('#stock_sales_invoice_customer_id').val();
				var cash_tendered = $('#payment_option_cash_tendered').val();
				var net_total = $('#stock_sales_invoice_net_total').val();
				var default_warehouse = $('#stock_sales_invoice_default_warehouse').val();
				var default_date = $('#default_date').val();
				var payment_option_total = $('#payment_option_total').val();
				
				var page = window.location.pathname;

				if (customer_id !="" && customer_id > 0) 
				{
					if (net_total !="" && net_total > 0) 
					{
						if (payment_option_total !="" && payment_option_total > 0) 
						{
							if (net_total == payment_option_total) 
							{
								if (cash_tendered >= payment_option_total) 
								{
									$.ajax({
										url:'/layout/vouchers/stock_sales_invoice_update.php',
										method:'POST',
										data:$('#stock_sales_invoice_form').serialize(),
										success:function(data)
										{
											window.open('/layout/vouchers/stock_sales_invoice_pdf.php', '_blank');
											window.location.href= page;
										}
									});
								} 
								else 
								{
									alert('Please the Cash Tendered cannot be Empty!');
								};
							} 
							else 
							{
								alert('Please the Total Cash Tendered and the Total Invoice value should be the same!');
							};
						} 
						else 
						{
							alert('Please the TENDERED Amount cannot be empty!');
						};
					} 
					else 
					{
						alert('Please select the ITEMS to selll!');
					};
				} 
				else 
				{
					alert('Please the CUSTOMER cannot be empty!');
				};
			});
		}

		function reprint_stock_sales_invoice()
		{
			$(document).on('click','#btn_stock_sales_invoice_reprint, #btn_stock_sales_invoice_reprint_A4',function(){
				var stock_sales_id = $(this).attr('data-id');
				var id = $(this).attr('id');
				var customer_name = $(this).attr('data-id1');
				$.ajax({
		             url:'/layout/vouchers/stock_sales_invoice_reprint.php',
		             method:'POST',
		             data:{
						stock_sales_id:stock_sales_id,
						customer_name:customer_name
		             },
		             success:function(data)
		             {
						if(id=='btn_stock_sales_invoice_reprint_A4')
						{
							window.open('/layout/vouchers/stock_sales_pdf_A4.php', '_blank');
						}
						else
						{
							window.open('/layout/vouchers/stock_sales_invoice_pdf.php', '_blank');
						};
		             }
		        });
			});
		}
	
	//SMS
		function sms_purchase_modal()
		{
			$(document).on('click','#new_sms_purchase_icon',function()
			{
				var company_id = $('#session_company').val();
				$('#sms_company').val(company_id);
				$('#sms_company_2').val(company_id);
				$('#sms_update_btn').hide();
				$('#sms_save_btn').show();
				$('#sms_cancel_btn').show();
				$('#sms_purchase_create_form').trigger('reset');
				$('#sms_purchase_create_modal').modal('show');
			});
		}

		function save_sms_purchase()
		{
			$(document).on('click','#sms_save_btn',function(){
				var sms_date = $('#sms_date').val();
				var sms_qty = $('#sms_qty').val();
				if (sms_date !=="") 
				{
					if (sms_qty !=="" && sms_qty > 0 ) 
					{
						$.ajax({
							url:'/layout/vouchers/sms_save.php',
							method:'POST',
							data:$('#sms_purchase_create_form').serialize(),
							success:function(data){
								$('#sms_purchase_create_modal').modal('hide');
								$('#sms_purchase_create_form').trigger('reset');
								$('#sms_list_table').html(data);
							}
						});
					} 
					else 
					{
						alert('Please the Qty cannot be EMPTY!');
					};
				} 
				else 
				{
					alert('Please the Date cannot be EMPTY!');
				};
			});
		}

		function edit_sms_purchase()
		{
			$(document).on('click','#btn_edit_sms_purchase',function()
			{
				var sms_utility_id = $(this).attr('data-id');
				$.ajax({
					url:'/layout/vouchers/sms_edit.php',
					method:'POST',
					data:{sms_utility_id:sms_utility_id},
					datatype: 'JSON',
					success:function(data){
						var res = $.parseJSON(data);
						$('#sms_utility_id').val(res[0]);
						$('#sms_date').val(res[1]);
						$('#sms_qty').val(res[2]);
						$('#sms_update_btn').show();
						$('#sms_save_btn').hide();
						$('#sms_purchase_create_modal_header').html('SMS Purchase Edit');
						$('#sms_purchase_create_modal').modal('show');
					}
				});
			});
		}

		function update_sms_purchase()
		{
			$(document).on('click','#sms_update_btn',function(){
				var sms_date = $('#sms_date').val();
				var sms_qty = $('#sms_qty').val();
				if (sms_date !=="") 
				{
					if (sms_qty !=="" && sms_qty > 0 ) 
					{
						$.ajax({
							url:'/layout/vouchers/sms_update.php',
							method:'POST',
							data:$('#sms_purchase_create_form').serialize(),
							success:function(data){
								$('#sms_purchase_create_modal').modal('hide');
								$('#sms_purchase_create_form').trigger('reset');
								$('#sms_list_table').html(data);
							}
						});
					} 
					else 
					{
						alert('Please the Qty cannot be EMPTY!');
					};
				} 
				else 
				{
					alert('Please the Date cannot be EMPTY!');
				};
			});
		}
//REPORTS
	//DASHBOARD
		function dashboard()
		{
			$(document).on('change','#welcome_start_date, #welcome_end_date',function(e)
			{
				e.preventDefault();
				var start_date = $('#welcome_start_date').val();
				var end_date = $('#welcome_end_date').val();
				if(end_date >= start_date)
				{
					$.ajax({
						url:'/layout/reports/dashboard.php',
						method:'POST',
						data:{start_date:start_date,end_date:end_date},
						datatype:'JSON',
						success:function(data)
						{
							var res = $.parseJSON(data);
							/*$('#welcome_profitability_div').html(res[0]);
							$('#welcome_refine_balance_div').html(res[1]);
							$('#welcome_balls_balance_div').html(res[2]);
							$('#welcome_cash_balance_div').html(res[3]);
							$('#welcome_momo_balance_div').html(res[4]);
							$('#welcome_bank_balance_div').html(res[5]);
							$('#welcome_customers_balance_div').html(res[6]);
							$('#welcome_suppliers_balance_div').html(res[7]);
							$('#welcome_expenses_balance_div').html(res[8]);
							$('#welcome_net_worth_div').html(res[9]);*/
							$('#welcome_branch_detail_div').html(res[0]);
						}
					});
				};
			});
		}
	//PURCHASE REPORT
		function purchase_report_modal()
		{
			$(document).on('click','#purchase_report_link',function()
			{
				var company_id = $('#session_company_id').val();
				var user_super_id = $('#session_user_super_id').val();
				var start_date = $('#purch_report_start_date').val();
				var end_date = $('#purch_report_end_date').val();
				$('#purchase_report_modal_form').trigger('reset');
				$('#purch_report_company_id').val(company_id);
				$('#purch_report_user_super_id').val(user_super_id);
				$('#purchase_report_modal').modal('show');
			}) 
		}

		function purchase_report_display()
		{
			$(document).on('click','#purch_report_ok_btn',function()
			{
				var company_id = $('#session_company_id').val();
				var user_super_id = $('#session_user_super_id').val();
				var start_date = $('#purch_report_start_date').val();
				var end_date = $('#purch_report_end_date').val();
				if (start_date !== "") 
				{
					if (end_date !== "") 
					{
						if (end_date >= start_date) 
						{
							$.ajax({
					             url:'/layout/reports/purchase_report_processing.php',
					             method:'POST',
					             data:$('#purchase_report_modal_form').serialize(),
					             success:function(data)
						             {
						             	//$('#purchase_report_modal_form').trigger('reset');
				             			$('#purchase_report_modal').modal('hide');
				             			window.open('/layout/reports/purchase_report_display.php', '_blank');
						             }
					        });	
						} 
						else 
						{
							$('#purchase_report_modal_warning').html('<h6 style=color:red;>Please the End Date cannot be less than the Start Date!</h6>');
							$('#purchase_report_modal_warning').hide().slideDown().delay(2000).fadeOut();
						};
					} 
					else 
					{
						$('#purchase_report_modal_warning').html('<h6 style=color:red;>Please the End Date cannot be EMPTY!</h6>');
						$('#purchase_report_modal_warning').hide().slideDown().delay(2000).fadeOut();
					};
				} 
				else 
				{
					$('#purchase_report_modal_warning').html('<h6 style=color:red;>Please the Start Date cannot be EMPTY!</h6>');
					$('#purchase_report_modal_warning').hide().slideDown().delay(2000).fadeOut();
				};
			}); 
		}

		function purchase_report_by_branch_modal()
		{
			$(document).on('click','#purchase_report_by_branch_link',function()
			{
				var company_id = $('#session_company_id').val();
				var user_super_id = $('#session_user_super_id').val();
				var start_date = $('#prbb_start_date').val();
				var end_date = $('#prbb_end_date').val();
				$('#purchase_report_by_branch_modal_form').trigger('reset');
				$('#prbb_company_id').val(company_id);
				$('#prbb_user_super_id').val(user_super_id);
				$('#purchase_report_by_branch_modal').modal('show');
			}) 
		}

		function purchase_report_by_branch_display()
		{
			$(document).on('click','#prbb_ok_btn',function()
			{
				var company_id = $('#session_company_id').val();
				var user_super_id = $('#session_user_super_id').val();
				var start_date = $('#prbb_start_date').val();
				var end_date = $('#prbb_end_date').val();
				if (start_date !== "") 
				{
					if (end_date !== "") 
					{
						if (end_date >= start_date) 
						{
							$.ajax({
					             url:'/layout/reports/purchase_report_br_branch_processing.php',
					             method:'POST',
					             data:$('#purchase_report_by_branch_modal_form').serialize(),
					             success:function()
								{
									//$('#purchase_report_modal_form').trigger('reset');
									$('#purchase_report_by_branch_modal').modal('hide');
									window.open('/layout/reports/purchase_report_by_branch_display.php', '_blank');
								}
					        });	
						} 
						else 
						{
							$('#purchase_report_by_branch_modal_warning').html('<h6 style=color:red;>Please the End Date cannot be less than the Start Date!</h6>');
							$('#purchase_report_by_branch_modal_warning').hide().slideDown().delay(2000).fadeOut();
						};
					} 
					else 
					{
						$('#purchase_report_by_branch_modal_warning').html('<h6 style=color:red;>Please the End Date cannot be EMPTY!</h6>');
						$('#purchase_report_by_branch_modal_warning').hide().slideDown().delay(2000).fadeOut();
					};
				} 
				else 
				{
					$('#purchase_report_by_branch_modal_warning').html('<h6 style=color:red;>Please the Start Date cannot be EMPTY!</h6>');
					$('#purchase_report_by_branch_modal_warning').hide().slideDown().delay(2000).fadeOut();
				};
			}); 
		}

		function profitability_report_modal()
		{
			$(document).on('click','#profitability_report_link',function()
			{
				var company_id = $('#session_company_id').val();
				var user_super_id = $('#session_user_super_id').val();
				var start_date = $('#profitability_report_start_date').val();
				var end_date = $('#profitability_report_end_date').val();
				$('#profitability_report_modal_form').trigger('reset');
				$('#profitability_report_company_id').val(company_id);
				$('#profitability_report_user_super_id').val(user_super_id);
				$('#profitability_report_modal').modal('show');
			}) 
		}

		function profitability_report_display()
		{
			$(document).on('click','#profitability_report_ok_btn',function()
			{
				var company_id = $('#session_company_id').val();
				var user_super_id = $('#session_user_super_id').val();
				var start_date = $('#profitability_report_start_date').val();
				var end_date = $('#profitability_report_end_date').val();
				if (start_date !== "") 
				{
					if (end_date !== "") 
					{
						if (end_date >= start_date) 
						{
							$.ajax({
					             url:'/layout/reports/profitability_report_processing.php',
					             method:'POST',
					             data:$('#profitability_report_modal_form').serialize(),
					             success:function(data)
						             {
						             	//$('#purchase_report_modal_form').trigger('reset');
				             			$('#profitability_report_modal').modal('hide');
				             			window.open('/layout/reports/profitability_report_display.php', '_blank');
						             }
					        });	
						} 
						else 
						{
							$('#profitability_report_modal_warning').html('<h6 style=color:red;>Please the End Date cannot be less than the Start Date!</h6>');
							$('#profitability_report_modal_warning').hide().slideDown().delay(2000).fadeOut();
						};
					} 
					else 
					{
						$('#profitability_report_modal_warning').html('<h6 style=color:red;>Please the End Date cannot be EMPTY!</h6>');
						$('#profitability_report_modal_warning').hide().slideDown().delay(2000).fadeOut();
					};
				} 
				else 
				{
					$('#profitability_report_modal_warning').html('<h6 style=color:red;>Please the Start Date cannot be EMPTY!</h6>');
					$('#profitability_report_modal_warning').hide().slideDown().delay(2000).fadeOut();
				};
			}); 
		}

	//SALES REPORT
		function sales_report_modal()
		{
			$(document).on('click','#sales_report_link',function()
			{
				var company_id_sales = $('#session_company_id').val();
				var user_super_id_sales = $('#session_user_super_id').val();
				var start_date_sales = $('#start_date_sales').val();
				var end_date_sales = $('#end_date_sales').val();
				$('#sales_report_modal_form').trigger('reset');
				$('#company_id_sales').val(company_id_sales);
				$('#user_super_id_sales').val(user_super_id_sales);
				$('#sales_report_modal').modal('show');
			}) 
		}

		function sales_report_display()
		{
			$(document).on('click','#sales_report_ok_btn',function()
			{
				var company_id_sales = $('#session_company_id').val();
				var user_super_id_sales = $('#session_user_super_id').val();
				var start_date_sales = $('#start_date_sales').val();
				var end_date_sales = $('#end_date_sales').val();
				if (start_date_sales !== "") 
				{
					if (end_date_sales !== "") 
					{
						if (end_date_sales >= start_date_sales) 
						{
							$.ajax({
					             url:'/layout/reports/sales_report_processing.php',
					             method:'POST',
					             data:$('#sales_report_modal_form').serialize(),
					             success:function(data)
						             {
				             			$('#sales_report_modal').modal('hide');
				             			window.open('/layout/reports/sales_report_display.php', '_blank');
						             }
					        });	
						} 
						else 
						{
							$('#sales_report_modal_warning').html('<h6 style=color:red;>Please the End Date cannot be less than the Start Date!</h6>');
							$('#sales_report_modal_warning').hide().slideDown().delay(2000).fadeOut();
						};
					} 
					else 
					{
						$('#sales_report_modal_warning').html('<h6 style=color:red;>Please the End Date cannot be EMPTY!</h6>');
						$('#sales_report_modal_warning').hide().slideDown().delay(2000).fadeOut();
					};
				} 
				else 
				{
					$('#sales_report_modal_warning').html('<h6 style=color:red;>Please the Start Date cannot be EMPTY!</h6>');
					$('#sales_report_modal_warning').hide().slideDown().delay(2000).fadeOut();
				};
			}); 
		}

	//SALES SUMMARY REPORT
		function sales_summary_report_modal()
		{
			$(document).on('click','#sales_summary_report_link',function()
			{
				$('#sales_summary_report_modal_form').trigger('reset');
				$('#sales_summary_report_modal').modal('show');
			});
		}

		function sales_summary_report_display()
		{
			$(document).on('click','#sales_summary_report_ok_btn',function()
			{
				var branch_id = $('#sales_summary_report_branch_id').val();
				var type = $('#sales_summary_report_type').val();
				var start_date = $('#sales_summary_report_start_date').val();
				var end_date = $('#sales_summary_report_end_date').val();
				if (start_date !== "") 
				{
					if (end_date !== "") 
					{
						if (end_date >= start_date) 
						{
							$.ajax({
								url:'/layout/reports/sales_summary_report_processing.php',
								method:'POST',
								data:$('#sales_summary_report_modal_form').serialize(),
								success:function(data)
								{
									$('#sales_summary_report_modal').modal('hide');
									window.open('/layout/reports/sales_summary_report_display.php', '_blank');
								}
							});	
						} 
						else 
						{
							$('#sales_summary_report_modal_warning').html('<h6 style=color:red;>Please the End Date cannot be less than the Start Date!</h6>');
							$('#sales_summary_report_modal_warning').hide().slideDown().delay(2000).fadeOut();
						};
					} 
					else 
					{
						$('#sales_summary_report_modal_warning').html('<h6 style=color:red;>Please the End Date cannot be EMPTY!</h6>');
						$('#sales_summary_report_modal_warning').hide().slideDown().delay(2000).fadeOut();
					};
				} 
				else 
				{
					$('#sales_summary_report_modal_warning').html('<h6 style=color:red;>Please the Start Date cannot be EMPTY!</h6>');
					$('#sales_summary_report_modal_warning').hide().slideDown().delay(2000).fadeOut();
				};
			}); 
		}

	//LEDGER REPORT
		function ledger_report_modal()
		{
			$(document).on('click','#ledger_report_link',function()
			{
				var company_id = $('#session_company_id').val();
				var user_super_id = $('#session_user_super_id').val();
				$('#sales_report_modal_form').trigger('reset');
				$('#ledger_report_company_id').val(company_id);
				$('#ledger_report_user_super_id').val(user_super_id);
				$('#ledger_report_modal').modal('show');
			}) 
		}

		function ledger_report_display()
		{
			$(document).on('click','#ledger_report_ok_btn',function()
			{
				var company_id = $('#ledger_report_company_id').val();
				var user_super_id = $('#ledger_report_user_super_id').val();
				var ledger_id = $('#ledger_report_ledger_id').val();
				var start_date = $('#ledger_report_start_date').val();
				var end_date = $('#ledger_report_end_date').val();
				if (ledger_id > 0) 
				{
					if (start_date !== "") 
					{
						if (end_date !== "") 
						{
							if (end_date >= start_date) 
							{
								$.ajax({
						             url:'/layout/reports/ledger_report_processing.php',
						             method:'POST',
						             data:$('#ledger_report_modal_form').serialize(),
						             success:function(data)
							             {
					             			$('#ledger_report_modal').modal('hide');
					             			window.open('/layout/reports/ledger_report_display.php', '_blank');
							             }
						        });	
							} 
							else 
							{
								$('#ledger_report_modal_warning').html('<h6 style=color:red;>Please the End Date cannot be less than the Start Date!</h6>');
								$('#ledger_report_modal_warning').hide().slideDown().delay(2000).fadeOut();
							};
						} 
						else 
						{
							$('#ledger_report_modal_warning').html('<h6 style=color:red;>Please the End Date cannot be EMPTY!</h6>');
							$('#ledger_report_modal_warning').hide().slideDown().delay(2000).fadeOut();
						};
					} 
					else 
					{
						$('#ledger_report_modal_warning').html('<h6 style=color:red;>Please the Start Date cannot be EMPTY!</h6>');
						$('#ledger_report_modal_warning').hide().slideDown().delay(2000).fadeOut();
					};
				} 
				else 
				{
					$('#ledger_report_modal_warning').html('<h6 style=color:red;>Please the Ledger cannot be EMPTY!</h6>');
					$('#ledger_report_modal_warning').hide().slideDown().delay(2000).fadeOut();
				};
			}); 
		}

		function ledger_report_display_with_item_detail()
		{
			$(document).on('click','#btn_ledger_report_display_with_item_detail',function(e)
			{
				e.preventDefault();
				var ledger_report_company_id = $(this).attr('data-id');
				var ledger_report_user_id = $(this).attr('data-id1');
				var ledger_report_user_super_id = $(this).attr('data-id2');
				var ledger_report_ledger_id = $(this).attr('data-id3');
				var ledger_report_start_date = $(this).attr('data-id4');
				var ledger_report_end_date = $(this).attr('data-id5');
				$.ajax({
					url:'/layout/reports/ledger_report_processing.php',
					method:'POST',
					data:{
						ledger_report_company_id:ledger_report_company_id,
						ledger_report_user_id:ledger_report_user_id,
						ledger_report_user_super_id:ledger_report_user_super_id,
						ledger_report_ledger_id:ledger_report_ledger_id,
						ledger_report_start_date:ledger_report_start_date,
						ledger_report_end_date:ledger_report_end_date
					},
					success:function(data)
					{
						window.open('/layout/reports/ledger_report_display_with_item_detail.php', '_blank');
					}
				});
			}); 
		}

	//LEDGER DETAIL REPORT
		function ledger_detail_report_modal()
		{
			$(document).on('click','#ledger_detail_report_link',function()
			{
				var company_id = $('#session_company_id').val();
				var user_super_id = $('#session_user_super_id').val();
				$('#ledger_detail_report_modal_form').trigger('reset');
				$('#ledger_detail_report_company_id').val(company_id);
				$('#ledger_detail_report_user_super_id').val(user_super_id);
				$('#ledger_detail_report_modal').modal('show');
			}) 
		}

		function ledger_detail_report_display()
		{
			$(document).on('click','#ledger_detail_report_ok_btn',function()
			{
				var company_id = $('#ledger_detail_report_company_id').val();
				var user_super_id = $('#ledger_detail_report_user_super_id').val();
				var start_date = $('#ledger_detail_report_start_date').val();
				var end_date = $('#ledger_detail_report_end_date').val();
				
				if (start_date !== "") 
				{
					if (end_date !== "") 
					{
						if (end_date >= start_date) 
						{
							$.ajax({
					             url:'/layout/reports/ledger_detail_report_processing.php',
					             method:'POST',
					             data:$('#ledger_detail_report_modal_form').serialize(),
					             success:function(data)
						             {
				             			$('#ledger_detail_report_modal').modal('hide');
				             			window.open('/layout/reports/ledger_detail_report_display.php', '_blank');
						             }
					        });	
						} 
						else 
						{
							$('#ledger_detail_report_modal_warning').html('<h6 style=color:red;>Please the End Date cannot be less than the Start Date!</h6>');
							$('#ledger_detail_report_modal_warning').hide().slideDown().delay(2000).fadeOut();
						};
					} 
					else 
					{
						$('#ledger_detail_report_modal_warning').html('<h6 style=color:red;>Please the End Date cannot be EMPTY!</h6>');
						$('#ledger_detail_report_modal_warning').hide().slideDown().delay(2000).fadeOut();
					};
				} 
				else 
				{
					$('#ledger_detail_report_modal_warning').html('<h6 style=color:red;>Please the Start Date cannot be EMPTY!</h6>');
					$('#ledger_detail_report_modal_warning').hide().slideDown().delay(2000).fadeOut();
				};
			}); 
		}

	//LEDGER SUMMARY REPORT
		function ledger_summary_report_modal()
		{
			$(document).on('click','#ledger_summary_report_link',function()
			{
				var company_id = $('#session_company_id').val();
				var user_super_id = $('#session_user_super_id').val();
				$('#ledger_summary_report_modal_form').trigger('reset');
				$('#ledger_summary_report_company_id').val(company_id);
				$('#ledger_summary_report_user_super_id').val(user_super_id);
				$('#ledger_summary_report_modal').modal('show');
			}) 
		}

		function ledger_summary_report_display()
		{
			$(document).on('click','#ledger_summary_report_ok_btn',function()
			{
				var company_id = $('#ledger_summary_report_company_id').val();
				var user_super_id = $('#ledger_summary_report_user_super_id').val();
				var start_date = $('#ledger_summary_report_start_date').val();
				var end_date = $('#ledger_summary_report_end_date').val();
				
				if (start_date !== "") 
				{
					if (end_date !== "") 
					{
						if (end_date >= start_date) 
						{
							$.ajax({
					             url:'/layout/reports/ledger_summary_report_processing.php',
					             method:'POST',
					             data:$('#ledger_summary_report_modal_form').serialize(),
					             success:function(data)
						             {
				             			$('#ledger_summary_report_modal').modal('hide');
				             			window.open('/layout/reports/ledger_summary_report_display.php', '_blank');
						             }
					        });	
						} 
						else 
						{
							$('#ledger_summary_report_modal_warning').html('<h6 style=color:red;>Please the End Date cannot be less than the Start Date!</h6>');
							$('#ledger_summary_report_modal_warning').hide().slideDown().delay(2000).fadeOut();
						};
					} 
					else 
					{
						$('#ledger_summary_report_modal_warning').html('<h6 style=color:red;>Please the End Date cannot be EMPTY!</h6>');
						$('#ledger_summary_report_modal_warning').hide().slideDown().delay(2000).fadeOut();
					};
				} 
				else 
				{
					$('#ledger_summary_report_modal_warning').html('<h6 style=color:red;>Please the Start Date cannot be EMPTY!</h6>');
					$('#ledger_summary_report_modal_warning').hide().slideDown().delay(2000).fadeOut();
				};
			}); 
		}


	//LEDGER GROUP REPORT
		function ledger_group_report_modal()
		{
			$(document).on('click','#ledger_group_report_link',function()
			{
				$('#ledger_group_report_modal_form').trigger('reset');
				$('#ledger_group_report_modal').modal('show');
			}) 
		}

		function ledger_group_report_display()
		{
			$(document).on('click','#ledger_group_report_ok_btn',function()
			{
				var group_id = $('#ledger_group_report_group_id').val();
				var start_date = $('#ledger_group_report_start_date').val();
				var end_date = $('#ledger_group_report_end_date').val();
				
				if (start_date !== "") 
				{
					if (end_date !== "") 
					{
						if (end_date >= start_date) 
						{
							$.ajax({
								url:'/layout/reports/ledger_group_report_processing.php',
								method:'POST',
								data:$('#ledger_group_report_modal_form').serialize(),
								success:function(data)
								{
									$('#ledger_group_report_modal').modal('hide');
									window.open('/layout/reports/ledger_group_report_display.php', '_blank');
								}
							});	
						} 
						else 
						{
							$('#ledger_group_report_modal_warning').html('<h6 style=color:red;>Please the End Date cannot be less than the Start Date!</h6>');
							$('#ledger_group_report_modal_warning').hide().slideDown().delay(2000).fadeOut();
						};
					} 
					else 
					{
						$('#ledger_group_report_modal_warning').html('<h6 style=color:red;>Please the End Date cannot be EMPTY!</h6>');
						$('#ledger_group_report_modal_warning').hide().slideDown().delay(2000).fadeOut();
					};
				} 
				else 
				{
					$('#ledger_group_report_modal_warning').html('<h6 style=color:red;>Please the Start Date cannot be EMPTY!</h6>');
					$('#ledger_group_report_modal_warning').hide().slideDown().delay(2000).fadeOut();
				};
			}); 
		}

	//CASH REPORT
		function cash_report_modal()
		{
			$(document).on('click','#cash_report_link',function()
			{
				var company_id = $('#session_company_id').val();
				var user_super_id = $('#session_user_super_id').val();
				$('#cash_report_modal_form').trigger('reset');
				$('#cash_report_company_id').val(company_id);
				$('#cash_report_user_super_id').val(user_super_id);
				$('#cash_report_modal').modal('show');
			}) 
		}

		function cash_report_display()
		{
			$(document).on('click','#cash_report_ok_btn',function()
			{
				//var company_id = $('#cash_report_company_id').val();
				//var user_super_id = $('#cash_report_user_super_id').val();
				var ledger_id = $('#cash_report_ledger_id').val();
				var start_date = $('#cash_report_start_date').val();
				var end_date = $('#cash_report_end_date').val();
				if (ledger_id > 0 || ledger_id == 'ALL') 
				{
					if (start_date !== "") 
					{
						if (end_date !== "") 
						{
							if (end_date >= start_date) 
							{
								$.ajax({
									url:'/layout/reports/cash_report_processing.php',
									method:'POST',
									data:$('#cash_report_modal_form').serialize(),
									success:function()
									{
										$('#cash_report_modal').modal('hide');
										window.open('/layout/reports/cash_report_display.php', '_blank');
									}
								});	
							} 
							else 
							{
								$('#ledger_report_modal_warning').html('<h6 style=color:red;>Please the End Date cannot be less than the Start Date!</h6>');
								$('#ledger_report_modal_warning').hide().slideDown().delay(2000).fadeOut();
							};
						} 
						else 
						{
							$('#ledger_report_modal_warning').html('<h6 style=color:red;>Please the End Date cannot be EMPTY!</h6>');
							$('#ledger_report_modal_warning').hide().slideDown().delay(2000).fadeOut();
						};
					} 
					else 
					{
						$('#ledger_report_modal_warning').html('<h6 style=color:red;>Please the Start Date cannot be EMPTY!</h6>');
						$('#ledger_report_modal_warning').hide().slideDown().delay(2000).fadeOut();
					};
				} 
				else 
				{
					$('#ledger_report_modal_warning').html('<h6 style=color:red;>Please the Ledger cannot be EMPTY!</h6>');
					$('#ledger_report_modal_warning').hide().slideDown().delay(2000).fadeOut();
				};
			}); 
		}

	//PROFIT AND LOSS ACCOUNT
		function profit_and_loss_modal()
		{
			$(document).on('click','#profit_and_loss_link',function()
			{
				var company_id = $('#session_company_id').val();
				var user_super_id = $('#session_user_super_id').val();
				var start_date = $('#plr_start_date').val();
				var end_date = $('#plr_end_date').val();
				$('#profit_and_loss_report_modal_form').trigger('reset');
				$('#plr_company_id').val(company_id);
				$('#plr_user_super_id').val(user_super_id);
				$('#profit_and_loss_report_modal').modal('show');
			}) 
		}

		function profit_and_loss_display()
		{
			$(document).on('click','#plr_ok_btn',function()
			{
				var company_id = $('#session_company_id').val();
				var user_super_id = $('#session_user_super_id').val();
				var start_date = $('#plr_start_date').val();
				var end_date = $('#plr_end_date').val();
				if (start_date !== "") 
				{
					if (end_date !== "") 
					{
						if (end_date >= start_date) 
						{
							$.ajax({
								url:'/layout/reports/profit_and_loss_processing.php',
								method:'POST',
								data:$('#profit_and_loss_report_modal_form').serialize(),
								success:function(data)
								{
									$('#profit_and_loss_report_modal').modal('hide');
									window.open('/layout/reports/profit_and_loss_report_display.php', '_blank');
								}
							});	
						} 
						else 
						{
							$('#profit_and_loss_report_modal_warning').html('<h6 style=color:red;>Please the End Date cannot be less than the Start Date!</h6>');
							$('#profit_and_loss_report_modal_warning').hide().slideDown().delay(2000).fadeOut();
						};
					} 
					else 
					{
						$('#profit_and_loss_report_modal_warning').html('<h6 style=color:red;>Please the End Date cannot be EMPTY!</h6>');
						$('#profit_and_loss_report_modal_warning').hide().slideDown().delay(2000).fadeOut();
					};
				} 
				else 
				{
					$('#profit_and_loss_report_modal_warning').html('<h6 style=color:red;>Please the Start Date cannot be EMPTY!</h6>');
					$('#profit_and_loss_report_modal_warning').hide().slideDown().delay(2000).fadeOut();
				};
			}); 
		}

	//BALANCE SHEET
		function balance_sheet_modal()
		{
			$(document).on('click','#balance_sheet_link',function()
			{
				var company_id = $('#session_company_id').val();
				var user_super_id = $('#session_user_super_id').val();
				var start_date = $('#balance_sheet_start_date').val();
				var end_date = $('#balance_sheet_end_date').val();
				$('#balance_sheet_modal_form').trigger('reset');
				$('#balance_sheet_company_id').val(company_id);
				$('#balance_sheet_user_super_id').val(user_super_id);
				$('#balance_sheet_modal').modal('show');
			}) 
		}

		function balance_sheet_display()
		{
			$(document).on('click','#balance_sheet_ok_btn',function()
			{
				var company_id = $('#session_company_id').val();
				var user_super_id = $('#session_user_super_id').val();
				var start_date = $('#balance_sheet_start_date').val();
				var end_date = $('#balance_sheet_end_date').val();
				if (start_date !== "") 
				{
					if (end_date !== "") 
					{
						if (end_date >= start_date) 
						{
							$.ajax({
								url:'/layout/reports/balance_sheet_processing.php',
								method:'POST',
								data:$('#balance_sheet_modal_form').serialize(),
								success:function(data)
								{
									$('#balance_sheet_modal').modal('hide');
									window.open('/layout/reports/balance_sheet_display.php', '_blank');
								}
							});	
						} 
						else 
						{
							$('#balance_sheet_modal_warning').html('<h6 style=color:red;>Please the End Date cannot be less than the Start Date!</h6>');
							$('#balance_sheet_modal_warning').hide().slideDown().delay(2000).fadeOut();
						};
					} 
					else 
					{
						$('#balance_sheet_modal_warning').html('<h6 style=color:red;>Please the End Date cannot be EMPTY!</h6>');
						$('#balance_sheet_modal_warning').hide().slideDown().delay(2000).fadeOut();
					};
				} 
				else 
				{
					$('#balance_sheet_modal_warning').html('<h6 style=color:red;>Please the Start Date cannot be EMPTY!</h6>');
					$('#balance_sheet_modal_warning').hide().slideDown().delay(2000).fadeOut();
				};
			}); 
		}

	//ADMISSION REPORT
		function admission_report_modal()
		{
			$(document).on('click','#admission_report_link',function()
			{
				$('#admission_report_modal_form').trigger('reset');
				$('#admission_report_modal').modal('show');
			});
		}

		function admission_report_display()
		{
			$(document).on('click','#admission_report_ok_btn',function()
			{
				var branch_id = $('#admission_report_branch_id').val();
				var type = $('#admission_report_type').val();
				var start_date = $('#admission_report_start_date').val();
				var end_date = $('#admission_report_end_date').val();
				if (start_date !== "") 
					{
						if (end_date !== "") 
						{
							if (end_date >= start_date) 
							{
								$.ajax({
									url:'/layout/reports/admission_report_processing.php',
									method:'POST',
									data:$('#admission_report_modal_form').serialize(),
									success:function(data)
									{
										$('#admission_report_modal').modal('hide');
										window.open('/layout/reports/admission_report_display.php', '_blank');
									}
								});	
							} 
							else 
							{
								$('#admission_report_modal_warning').html('<h6 style=color:red;>Please the End Date cannot be less than the Start Date!</h6>');
								$('#admission_report_modal_warning').hide().slideDown().delay(2000).fadeOut();
							};
						} 
						else 
						{
							$('#admission_report_modal_warning').html('<h6 style=color:red;>Please the End Date cannot be EMPTY!</h6>');
							$('#admission_report_modal_warning').hide().slideDown().delay(2000).fadeOut();
						};
					} 
					else 
					{
						$('#admission_report_modal_warning').html('<h6 style=color:red;>Please the Start Date cannot be EMPTY!</h6>');
						$('#admission_report_modal_warning').hide().slideDown().delay(2000).fadeOut();
					};
			}); 
		}

	//BODY COUNT REPORT
		function body_count_report_modal()
		{
			$(document).on('click','#body_count_report_link',function()
			{
				$('#body_count_report_modal_form').trigger('reset');
				$('#body_count_report_modal').modal('show');
			});
		}

		function body_count_report_display()
		{
			$(document).on('click','#body_count_report_ok_btn',function()
			{
				var branch_id = $('#admission_report_branch_id').val();
				var type = $('#body_count_report_type').val();
				var start_date = $('#body_count_report_start_date').val();
				var end_date = $('#body_count_report_end_date').val();
				if (start_date !== "") 
					{
						if (end_date !== "") 
						{
							if (end_date >= start_date) 
							{
								$.ajax({
									url:'/layout/reports/body_count_report_processing.php',
									method:'POST',
									data:$('#body_count_report_modal_form').serialize(),
									success:function(data)
									{
										$('#body_count_report_modal').modal('hide');
										window.open('/layout/reports/body_count_report_display.php', '_blank');
									}
								});	
							} 
							else 
							{
								$('#body_count_report_modal_warning').html('<h6 style=color:red;>Please the End Date cannot be less than the Start Date!</h6>');
								$('#body_count_report_modal_warning').hide().slideDown().delay(2000).fadeOut();
							};
						} 
						else 
						{
							$('#body_count_report_modal_warning').html('<h6 style=color:red;>Please the End Date cannot be EMPTY!</h6>');
							$('#body_count_report_modal_warning').hide().slideDown().delay(2000).fadeOut();
						};
					} 
					else 
					{
						$('#body_count_report_modal_warning').html('<h6 style=color:red;>Please the Start Date cannot be EMPTY!</h6>');
						$('#body_count_report_modal_warning').hide().slideDown().delay(2000).fadeOut();
					};
			}); 
		}
//INVENTORY VOUCHERS
	//STOCK REQUISITION
		function new_stock_requisition_modal()
		{
			$(document).on('click','#new_stock_requisition_icon',function()
			{
				$('#stock_req_update_btn').hide();
				$('#stock_req_save_btn').show();
				$('#stock_requisition_create_form').trigger('reset');
				$('#stock_requisition_create_modal').modal('show');
			});
		}

		function cancel_stock_requisition_modal()
		{
			$(document).on('click','#stock_req_cancel_btn',function()
			{
				$('#stock_requisition_create_form').trigger('reset');
				$('#stock_requisition_create_modal').modal('hide');
				window.location.href="/layout/vouchers/stock_requisition_list.php";
			});
		}

		function add_stock_requisition_item_row()
		{
			$(document).on('change','.stk_req_item_id',function(){ 
				var i = $('#stock_requisition_items_table tr:last').attr('id');
				i++;
				$.ajax({
					url:'/layout/vouchers/stock_requisition_item_list.php',
					method:'POST',
					data:{i:i},
					success:function(data)
					{
						$('#stock_requisition_items_table').append('<tr id="'+i+'">'+data+'</tr>');
					}
				});
			});
		}

		function get_stock_requisition_item_category()
		{
			$(document).on('change','.stk_req_item_id',function(){ 
				var category_id = $('option:selected', this).attr('data-value');
				var count = $(this).attr("data-id");
				$('#item_cat_id'+count).val(category_id);
			});
		}

		function delete_stock_requisition_item_row()
		{
			$(document).on('click', '#delete_stk_req_item', function(){  
       			var button_id = $(this).attr("data-id");
           		$('#'+button_id+'').remove();

           	});
		}

		function save_stock_requisition_voucher()
		{
			$(document).on('click','#stock_req_save_btn',function(e){
				e.preventDefault();
				var last_tr_id = $("#stock_requisition_items_table tr:last").attr("id");
				var last_tr_select = $("#stock_requisition_items_table tr:last option:selected").val();
				if(last_tr_select =="" || last_tr_select ==0)
				{
					$('#'+last_tr_id+'').remove();
				};
				var stock_req_from = $('#stock_req_from').val();
				var stock_req_to = $('#stock_req_to').val();
				var stk_req_date = $('#stk_req_date').val();
				if (stock_req_to !=="") 
				{
					if (stock_req_from !=="") 
					{
						if (stock_req_from !==stock_req_to) 
						{
							$.ajax({
					             url:'/layout/vouchers/stock_requisition_save.php',
					             method:'POST',
					             data:$('#stock_requisition_create_form').serialize(),
					             success:function(data)
						             {
						             	$('#stock_requisition_create_form').trigger('reset');
						             	window.location.href="/layout/vouchers/stock_requisition_list.php";
						             }
					        });		
						} 
						else 
						{
							alert('Please the location this requisition is being made from and location made to cannot be the same!');
						}
					} 
					else 
					{
						alert('Please select the location from which this requisition is being made!');
					}
				} 
				else 
				{
					alert('Please select the location the requisition is being made!');
				};
			});
		}

		function edit_stock_requisition_voucher()
		{
			$(document).on('click','#btn_edit_stock_req',function(){
				var stock_req_id = $(this).attr('data-id');
				$.ajax({
			             url:'/layout/vouchers/stock_requisition_check_transfer.php',
			             method:'POST',
			             data:{stock_req_id:stock_req_id},
			             success:function(data)
				            {
				            	if (data == "transferred") 
				            	{
				            		alert("The requisition has been served, editing is therefore not allowed!");
				            	}
				            	else if (data == "none")
				            	{
				            		$.ajax({
							             url:'/layout/vouchers/stock_requisition_edit.php',
							             method:'POST',
							             data:{stock_req_id:stock_req_id},
							             datatype:'JSON',
							             success:function(data)
								             {
								             	var res = $.parseJSON(data);
								             	$('#stock_req_id').val(res[0]);
								             	$('#stock_req_from').val(res[1]);
								             	$('#stock_req_to').val(res[2]);
								             	$('#stk_req_date').val(res[3]);
								             	$('#stk_req_requested_by').val(res[4]);
								             	//$('#').val(res[5]);
								             	$('#stk_req_narration').val(res[6]);
								             	$.ajax({
										             url:'/layout/vouchers/stock_requisition_items_edit.php',
										             method:'POST',
										             data:{stock_req_id:stock_req_id},
										             success:function(data)
											            {
											            	$('#stock_requisition_items_list').html(data);
														}
									             });
								             	$('#stock_req_update_btn').show();
								             	$('#stock_req_save_btn').hide();
												$('#stock_requisition_create_modal').modal('show');
								             }
							             });
        						};
							}
		             });
				
			});
		}

		function update_stock_requisition_voucher()
		{
			$(document).on('click','#stock_req_update_btn',function(e){
				e.preventDefault();
				var last_tr_id = $("#stock_requisition_items_table tr:last").attr("id");
				var last_tr_select = $("#stock_requisition_items_table tr:last option:selected").val();
				if(last_tr_select =="" || last_tr_select ==0)
				{
					$('#'+last_tr_id+'').remove();
				};
				var stock_req_from = $('#stock_req_from').val();
				var stock_req_to = $('#stock_req_to').val();
				var stk_req_date = $('#stk_req_date').val();
				if (stock_req_to !=="") 
				{
					if (stock_req_from !=="") 
					{
						if (stock_req_from !==stock_req_to) 
						{
							$.ajax({
					             url:'/layout/vouchers/stock_requisition_update.php',
					             method:'POST',
					             data:$('#stock_requisition_create_form').serialize(),
					             success:function(data)
						             {
						             	$('#stock_requisition_create_form').trigger('reset');
						             	window.location.href="/layout/vouchers/stock_requisition_list.php";
						             }
					        });		
						} 
						else 
						{
							alert('Please the location this requisition is being made from and location made to cannot be the same!');
						}
					} 
					else 
					{
						alert('Please select the location from which this requisition is being made!');
					}
				} 
				else 
				{
					alert('Please select the location the requisition is being made!');
				};
			});
		}

		function delete_stock_requisition_voucher()
		{
			$(document).on('click','#btn_delete_stock_req',function(){
				var stock_req_id = $(this).attr('data-id');
				var currentRow=$(this).closest("tr");
				var lab = currentRow.find("td:eq(1)").text();
				$('#stock_requisition_delete_question').text('Are you sure you want to delete Stock Requisition No:' + stock_req_id + '?');
				$('#stock_requisition_delete_modal').modal('show');
				$(document).on('click','#stk_req_del_yes',function()
				{
					$.ajax({  
		                 url:'/layout/vouchers/stock_requisition_delete.php',  
		                 type:'POST',  
		                 data:{stock_req_id:stock_req_id},
		                 success:function(){
		                 	$('#stock_requisition_delete_modal').modal('hide');
		                 	window.location.href="/layout/vouchers/stock_requisition_list.php";
		                 }  
		            });
			      });
				$(document).on('click','#stk_req_del_no',function()
				{
					$('#stock_requisition_delete_modal').modal('hide');
				});
			});
		}

		function search_stock_requisition_by_date()
		{
			$(document).on('change','#stock_requisition_search_from, #stock_requisition_search_to',function(e){
				e.preventDefault();
				var start_date = $('#stock_requisition_search_from').val();
				var end_date = $('#stock_requisition_search_to').val();
				$.ajax({
					url:'/layout/vouchers/stock_requisition_search_by_date.php',
					method:'POST',
					data:{start_date:start_date,end_date:end_date},
					success:function(data)
					{
						$('#stock_requisition_list_table').html(data);
					}
				});
			});
		}

	//STOCK TRANSFER
		function stock_transfer_modal_requisition()
		{
			$(document).on('click','#btn_transfer_stock_req',function()
			{
				var stock_req_id = $(this).attr('data-id');
				$.ajax({
			             url:'/layout/vouchers/stock_requisition_check_transfer.php',
			             method:'POST',
			             data:{stock_req_id:stock_req_id},
			             success:function(data)
				            {
				            	if (data == "transferred") 
				            	{
				            		alert("The requisition has already been transferred!");
				            	}
				            	else if (data == "none")
				            	{
				            		$.ajax({
										url:'/layout/vouchers/stock_requisition_edit.php',
										method:'POST',
										data:{stock_req_id:stock_req_id},
										datatype:'JSON',
										success:function(data)
										{
											var res = $.parseJSON(data);
											$('#stock_req_id_trans').val(res[0]);
											$('#stock_trans_to').val(res[1]);
											$('#stock_trans_from').val(res[2]);
											$('#stock_req_date').val(res[3]);
											$('#stk_trans_requested_by').val(res[4]);
											$.ajax({
												url:'/layout/vouchers/stock_transfer_items_requested.php',
												method:'POST',
												data:{stock_req_id:stock_req_id},
												success:function(data)
												{
													$('#stock_transfer_items_list').html(data);
												}
											});
											$('#stock_trans_update_btn').hide();
											$('#stock_trans_save_btn').show();
											$('#stock_transfer_create_modal').modal('show');
										}
							        });
				            	};
							}
		             });
			});
		}

		function save_stock_transfer_voucher()
		{
			$(document).on('click','#stock_trans_save_btn',function(e){
				e.preventDefault();
				var last_tr_id = $("#stock_transfer_items_table tr:last").attr("id");
				var last_tr_select = $("#stock_transfer_items_table tr:last option:selected").val();
				if(last_tr_select =="" || last_tr_select ==0)
				{
					$('#'+last_tr_id+'').remove();
				};
				var stk_trans_date = $('#stk_trans_date').val();
				var stock_trans_from = $('#stock_trans_from').val();
				var stock_trans_to = $('#stock_trans_to').val();
				var stk_trans_date = $('#stk_trans_date').val();
				var stk_trans_transferred_by = $('#stk_trans_transferred_by').val();
				var stk_trans_requested_by = $('#stk_trans_requested_by').val();
				var stk_trans_collected_by = $('#stk_trans_collected_by').val();
				if (stock_trans_to !=="") 
				{
					if (stock_trans_from !=="") 
					{
						if (stock_trans_from !==stock_trans_to) 
						{
							if (stk_trans_transferred_by !=="") 
							{
								if (stk_trans_requested_by !=="") 
								{
									if (stk_trans_date !=="") 
									{
										$.ajax({
								             url:'/layout/vouchers/stock_transfer_save.php',
								             method:'POST',
								             data:$('#stock_transfer_create_form').serialize(),
								             success:function(data)
									             {
													$('#stock_transfer_create_form').trigger('reset');
												   	window.open('/layout/vouchers/stock_transfer_pdf_A4.php', '_blank');
													window.location.href="/layout/vouchers/stock_transfer_list.php";
									             }
								        });
							        } 
									else 
									{
										alert('Please type the date of the transaction!');
									}
								} 
								else 
								{
									alert('Please type the name of the person making the request!');
								}
							} 
							else 
							{
								alert('Please type name of the person making transfer!');
							}	
						} 
						else 
						{
							alert('Please the location this transfer is being made from and location made to cannot be the same!');
						}
					} 
					else 
					{
						alert('Please select the location from which this transfer is being made!');
					}
				} 
				else 
				{
					alert('Please select the location the transfer is being made!');
				};
			});
		}

		function edit_stock_transfer_voucher()
		{
			$(document).on('click','#btn_edit_stk_trans',function(){
				var stock_trans_id = $(this).attr('data-id');
				$.ajax({
			             url:'/layout/vouchers/stock_transfer_edit.php',
			             method:'POST',
			             data:{stock_trans_id:stock_trans_id},
			             datatype:'JSON',
			             success:function(data)
				             {
				             	var res = $.parseJSON(data);
				             	$('#stock_trans_id').val(res[0]);
				             	$('#stock_req_id_trans').val(res[1]);
				             	$('#stock_trans_from').val(res[2]);
				             	$('#stock_trans_to').val(res[3]);
				             	$('#stk_trans_date').val(res[4]);
				             	$('#stock_req_date').val(res[5]);
				             	$('#stk_trans_requested_by').val(res[6]);
				             	$('#stk_trans_approved_by').val(res[7]);
				             	$('#stk_trans_transferred_by').val(res[8]);
				             	$('#stk_trans_collected_by').val(res[9]);
				             	$('#stk_trans_narration').val(res[10]);
				             	$.ajax({
						             url:'/layout/vouchers/stock_transfer_items_edit.php',
						             method:'POST',
						             data:{stock_trans_id:stock_trans_id},
						             success:function(data)
							            {
							            	$('#stock_transfer_items_list').html(data);
										}
					             });
				             	$('#stock_trans_update_btn').show();
				             	$('#stock_trans_save_btn').hide();
								$('#stock_transfer_create_modal').modal('show');
				             }
			             });
			});
		}

		function update_stock_transfer_voucher()
		{
			$(document).on('click','#stock_trans_update_btn',function(e){
				e.preventDefault();
				var last_tr_id = $("#stock_transfer_items_table tr:last").attr("id");
				var last_tr_select = $("#stock_transfer_items_table tr:last option:selected").val();
				if(last_tr_select =="" || last_tr_select ==0)
				{
					$('#'+last_tr_id+'').remove();
				};
				var stock_trans_from = $('#stock_trans_from').val();
				var stock_trans_to = $('#stock_trans_to').val();
				var stk_trans_date = $('#stk_trans_date').val();
				var stk_trans_transferred_by = $('#stk_trans_transferred_by').val();
				var stk_trans_requested_by = $('#stk_trans_requested_by').val();
				var stk_trans_collected_by = $('#stk_trans_collected_by').val();
				if (stock_trans_to !=="") 
				{
					if (stock_trans_from !=="") 
					{
						if (stock_trans_from !==stock_trans_to) 
						{
							if (stk_trans_transferred_by !=="") 
							{
								if(stk_trans_requested_by !=="") 
								{
									$.ajax({
										url:'/layout/vouchers/stock_transfer_update.php',
										method:'POST',
										data:$('#stock_transfer_create_form').serialize(),
										success:function(data)
										{
											$('#stock_transfer_create_form').trigger('reset');
											$('#stock_transfer_create_modal').modal('hide');
											window.open('/layout/vouchers/stock_transfer_pdf_A4.php', '_blank');
											window.location.href="/layout/vouchers/stock_transfer_list.php";
										}
							        });	
								} 
								else 
								{
									alert('Please type the name of the person making the request!');
								}
							} 
							else 
							{
								alert('Please type name of the person making transfer!');
							}	
						} 
						else 
						{
							alert('Please the location this transfer is being made from and location made to cannot be the same!');
						}
					} 
					else 
					{
						alert('Please select the location from which this transfer is being made!');
					}
				} 
				else 
				{
					alert('Please select the location the transfer is being made!');
				};
			});
		}

		function new_stock_transfer_modal()
		{
			$(document).on('click','#new_stock_transfer_icon',function()
			{
				$('#stock_trans_update_btn').hide();
				$('#stock_trans_save_btn').show();
				$.ajax({
					url:'/layout/vouchers/stock_transfer_item_initial.php',
					method:'POST',
					data:{i:1},
					success:function(data)
					{
						$('#stock_transfer_items_list').html(data);
					}
				});
				$('#stock_transfer_create_form').trigger('reset');
				$('#stock_transfer_create_modal').modal('show');
			});
		}

		/*function cancel_stock_transfer_modal()
		{
			$(document).on('click','#stock_trans_cancel_btn',function()
			{
				$('#stock_transfer_create_form').trigger('reset');
				$('#stock_transfer_create_modal').modal('hide');
				window.location.href="/layout/vouchers/stock_transfer_list.php";
			});
		}*/

		function add_stock_transfer_item_row()
		{
			$(document).on('change','.stk_trans_item_id',function(){ 
				var i = $('#stock_transfer_items_table tr:last').attr('id');
				i++;
				$.ajax({
					url:'/layout/vouchers/stock_transfer_item_list.php',
					method:'POST',
					data:{i:i},
					success:function(data)
					{
						$('#stock_transfer_items_table').append(data);
					}
				});
			});
		}

		function get_stock_transfer_item_category()
		{
			$(document).on('change','.stk_trans_item_id',function(){ 

				var category_id = $('option:selected', this).attr('data-value');
				var count = $(this).attr("data-id");
				$('#item_cat_id'+count).val(category_id);
			});
		}

		function delete_stock_transfer_item_row()
		{
			$(document).on('click', '#delete_stk_trans_item', function(){  
       			var button_id = $(this).attr("data-id");
           		$('#'+button_id+'').remove();

           	});
		}

		/*function stock_transfer_modal_direct()
		{
			$(document).on('click','#new_stock_transfer_icon',function()
			{
				$('#stock_trans_update_btn').hide();
				$('#stock_trans_save_btn').show();
				$('#stock_transfer_create_form').trigger('reset');
				$('#stock_transfer_create_modal').modal('show');
			});
		}*/

		/*function stock_transfer_batch_list()
		{
			$(document).on('change','.stk_trans_item_id',function()
			{
				var count = $(this).val('data-id');
				var item_id = $('#stk_trans_item_id'+count).val();
				var category_id = $('#item_cat_id'+count).val();
				$.ajax(
				{
					url: '/layout/vouchers/stock_transfer_batch_list.php',
					method: 'POST',
					data: {item_id:item_id, category_id:category_id},
					datatype: 'JSON',
					success: function(data)
					{
						var res = $.parseJSON(data);
						$('#stock_trans_batch_no'+count).html('<option value="0">Please select</option>');
						for (var i=0, l=res.length; i<l;i+=2)
						{
							var oddPositionVal = res[i];
							var evenPositionVal = res[i+1];
							var rowhtml = '<option value=' + oddPositionVal + '>' + evenPositionVal + '</option>';
							$('#stock_trans_batch_no'+count).append(rowhtml);
						}
					}
				});
			});
		}*/
	
	
		function search_stock_transfer_by_date()
		{
			$(document).on('change','#stock_transfer_search_from, #stock_transfer_search_to',function(e){
				e.preventDefault();
				var start_date = $('#stock_transfer_search_from').val();
				var end_date = $('#stock_transfer_search_to').val();

				$.ajax({
					url:'/layout/vouchers/stock_transfer_search_by_date.php',
					method:'POST',
					data:{start_date:start_date,end_date:end_date},
					success:function(data)
					{
						$('#stock_transfer_list_table').html(data);
					}
				});
			});
		}

		function delete_stock_transfer()
		{
			$(document).on('click','#btn_delete_stk_trans',function(){
				var stock_trans_id = $(this).attr('data-id');
				var currentRow=$(this).closest("tr");
				var date = currentRow.find("td:eq(1)").text();
				$('#stock_transfer_delete_question').text('Are you sure you want to delete Stock Transfer No:' + stock_trans_id + '?');
				$('#stock_transfer_delete_modal').modal('show');
				$(document).on('click','#stk_trans_del_yes',function(){
					$.ajax({  
		                 url:'/layout/vouchers/stock_transfer_delete.php',  
		                 type:'POST',  
		                 data:{stock_trans_id:stock_trans_id},
		                 success:function(){
		                 	$('#stock_transfer_delete_modal').modal('hide');
		                 	window.location.href="/layout/vouchers/stock_transfer_list.php";
		                 }  
		            });
			      });
				$(document).on('click','#stk_trans_del_no',function(){
					$('#stock_transfer_delete_modal').modal('hide');
				});
			});
		}
	//STOCK ADJUSTMENT
		function new_stock_adjustment_modal()
		{
			$(document).on('click','#new_stock_adjustment_icon', function()
			{
				$('#stock_adj_update_btn').hide();
				$('#stock_adj_save_btn').show();
				$('#stock_adjustment_create_form').trigger('reset');
				$('#stock_adjustment_create_modal').modal('show');
			});
		}

		function add_stock_adjustment_item_row()
		{
			$(document).on('change','.stk_adj_item_id',function(){ 
				var i = $('#stock_adjustment_items_table tr:last').attr('id');
				i++;
				$.ajax({
					url:'/layout/vouchers/stock_adjustment_item_list.php',
					method:'POST',
					data:{i:i},
					success:function(data)
					{
						$('#stock_adjustment_items_table').append('<tr id="'+i+'">'+data+'</tr>');
					}
				});
			});
		}

		function get_stock_adjustment_item_category()
		{
			$(document).on('change','.stk_adj_item_id',function(){ 
				var category_id = $('option:selected', this).attr('data-value');
				var count = $(this).attr("data-id");
				$('#item_cat_id'+count).val(category_id);
			});
		}

		function clear_adjustment_qty_in_or_out()
		{
			$(document).on('change click','.stk_adj_qty_in',function(){ 
				var i = $(this).closest('tr').attr('id');
				var qty_in = $('#stk_adj_qty_in'+i).val();
				if(qty_in !== "" && qty_in > 0)
				{
					$('#stk_adj_qty_out'+i).val(''); 
					$('#stk_adj_qty_out'+i).attr('hidden',true); 
				}
				else
				{
					$('#stk_adj_qty_out'+i).attr('hidden',false); 
				}
			});

			$(document).on('change click','.stk_adj_qty_out',function(){ 
				var i = $(this).closest('tr').attr('id');
				var qty_out = $('#stk_adj_qty_out'+i).val();
				if(qty_out !== "" && qty_out > 0)
				{
					$('#stk_adj_qty_in'+i).val(''); 
					$('#stk_adj_qty_in'+i).attr('hidden',true); 
				}
				else
				{
					$('#stk_adj_qty_in'+i).attr('hidden',false); 
				}
			});
		}

		function cancel_stock_adjustment_modal()
		{
			$(document).on('click','#stock_adj_cancel_btn',function()
			{
				$('#stock_adjustment_create_form').trigger('reset');
				$('#stock_adjustment_create_modal').modal('hide');
				window.location.href="/layout/vouchers/stock_adjustment_list.php";
			});
		}

		function delete_stock_adjustment_item_row()
		{
			$(document).on('click', '#delete_stk_adj_item', function(){  
       			var button_id = $(this).attr("data-id");
           		$('#'+button_id+'').remove();

           	});
		}

		function save_stock_adjustment_voucher()
		{
			$(document).on('click','#stock_adj_save_btn',function(e){
				e.preventDefault();
				var last_tr_id = $("#stock_adjustment_items_table tr:last").attr("id");
				var last_tr_select = $("#stock_adjustment_items_table tr:last option:selected").val();
				
				var stk_adj_adjusted_by = $('#stk_adj_adjusted_by').val();
				var stk_adj_narration = $('#stk_adj_narration').val();
				var stk_adj_date = $('#stk_adj_date').val();
				if (stk_adj_date !=="") 
				{
					if (stk_adj_adjusted_by !=="") 
					{
						if (stk_adj_narration !== "") 
						{
							if(last_tr_select == "" || last_tr_select == 0)
							{
								$('#'+last_tr_id+'').remove();
							};

							$.ajax({
					             url:'/layout/vouchers/stock_adjustment_save.php',
					             method:'POST',
					             data:$('#stock_adjustment_create_form').serialize(),
					             success:function(data)
						             {
						             	$('#stock_adjustment_create_form').trigger('reset');
						             	window.location.href="/layout/vouchers/stock_adjustment_list.php";
						             }
					        });		
						} 
						else 
						{
							alert('Please the narration this Stock Adjustment Voucher cannot be the empty!');
						}
					} 
					else 
					{
						alert('Please Adjusted by of this Stock Adjustment Voucher cannot be the empty!');
					}
				} 
				else 
				{
					alert('Please select the Date for the Stock Adjustment Voucher is being made!');
				};
			});
		}

		function edit_stock_adjustment_voucher()
		{
			$(document).on('click','#btn_edit_stk_adj',function(){
				var stock_adj_id = $(this).attr('data-id');
        		$.ajax({
		             url:'/layout/vouchers/stock_adjustment_edit.php',
		             method:'POST',
		             data:{stock_adj_id:stock_adj_id},
		             datatype:'JSON',
		             success:function(data)
			             {
			             	var res = $.parseJSON(data);
			             	$('#stock_adj_id').val(res[0]);
			             	$('#stk_adj_ref_no').val(res[1]);
			             	$('#stk_adj_date').val(res[2]);
			             	$('#stk_adj_narration').val(res[3]);
			             	$('#stk_adj_adjusted_by').val(res[4]);
			             	$.ajax({
					             url:'/layout/vouchers/stock_adjustment_items_edit.php',
					             method:'POST',
					             data:{stock_adj_id:stock_adj_id},
					             success:function(data)
						            {
						            	$('#stock_adjustment_items_list').html(data);
									}
				             });
			             	$('#stock_adj_update_btn').show();
			             	$('#stock_adj_save_btn').hide();
							$('#stock_adjustment_create_modal').modal('show');
			             }
		        });
			});
		}

		function update_stock_adjustment_voucher()
		{
			$(document).on('click','#stock_adj_update_btn',function(e){
				e.preventDefault();
				var last_tr_id = $("#stock_adjustment_items_table tr:last").attr("id");
				var last_tr_select = $("#stock_adjustment_items_table tr:last option:selected").val();
				
				var stk_adj_adjusted_by = $('#stk_adj_adjusted_by').val();
				var stk_adj_narration = $('#stk_adj_narration').val();
				var stk_adj_date = $('#stk_adj_date').val();
				if (stk_adj_date !=="") 
				{
					if (stk_adj_adjusted_by !=="") 
					{
						if (stk_adj_narration !== "") 
						{
							if(last_tr_select == "" || last_tr_select == 0)
							{
								$('#'+last_tr_id+'').remove();
							};
							$.ajax({
					             url:'/layout/vouchers/stock_adjustment_update.php',
					             method:'POST',
					             data:$('#stock_adjustment_create_form').serialize(),
					             success:function(data)
						             {
						             	$('#stock_adjustment_create_form').trigger('reset');
						             	window.location.href="/layout/vouchers/stock_adjustment_list.php";
						             }
					        });		
						} 
						else 
						{
							alert('Please the narration this Stock Adjustment Voucher cannot be the empty!');
						}
					} 
					else 
					{
						alert('Please Adjusted by of this Stock Adjustment Voucher cannot be the empty!');
					}
				} 
				else 
				{
					alert('Please select the Date for the Stock Adjustment Voucher is being made!');
				};
			});
		}

		function delete_stock_adjustment()
		{
			$(document).on('click','#btn_delete_stk_adj',function(){
				var stock_adj_id = $(this).attr('data-id');
				var currentRow=$(this).closest("tr");
				var lab = currentRow.find("td:eq(1)").text();
				$('#stock_adjustment_delete_question').text('Are you sure you want to delete Stock Adjustment No:' + stock_adj_id + '?');
				$('#stock_adjustment_delete_modal').modal('show');
				$(document).on('click','#stk_adj_del_yes',function(){
					$.ajax({  
		                 url:'/layout/vouchers/stock_adjustment_delete.php',  
		                 type:'POST',  
		                 data:{stock_adj_id:stock_adj_id},
		                 success:function(){
		                 	$('#stock_adjustment_delete_modal').modal('hide');
		                 	window.location.href="/layout/vouchers/stock_adjustment_list.php";
		                 }  
		            });
			      });
				$(document).on('click','#stk_adj_del_no',function(){
					$('#stock_adjustment_delete_modal').modal('hide');
				});
			});
		}

		function search_stock_adjustment_by_date()
		{
			$(document).on('change','#stock_adjustment_search_from, #stock_adjustment_search_to',function(e){
				e.preventDefault();
				var start_date = $('#stock_adjustment_search_from').val();
				var end_date = $('#stock_adjustment_search_to').val();

				$.ajax({
					url:'/layout/vouchers/stock_adjustment_search_date.php',
					method:'POST',
					data:{start_date:start_date,end_date:end_date},
					success:function(data)
					{
						$('#stock_adjustment_list_table').html(data);
					}
				});
			});
		}
	//STOCK REPORT
		function stock_report_modal()
		{
			$(document).on('click','#stock_report_link',function()
			{
				var stock_report_company_id = $('#session_company_id').val();
				var stock_report_user_id = $('#session_user_super_id').val();
				$('#stock_report_modal_form').trigger('reset');
				$('#stock_report_company_id').val(stock_report_company_id);
				$('#stock_report_user_id').val(stock_report_user_id);
				$('#stock_report_modal').modal('show');
			}) 
		}

		function stock_report_display()
		{
			$(document).on('click','#stock_report_ok_btn',function()
			{
				var stock_report_company_id = $('#session_company_id').val();
				var stock_report_user_id = $('#session_user_super_id').val();
				var stock_report_warehouse = $('#stock_report_warehouse').val();
				var stock_report_start_date = $('#stock_report_start_date').val();
				var stock_report_end_date = $('#stock_report_end_date').val();
				if (stock_report_start_date !== "") 
				{
					if (stock_report_end_date !== "") 
					{
						if (stock_report_end_date >= stock_report_start_date) 
						{
							if (stock_report_warehouse !=="") 
							{
								$.ajax({
						             url:'/layout/reports/stock_report_processing.php',
						             method:'POST',
						             data:$('#stock_report_modal_form').serialize(),
						             success:function(data)
							             {
					             			$('#stock_report_modal').modal('hide');
					             			window.open('/layout/reports/stock_report_display.php', '_blank');
							             }
						        });	
							} 
							else 
							{
								$('#stock_report_modal_warning').html('<h6 style=color:red;>Please the Warehouse cannot be EMPTY!</h6>');
								$('#stock_report_modal_warning').hide().slideDown().delay(2000).fadeOut();
							};
						} 
						else 
						{
							$('#stock_report_modal_warning').html('<h6 style=color:red;>Please the End Date cannot be less than the Start Date!</h6>');
							$('#stock_report_modal_warning').hide().slideDown().delay(2000).fadeOut();
						};
					} 
					else 
					{
						$('#stock_report_modal_warning').html('<h6 style=color:red;>Please the End Date cannot be EMPTY!</h6>');
						$('#stock_report_modal_warning').hide().slideDown().delay(2000).fadeOut();
					};
				} 
				else 
				{
					$('#stock_report_modal_warning').html('<h6 style=color:red;>Please the Start Date cannot be EMPTY!</h6>');
					$('#stock_report_modal_warning').hide().slideDown().delay(2000).fadeOut();
				};
			}); 
		}

		function stock_report_item_tally_card()
		{
			$(document).on('click','#stock_report_item_tally_card',function()
			{
				var item_id = $(this).attr('data-id');
				var category_id = $(this).attr('data-id1');
				var warehouse_id = $(this).attr('data-id2');
				var start_date = $(this).attr('data-id3');
				var end_date = $(this).attr('data-id4');
				var company_id = $(this).attr('data-id5');
				$.ajax({
		             url:'/layout/reports/stock_report_item_tally_card.php',
		             method:'POST',
		             data:{
		             	item_id:item_id,
		             	category_id:category_id,
		             	warehouse_id:warehouse_id,
		             	start_date:start_date,
		             	end_date:end_date,
		             	company_id:company_id
		             },
		             success:function(data)
			             {
	             			//$('#stock_report_modal').modal('hide');
	             			window.open('/layout/reports/stock_report_item_tally_card_display.php', '_blank');
			             }
		        });	
			}); 
		}

	//TALLY CARD
		function stock_item_tally_card_modal()
		{
			$(document).on('click','#stock_item_tally_card_link',function()
			{
				var stock_item_tally_card_company_id = $('#session_company_id').val();
				var stock_item_tally_card_user_id = $('#session_user_super_id').val();
				$('#stock_item_tally_card_modal_form').trigger('reset');
				$('#stock_item_tally_card_company_id').val(stock_item_tally_card_company_id);
				$('#stock_item_tally_card_user_id').val(stock_report_user_id);
				$('#stock_item_tally_card_modal').modal('show');
			});
		}

		function stock_item_tally_card_get_category()
		{
			$(document).on('change','#stock_item_tally_card_item',function(){ 

				var category_id = $('option:selected', this).attr('data-value');
				$('#stock_item_tally_card_category_id').val(category_id);
			});
		}

		function stock_item_tally_card_display()
		{
			$(document).on('click','#stock_item_tally_card_ok_btn',function()
			{
				var company_id = $('#session_company_id').val();
				var user_id = $('#session_user_super_id').val();
				var item_id = $('#stock_item_tally_card_item').val();
				var category_id = $('#stock_item_tally_card_category_id').val();
				var warehouse_id = $('#stock_item_tally_card_warehouse').val();
				var start_date = $('#stock_item_tally_card_start_date').val();
				var end_date = $('#stock_item_tally_card_end_date').val();
				if (start_date !== "") 
				{
					if (end_date !== "") 
					{
						if (end_date >= start_date) 
						{
							if (warehouse_id !=="") 
							{
								if (item_id !=="" && item_id > 0) 
								{
									$.ajax({
							             url:'/layout/reports/stock_report_item_tally_card.php',
							             method:'POST',
							             data:{
							             	company_id:company_id,
							             	item_id:item_id,
							             	category_id:category_id,
							             	warehouse_id:warehouse_id,
							             	start_date:start_date,
							             	end_date:end_date
							             },
							             success:function(data)
								             {
						             			$('#stock_item_tally_card_modal').modal('hide');
						             			window.open('/layout/reports/stock_report_item_tally_card_display.php', '_blank');
								             }
							        });
								} 
								else 
								{
									$('#stock_item_tally_card_modal_warning').html('<h6 style=color:red;>Please the Item cannot be EMPTY!</h6>');
									$('#stock_item_tally_card_modal_warning').hide().slideDown().delay(2000).fadeOut();
								};	
							} 
							else 
							{
								$('#stock_item_tally_card_modal_warning').html('<h6 style=color:red;>Please the Warehouse cannot be EMPTY!</h6>');
								$('#stock_item_tally_card_modal_warning').hide().slideDown().delay(2000).fadeOut();
							};
						} 
						else 
						{
							$('#stock_item_tally_card_modal_warning').html('<h6 style=color:red;>Please the End Date cannot be less than the Start Date!</h6>');
							$('#stock_item_tally_card_modal_warning').hide().slideDown().delay(2000).fadeOut();
						};
					} 
					else 
					{
						$('#stock_item_tally_card_modal_warning').html('<h6 style=color:red;>Please the End Date cannot be EMPTY!</h6>');
						$('#stock_item_tally_card_modal_warning').hide().slideDown().delay(2000).fadeOut();
					};
				} 
				else 
				{
					$('#stock_item_tally_card_modal_warning').html('<h6 style=color:red;>Please the Start Date cannot be EMPTY!</h6>');
					$('#stock_item_tally_card_modal_warning').hide().slideDown().delay(2000).fadeOut();
				};
			}); 
		}

		function stock_adjustment_item_list_delete()
		{
			$(document).on('click','#btn_delete_stock_adjustment_item_list',function()
			{
				/*var page = window.location.pathname;
				var stock_adj_item_id = $(this).attr('data-id');
				$('#sales_invoice_delete_question').text('Are you sure you want to delete stock item?');
				$('#sales_invoice_delete_modal').modal('show');
				$(document).on('click','#sales_delete_yes',function()
				{
					$.ajax({
						url:'/layout/reports/stock_adjustment_item_list_delete.php',
						method:'POST',
						data:{
							stock_adj_item_id:stock_adj_item_id
						},
						success:function(data)
						{
							$('#sales_invoice_delete_modal').modal('hide');
							window.location.href= page;
						}
					});
			    });
				$(document).on('click','#sales_delete_no',function(){
					$('#sales_invoice_delete_modal').modal('hide');
				});*/
			});
		}

	//SITE REPORT
		function site_report_modal()
		{
			$(document).on('click','#site_report_link',function()
			{
				var site_report_company_id = $('#session_company_id').val();
				var site_report_user_id = $('#session_user_super_id').val();
				$('#site_report_modal_form').trigger('reset');
				$('#site_report_company_id').val(site_report_company_id);
				$('#site_report_user_id').val(site_report_user_id);
				$('#site_report_modal').modal('show');
			}) 
		}

		function site_report_display()
		{
			$(document).on('click','#site_report_ok_btn',function()
			{
				var site_report_company_id = $('#session_company_id').val();
				var site_report_user_id = $('#session_user_super_id').val();
				var site_report_site = $('#site_report_site').val();
				var site_report_start_date = $('#site_report_start_date').val();
				var site_report_end_date = $('#site_report_end_date').val();
				if (site_report_start_date !== "") 
				{
					if (site_report_end_date !== "") 
					{
						if (site_report_end_date >= site_report_start_date) 
						{
							if (site_report_site !=="") 
							{
								$.ajax({
						             url:'/layout/reports/site_report_processing.php',
						             method:'POST',
						             data:$('#site_report_modal_form').serialize(),
						             success:function(data)
							             {
					             			$('#site_report_modal').modal('hide');
					             			window.open('/layout/reports/site_report_display.php', '_blank');
							             }
						        });	
							} 
							else 
							{
								$('#site_report_modal_warning').html('<h6 style=color:red;>Please the Site cannot be EMPTY!</h6>');
								$('#site_report_modal_warning').hide().slideDown().delay(2000).fadeOut();
							};
						} 
						else 
						{
							$('#site_report_modal_warning').html('<h6 style=color:red;>Please the End Date cannot be less than the Start Date!</h6>');
							$('#site_report_modal_warning').hide().slideDown().delay(2000).fadeOut();
						};
					} 
					else 
					{
						$('#site_report_modal_warning').html('<h6 style=color:red;>Please the End Date cannot be EMPTY!</h6>');
						$('#site_report_modal_warning').hide().slideDown().delay(2000).fadeOut();
					};
				} 
				else 
				{
					$('#site_report_modal_warning').html('<h6 style=color:red;>Please the Start Date cannot be EMPTY!</h6>');
					$('#site_report_modal_warning').hide().slideDown().delay(2000).fadeOut();
				};
			}); 
		}

		function site_report_item_tally_card()
		{
			$(document).on('click','#site_report_item_tally_card',function()
			{
				var site_id = $(this).attr('data-id');
				var start_date = $(this).attr('data-id3');
				var end_date = $(this).attr('data-id4');
				var company_id = $(this).attr('data-id5');
				$.ajax({
		             url:'/layout/reports/site_report_item_tally_card.php',
		             method:'POST',
		             data:{
		             	site_id:site_id,
		             	start_date:start_date,
		             	end_date:end_date,
		             	company_id:company_id
		             },
		             success:function(data)
			             {
	             			//$('#stock_report_modal').modal('hide');
	             			window.open('/layout/reports/site_report_item_tally_card_display.php', '_blank');
			             }
		        });	
			}); 
		}

	//ASSET REPORT
		function asset_report_modal()
		{
			$(document).on('click','#asset_report_link',function()
			{
				var asset_report_company_id = $('#session_company_id').val();
				var asset_report_user_id = $('#session_user_super_id').val();
				$('#asset_report_modal_form').trigger('reset');
				$('#asset_report_company_id').val(asset_report_company_id);
				$('#asset_report_user_id').val(asset_report_user_id);
				$('#asset_report_modal').modal('show');
			}) 
		}

		function asset_report_display()
		{
			$(document).on('click','#asset_report_ok_btn',function()
			{
				var asset_report_company_id = $('#session_company_id').val();
				var asset_report_user_id = $('#session_user_super_id').val();
				var asset_report_asset = $('#asset_report_asset').val();
				var asset_report_start_date = $('#asset_report_start_date').val();
				var asset_report_end_date = $('#asset_report_end_date').val();
				if (asset_report_start_date !== "") 
				{
					if (asset_report_end_date !== "") 
					{
						if (asset_report_end_date >= asset_report_start_date) 
						{
							if (asset_report_asset !=="") 
							{
								$.ajax({
						             url:'/layout/reports/asset_report_processing.php',
						             method:'POST',
						             data:$('#asset_report_modal_form').serialize(),
						             success:function(data)
							             {
					             			$('#asset_report_modal').modal('hide');
					             			window.open('/layout/reports/asset_report_display.php', '_blank');
							             }
						        });	
							} 
							else 
							{
								$('#asset_report_modal_warning').html('<h6 style=color:red;>Please the Site cannot be EMPTY!</h6>');
								$('#asset_report_modal_warning').hide().slideDown().delay(2000).fadeOut();
							};
						} 
						else 
						{
							$('#asset_report_modal_warning').html('<h6 style=color:red;>Please the End Date cannot be less than the Start Date!</h6>');
							$('#asset_report_modal_warning').hide().slideDown().delay(2000).fadeOut();
						};
					} 
					else 
					{
						$('#asset_report_modal_warning').html('<h6 style=color:red;>Please the End Date cannot be EMPTY!</h6>');
						$('#asset_report_modal_warning').hide().slideDown().delay(2000).fadeOut();
					};
				} 
				else 
				{
					$('#asset_report_modal_warning').html('<h6 style=color:red;>Please the Start Date cannot be EMPTY!</h6>');
					$('#asset_report_modal_warning').hide().slideDown().delay(2000).fadeOut();
				};
			}); 
		}

		function asset_report_item_tally_card()
		{
			$(document).on('click','#asset_report_item_tally_card',function()
			{
				var asset_id = $(this).attr('data-id');
				var start_date = $(this).attr('data-id3');
				var end_date = $(this).attr('data-id4');
				var company_id = $(this).attr('data-id5');
				$.ajax({
		             url:'/layout/reports/asset_report_item_tally_card.php',
		             method:'POST',
		             data:{
		             	asset_id:asset_id,
		             	start_date:start_date,
		             	end_date:end_date,
		             	company_id:company_id
		             },
		             success:function(data)
			             {
	             			//$('#stock_report_modal').modal('hide');
	             			window.open('/layout/reports/asset_report_item_tally_card_display.php', '_blank');
			             }
		        });	
			}); 
		}

		//CUSTOMER STOCK REPORT
			function customer_stock_report_modal()
			{
				$(document).on('click','#customer_stock_report_link',function()
				{
					$('#customer_stock_report_modal_form').trigger('reset');
					$('#customer_stock_report_modal').modal('show');
				}) 
			}
	
			function customer_stock_report_display()
			{
				$(document).on('click','#customer_stock_report_ok_btn',function()
				{
					var customer_id = $('#customer_stock_report_customer_id').val();
					var start_date = $('#customer_stock_report_start_date').val();
					var end_date = $('#customer_stock_report_end_date').val();
					if (start_date !== "") 
					{
						if (end_date !== "") 
						{
							if (end_date >= start_date) 
							{
								if (customer_id !=="") 
								{
									$.ajax({
										url:'/layout/reports/customer_stock_report_processing.php',
										method:'POST',
										data:$('#customer_stock_report_modal_form').serialize(),
										success:function(data)
										{
											$('#customer_stock_report_modal').modal('hide');
											window.open('/layout/reports/customer_stock_report_display.php', '_blank');
										}
									});	
								} 
								else 
								{
									$('#customer_stock_report_modal_warning').html('<h6 style=color:red;>Please the Customer cannot be EMPTY!</h6>');
									$('#customer_stock_report_modal_warning').hide().slideDown().delay(2000).fadeOut();
								};
							} 
							else 
							{
								$('#customer_stock_report_modal_warning').html('<h6 style=color:red;>Please the End Date cannot be less than the Start Date!</h6>');
								$('#customer_stock_report_modal_warning').hide().slideDown().delay(2000).fadeOut();
							};
						} 
						else 
						{
							$('#customer_stock_report_modal_warning').html('<h6 style=color:red;>Please the End Date cannot be EMPTY!</h6>');
							$('#customer_stock_report_modal_warning').hide().slideDown().delay(2000).fadeOut();
						};
					} 
					else 
					{
						$('#customer_stock_report_modal_warning').html('<h6 style=color:red;>Please the Start Date cannot be EMPTY!</h6>');
						$('#customer_stock_report_modal_warning').hide().slideDown().delay(2000).fadeOut();
					};
				}); 
			}

			//CUSTOMER SALES REPORT
				function customer_report_modal()
				{
					$(document).on('click','#customer_report_link',function()
					{
						$('#customer_report_modal_form').trigger('reset');
						$('#customer_report_modal').modal('show');
					}) 
				}
		
				function customer_report_display()
				{
					$(document).on('click','#customer_report_ok_btn',function()
					{
						var customer_id = $('#customer_report_customer_id').val();
						var start_date = $('#customer_report_start_date').val();
						var end_date = $('#customer_report_end_date').val();
						if (start_date !== "") 
						{
							if (end_date !== "") 
							{
								if (end_date >= start_date) 
								{
									if (customer_id !=="") 
									{
										$.ajax({
											url:'/layout/reports/customer_report_processing.php',
											method:'POST',
											data:$('#customer_report_modal_form').serialize(),
											success:function(data)
											{
												$('#customer_report_modal').modal('hide');
												window.open('/layout/reports/customer_report_display.php', '_blank');
											}
										});	
									} 
									else 
									{
										$('#customer_report_modal_warning').html('<h6 style=color:red;>Please the Customer cannot be EMPTY!</h6>');
										$('#customer_report_modal_warning').hide().slideDown().delay(2000).fadeOut();
									};
								} 
								else 
								{
									$('#customer_report_modal_warning').html('<h6 style=color:red;>Please the End Date cannot be less than the Start Date!</h6>');
									$('#customer_report_modal_warning').hide().slideDown().delay(2000).fadeOut();
								};
							} 
							else 
							{
								$('#customer_report_modal_warning').html('<h6 style=color:red;>Please the End Date cannot be EMPTY!</h6>');
								$('#customer_report_modal_warning').hide().slideDown().delay(2000).fadeOut();
							};
						} 
						else 
						{
							$('#customer_report_modal_warning').html('<h6 style=color:red;>Please the Start Date cannot be EMPTY!</h6>');
							$('#customer_report_modal_warning').hide().slideDown().delay(2000).fadeOut();
						};
					}); 
				}
				
		//GOLDBOD PRICE
			function goldbod_price_modal()
			{
				$(document).on('click','#goldbod_price_link',function()
				{
					$('#goldbod_price_modal').modal('show');
				});
			}