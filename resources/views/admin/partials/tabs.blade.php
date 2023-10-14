<div class="tab-links">
    <a href="{{ route('admin.settings.edit') }}" class="tab-button @if(Route::is('admin.settings.edit')) tab-button-active @endif">General</a>
    <a href="{{ route('admin.invoices.index') }}" class="tab-button @if(Route::is('admin.invoices.*')) tab-button-active @endif">Invoices</a>
    <a href="{{ route('admin.transactions.index') }}" class="tab-button @if(Route::is('admin.transactions.*')) tab-button-active @endif">Transactions</a>
    <a href="{{ route('admin.units.index') }}" class="tab-button @if(Route::is('admin.units.*')) tab-button-active @endif">Units</a>
    <a href="{{ route('admin.users.index') }}" class="tab-button @if(Route::is('admin.users.*')) tab-button-active @endif">Users</a>
</div>
