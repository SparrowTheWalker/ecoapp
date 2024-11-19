<div  class="modal  fade" tabindex="-1" role="dialog" id="myModal2">
 <div class="modal-dialog modal-xl" role="document">
   <div class="modal-content">
     <div class="alert alert-danger" style="display:none"></div>
<div class="modal-header">
    <h4 class="modal-title">LARGECASH REPORTING FORM</h4>
</div>

<form method="post" action="update-largecash">
<div class="modal-body">
    <div class="row">

            <div class="form-group col-md-4">
                <label for="transaction_number" class="form-label">Transaction Number</label>
                <input type="text" name="transaction_number" id="transaction_number" class="form-control form-control-sm">
            </div>
            <div class="form-group col-md-4">
                <label for="transaction_method" class="form-label">Transaction Method</label>
                <input type="text" name="transaction_method" id="transaction_method" class="form-control form-control-sm">
            </div>
            <div class="form-group col-md-4">
                <label for="local_amount" class="form-label">Local Amount</label>
                <input type="text" name="local_amount" id="local_amount" class="form-control form-control-sm">
            </div>
            <div class="form-group col-md-4">
                <label for="transaction_date" class="form-label">Transaction Date</label>
                <input type="date" name="transaction_date" id="transaction_date" class="form-control form-control-sm">
            </div>
            <div class="form-group col-md-4">
                <label for="purpose" class="form-label">Purpose</label>
                <input type="text" name="purpose" id="purpose" class="form-control form-control-sm">
            </div>
            <div class="form-group col-md-4">
                <label for="source" class="form-label">Source</label>
                <input type="text" name="source" id="source" class="form-control form-control-sm">
            </div>
             <div class="form-group col-md-4">
                        <label for="transaction_type" class="form-label">Transaction Type</label>
                        <select name="transaction_type" id="transaction_type" class="form-control form-control-sm select2" style="  width: 100%" >
                            <option value="">Select Transaction Type</option>
                            @isset($data)
                                @foreach($data as $value)
                                    @if($value->Category  == 'Funds Type')
                                        <option value="{{$value->Value}}">{{$value->Description}}</option>
                                    @endif
                                @endforeach
                            @endisset
                        </select>
                    </div>

            <div class="form-group col-md-4">
                <label for="funds_from" class="form-label">Funds From</label>
                <select name="funds_from" id="funds_from" class="form-control form-control-sm">
                    <option value="Account">Account</option>
                    <option value="Account My Client">Account My Client</option>
                    <option value="Person">Person</option>
                    <option value="Person My Client">Person My Client</option>
                    <option value="Entity">Entity</option>
                    <option value="Entity My Client">Entity My Client</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="funds_to" class="form-label">Funds To</label>
                <select name="funds_to" id="funds_to" class="form-control form-control-sm">
                    <option value="Account">Account</option>
                    <option value="Account My Client">Account My Client</option>
                    <option value="Person">Person</option>
                    <option value="Person My Client">Person My Client</option>
                    <option value="Entity">Entity</option>
                    <option value="Entity My Client">Entity My Client</option>
                </select>
            </div>
<div class="form-group col-md-4">
                        <label for="foreign_currency_code" class="form-label">Foreign Currency Code</label>
                        <select name="foreign_currency_code" id="foreign_currency_code" class="form-control form-control-sm select2" style="  width: 100%" >
                            <option value="">Select Transaction Type</option>
                            @isset($data)
                                @foreach($data as $value)
                                    @if($value->Category  == ' Currencies')
                                        <option value="{{$value->Value}}">{{$value->Description}}</option>
                                    @endif
                                @endforeach
                            @endisset
                        </select>

                        </div>
                        <div class="form-group col-md-4">
                            <label for="foreign_amount" class="form-label">Foreign Amount</label>
                            <input type="text" name="foreign_amount" id="foreign_amount" class="form-control form-control-sm">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="foreign_exchange_rate" class="form-label">Foreign Exchange Rate</label>
                            <input type="text" name="foreign_exchange_rate" id="foreign_exchange_rate" class="form-control form-control-sm">
                        </div>

            <div class="form-group col-md-6">
                <label for="from_country" class="form-label">From Country</label>
                <select name="from_country" id="from_country" class="form-control form-control-sm">
                    <option value="KE">KENYA</option>
                </select>
            </div>

            <div class="form-group col-md-6">
                <label for="to_country" class="form-label">To Country</label>
                <select name="to_country" id="to_country" class="form-control form-control-sm">
                    <option value="KE">KENYA</option>
                </select>
            </div>
         <div class="card" id="personInfo" style="display: none;">
                <div class="card-body">
                    <h3 class="badge badge-info">For Person information</h3>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label class="form-label">Funds Code</label>
                            <input type="text" name="funds_code" class="form-control form-control-sm" value="Over the counter cash deposit">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="form-label">Country</label>
                            <input type="text" name="country" class="form-control form-control-sm" value="Kenya">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="form-label">First Name</label>
                            <input type="text" name="first_name" class="form-control form-control-sm">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="form-label">Last Name</label>
                            <input type="text" name="last_name" class="form-control form-control-sm">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="form-label">ID Number</label>
                            <input type="text" name="id_number" class="form-control form-control-sm">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="form-label">Nationality</label>
                            <input type="text" name="nationality" class="form-control form-control-sm">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Additional fields for XML schema -->

             <!-- Card for Account My Client information -->
            <div class="card" id="accountMyClientInfo" style="display: none;">
                <div class="card-body">
                       <h3 class="badge badge-success" id="">Account My Client information</h3>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label class="form-label">Funds Code</label>
                            <input type="text" name="funds_code_account" class="form-control form-control-sm" value="Over the counter cash deposit">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="form-label">Country</label>
                            <input type="text" name="country_account" class="form-control form-control-sm">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="form-label">Account Number</label>
                            <input type="text" name="account_number" class="form-control form-control-sm">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="form-label">Account Name</label>
                            <input type="text" name="account_name" class="form-control form-control-sm">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="form-label">Institution Name</label>
                            <input type="text" name="institution_name" class="form-control form-control-sm" value="ECOBANK KENYA LIMITED" readonly>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="form-label">Swift</label>
                            <input type="text" name="swift" class="form-control form-control-sm" value="ECOCKENA" readonly>
                        </div>
                    </div>
                </div>
            </div>
                </div>
            </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
        </div>
        </div>
        </div>




        <script>
            document.addEventListener('DOMContentLoaded', function () {

                 function fetchTransactionMethods(categoryId) {
                    fetch(`/frc-dropdown/${categoryId}`)
                        .then(response => response.json())
                        .then(data => {
                            const transactionMethodSelect = document.getElementById('transaction_type');
                            transactionMethodSelect.innerHTML = '<option value="">Select Transaction Method</option>';
                            for (const [value, description] of Object.entries(data)) {
                                const option = document.createElement('option');
                                option.value = value;
                                option.textContent = description;
                                transactionMethodSelect.appendChild(option);
                            }
                        })
                        .catch(error => {
                            console.error('Error fetching transaction methods:', error);
                        });
                }
                var fundsFromSelect = document.getElementById('funds_from');
                var personInfoCard = document.getElementById('personInfo');
          var fundsToSelect = document.getElementById('funds_to');
                var accountMyClientInfoCard = document.getElementById('accountMyClientInfo');

                fundsToSelect.addEventListener('change', function () {
                    if (fundsToSelect.value === 'Account My Client') {
                        accountMyClientInfoCard.style.display = 'block';
                    } else {
                        accountMyClientInfoCard.style.display = 'none';
                    }
                });
                fundsFromSelect.addEventListener('change', function () {
                    if (fundsFromSelect.value === 'Person') {
                        personInfoCard.style.display = 'block';
                    } else {
                        personInfoCard.style.display = 'none';
                    }
                });
            });
        </script>
