<div class="tab-pane fade show active" id="home4" role="tabpanel" aria-labelledby="home-tab4">
    <div class="card">
        <form action="{{ route('admin.paypal-settings.update') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Paypal Status</label>

                        <select name="paypal_status" class="form-control {{ hasError($errors, 'paypal_status') }}">
                            <option @selected(config('gatewaySettings.paypal_status') === 'active') value="active">Active</option>
                            <option @selected(config('gatewaySettings.paypal_status') === 'inactive') value="inactive">Inactive</option>
                        </select>
                        <x-input-error :messages="$errors->get('paypal_status')" class="mt-2" />
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Paypal Currency Rate</label>
                        <input type="text" class="form-control {{ hasError($errors, 'paypal_currency_rate') }}" name="paypal_currency_rate"  value="{{ config('gatewaySettings.paypal_currency_rate') }}">
                        <x-input-error :messages="$errors->get('paypal_currency_rate')" class="mt-2" />
                    </div>
                </div>

                
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
  </div>
