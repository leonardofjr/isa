<form method="post" action="send-quote">
    <input type="hidden" name="_token" value={{csrf_token()}}>
    <div class="form-group">
        <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Name *" value="{{ old('name') }}"  autocomplete="name" autofocus>
    </div>
    @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="form-group">
        <input type="text" id="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email *" value="{{ old('email') }}"  autocomplete="email" autofocus>
    </div>
    @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="form-group">
        <input type="text" id="phone" class="form-control @error('phone') is-invalid @enderror" name="phone"  placeholder="Phone *" pattern="[0-9\s-]*" title="Only numbers allowed." value="{{ old('phone') }}"  autocomplete="phone" autofocus>
    </div>
    @error('phone')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="form-group">
        <input type="text" id="city" class="form-control @error('city') is-invalid @enderror" name="city" placeholder="City" value="{{ old('city') }}"  autocomplete="city" autofocus>
    </div>
    @error('city')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="form-group">
        <select id="province" class="form-control @error('province') is-invalid @enderror" name="province">
        <option value="">Select Province</option>
        <option value="Ontario">Ontario</option>
        </select>
    </div>
    <div class="form-group">
        <textarea rows="5" name="message" id="message" class="form-control @error('message') is-invalid @enderror" placeholder="Message" value="{{ old('message') }}"  autocomplete="message" autofocus></textarea>
    </div>
    @error('message')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <button type="submit" class="btn btn-primary">Submit</button>
 </form>