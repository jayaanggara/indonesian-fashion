@extends('layouts.app')

@section('content')
{{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}

<!-- Popup Syarat & Ketentuan -->
<div class="popup cflex popup-term-and-condition">
    <div class="abs abs-popup-term-and-condition"></div>
    <div class="delimiter">
        <div class="cpopup">
            <h2 class="f-24 f-lg-18 c-secondary text-center m-b-35">Terms and Conditions</h2>
            <h3 class="f-16 f-lg-14 f-secondary c-primary">IFC member registration requirements:</h3>
            <ul>
                <li class="f-14 f-lg-14 c-primary mb-0">Fill out the registration form which can be sent via email</li>
                <li class="f-14 f-lg-14 c-primary mb-0">Photo of yourself, photo of work, and results of media coverage if any</li>
                <li class="f-14 f-lg-14 c-primary mb-0">Photocopy of KTP, HO, SIUP, NPWP</li>
                <li class="f-14 f-lg-14 c-primary mb-0">Joint administration with a fee of 5 million plus 2.4 million per year</li>
                <li class="f-14 f-lg-14 c-primary mb-0">Member curation for the legitimacy of the boutique's existence</li>
                <li class="f-14 f-lg-14 c-primary mb-0">Submitting 10 sketches to be sent to National IFC</li>
                <li class="f-14 f-lg-14 c-primary mb-0">Must get the recommendation of 2 members</li>
                <li class="f-14 f-lg-14 c-primary mb-0">New members must attend JBM (January Board Meeting) and present work</li>
            </ul>
            <h3 class="f-16 f-lg-14 f-secondary c-primary m-t-25">IFC Chapter Establishment Requirements:</h3>
            <ul>
                <li class="f-14 f-lg-14 c-primary mb-0">At least 5 chapter members who have passed curation, then have been appointed (completed with IFC member requirements)</li>
                <li class="f-14 f-lg-14 c-primary mb-0">The closest chapter will accompany and recommend</li>
                <li class="f-14 f-lg-14 c-primary mb-0">Recommended 2 people (National BOD and Chapter Members)</li>
                <li class="f-14 f-lg-14 c-primary mb-0">Present the National BOD during training or inauguration</li>
                <li class="f-14 f-lg-14 c-primary mb-0">Submit 20% of the joint fee contribution fee at the beginning, then the rest is processed by founded chapter</li>
                <li class="f-14 f-lg-14 c-primary mb-0">Willing to carry out the organization in his Chapter and present the national BOD</li>
                <li class="f-14 f-lg-14 c-primary mb-0">Complete standardization/support requirements, e-mail, website, other social media</li>
                <li class="f-14 f-lg-14 c-primary mb-0">BOD and new members must attend JBM</li>
            </ul>
            <p class="f-14 f-lg-14 c-primary f-secondary mb-0 m-t-25">**Introducing return letter signed by Local chapter and Secretary</p>
            <a class="btn-x btn-x-popup-term-and-condition">
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13 1L1 13" stroke="#DD9243" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M1 1L13 13" stroke="#DD9243" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </div>
    </div>
</div>

<div class="auth cflex p-y-50">
    <div class="delimiter" data-aos="fade-in" data-aos-delay="100" data-aos-duration="1000">
        <div class="cauth max-w-450 mx-auto">
            <div class="text-center w-full m-b-35">
                <a href="index.php">
                    <img src="{{ asset('/assets') }}/images/logo-oval.png">
                </a>
                <h2 class="f-28 f-lg-20 c-primary text-uppercase m-t-15">Register</h2>
                <h3 class="f-16 f-lg-14 f-tertiary c-primary m-t-5">Indonesian Citizen Only</h3>
            </div>
            <!-- Progress bar -->
            <div class="progressbar m-t-50 m-b-35">
                <div class="progress" id="progress"></div>
                <div class="progress-step progress-step-active" data-title=""></div>
                <div class="progress-step" data-title=""></div>
                <div class="progress-step" data-title=""></div>
                <div class="progress-step" data-title=""></div>
                <div class="progress-step" data-title=""></div>
                <div class="progress-step" data-title=""></div>
            </div>
            <form class="form" action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- 1 -->
                <div class="form-step form-step-active">
                    <div class="form-group m-b-25">
                        <label class="f-secondary c-secondary f-12">Branch</label>
                        <select name="branch" id="branch">
                            <option value="">Select branch</option>
                            <option value="Jakarta" @if(old('branch') == 'Jakarta') selected @endif>Jakarta</option>
                            <option value="Yogyakarta" @if(old('branch') == 'Yogyakarta') selected @endif>Yogyakarta</option>
                            <option value="Bandung" @if(old('branch') == 'Bandung') selected @endif>Bandung</option>
                            <option value="Semarang" @if(old('branch') == 'Semarang') selected @endif>Semarang</option>
                            <option value="Surabaya" @if(old('branch') == 'Surabaya') selected @endif>Surabaya</option>
                            <option value="Malang" @if(old('branch') == 'Malang') selected @endif>Malang</option>
                            <option value="Pontianak" @if(old('branch') == 'Pontianak') selected @endif>Pontianak</option>
                            <option value="Makasar" @if(old('branch') == 'Makasar') selected @endif>Makasar</option>
                            <option value="Padang" @if(old('branch') == 'Padang') selected @endif>Padang</option>
                            <option value="Aceh" @if(old('branch') == 'Aceh') selected @endif>Aceh</option>
                            <option value="Pekanbaru" @if(old('branch') == 'Pekanbaru') selected @endif>Pekanbaru</option>
                            <option value="Palembang" @if(old('branch') == 'Palembang') selected @endif>Palembang</option>
                            <option value="Bali" @if(old('branch') == 'Bali') selected @endif>Bali</option>
                        </select>
                        @error('branch')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-end">
                        <a class="btn-primary btn-next">Next</a>
                    </div>
                </div>

                <!-- 2 -->
                <div class="form-step">
                    <div class="form-group m-b-25">
                        <label class="f-secondary c-secondary f-12">Username</label>
                        <input id="username" type="text" name="username" placeholder="Type username" value="{{ old('username') }}">
                        @error('username')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group m-b-25">
                        <label class="f-secondary c-secondary f-12">Email</label>
                        <input type="text" name="email" placeholder="Type email" value="{{ old('email') }}">
                        @error('email')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group m-b-25">
                        <label class="f-secondary c-secondary f-12">Password</label>
                        <input type="password" name="password" placeholder="Type password" value="{{ old('password') }}">
                        @error('password')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group m-b-25">
                        <label class="f-secondary c-secondary f-12">Full Name</label>
                        <input type="text" name="full_name" placeholder="Type full name" value="{{ old('full_name') }}">
                        @error('full_name')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="bflex">
                        <div class="form-group w-full m-r-25">
                            <label class="f-secondary c-secondary f-12">Place of birth</label>
                            <input type="text" name="place_of_birth" placeholder="Type place of birth" value="{{ old('place_of_birth') }}">
                            @error('place_of_birth')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group w-full m-r-25q">
                            <label class="f-secondary c-secondary f-12">Date of birth</label>
                            <input type="date" name="date_of_birth" placeholder="Select date of birth" value="{{ old('date_of_birth') }}">
                            @error('date_of_birth')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="bflex">
                        <div class="form-group w-full m-r-25 m-b-25">
                            <label class="f-secondary c-secondary f-12">Gender</label>
                            <select name="gender">
                                <option value="">Select gender</option>
                                <option value="man" @if(old('gender') == 'man') selected @endif>Man</option>
                                <option value="woman" @if(old('gender') == 'woman') selected @endif>Woman</option>
                            </select>
                            @error('gender')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group w-full m-r-25 m-b-25">
                            <label class="f-secondary c-secondary f-12">Status</label>
                            <select name="status">
                                <option value="">Select status</option>
                                <option value="married" @if(old('status') == 'married') selected @endif>Married</option>
                                <option value="not_married_yet" @if(old('status') == 'not_married_yet') selected @endif>Not married yet</option>
                            </select>
                            @error('status')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group m-b-25">
                        <label class="f-secondary c-secondary f-12">Home Address</label>
                        <textarea name="address_member" placeholder="Type home address">{{ old('address_member') }}</textarea>
                        @error('address_member')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="bflex">
                        <a class="btn-tertiary btn-prev">Previous</a>
                        <a class="btn-primary btn-next">Next</a>
                    </div>
                </div>

                <!-- 3 -->
                <div class="form-step">
                    <div class="form-group m-b-25">
                        <div class="bflex">
                            <div class="w-full m-r-25">
                                <label class="f-secondary c-secondary f-12">Telephone</label>
                                <input type="text" name="telephone" placeholder="Type telephone" value="{{ old('telephone') }}">
                                @error('telephone')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="w-full">
                                <label class="f-secondary c-secondary f-12">Fax</label>
                                <input type="text" name="fax" placeholder="Type fax" value="{{ old('fax') }}">
                                @error('fax')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group m-b-25">
                        <label class="f-secondary c-secondary f-12">Mobile Phone</label>
                        <input type="text" name="mobile_phone" placeholder="Type mobile phone" value="{{ old('mobile_phone') }}">
                        @error('mobile_phone')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group m-b-25">
                        <label class="f-secondary c-secondary f-12">Education Mode</label>
                        <select name="education_mode" class="m-b-25">
                            <option value="">Select education mode</option>
                            <option value="SMA/SMK" @if(old('education_mode') == 'SMA/SMK') selected @endif>SMA/SMK</option>
                            <option value="D1" @if(old('education_mode') == 'D1') selected @endif>D1</option>
                            <option value="D2" @if(old('education_mode') == 'D2') selected @endif>D2</option>
                            <option value="D3" @if(old('education_mode') == 'D3') selected @endif>D3</option>
                            <option value="D4" @if(old('education_mode') == 'D4') selected @endif>D4</option>
                            <option value="S1" @if(old('education_mode') == 'S1') selected @endif>S1</option>
                            <option value="S2" @if(old('education_mode') == 'S2') selected @endif>S2</option>
                            <option value="S3" @if(old('education_mode') == 'S3') selected @endif>S3</option>
                        </select>
                        @error('education_mode')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group m-b-25">
                        <label class="f-secondary c-secondary f-12">Company Name</label>
                        <input type="text" name="company_name" placeholder="Type company name" value="{{ old('company_name') }}">
                        @error('company_name')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group m-b-25">
                        <label class="f-secondary c-secondary f-12">Company Address</label>
                        <textarea name="company_address" placeholder="Type company address">{{ old('company_address') }}</textarea>
                        @error('company_address')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group m-b-35">
                        <label class="f-secondary c-secondary f-12">Production Capacity</label>
                        <input type="text" name="production_capacity" placeholder="Type production capacity" value="{{ old('production_capacity') }}">
                        @error('production_capacity')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="bflex">
                        <a class="btn-tertiary btn-prev">Previous</a>
                        <a class="btn-primary btn-next">Next</a>
                    </div>
                </div>

                <!-- 4 -->
                <div class="form-step">
                    <div class="form-group m-b-25">
                        <label class="f-secondary c-secondary f-12">Stockist / Branch address</label>
                        <textarea name="stockist_or_branch_address" placeholder="Type stockist / branch address">{{ old('stockist_or_branch_address') }}</textarea>
                        @error('stockist_or_branch_address')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="bflex m-b-25">
                        <div class="w-full m-r-25">
                            <label class="f-secondary c-secondary f-12">Brand (Label)</label>
                            <input type="text" name="brand" placeholder="Type brand (label)" value="{{ old('brand') }}">
                            @error('brand')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="w-full">
                            <label class="f-secondary c-secondary f-12">Number of Permanent Employees</label>
                            <input type="text" name="number_of_permanent_emp" placeholder="Type number of permanent employees" value="{{ old('number_of_permanent_emp') }}">
                            @error('number_of_permanent_emp')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="bflex m-b-25">
                        <div class="w-full m-r-25">
                            <label class="f-secondary c-secondary f-12">Income Per Month</label>
                            <input type="text" name="income_per_month" placeholder="Type income per month" class="m-r-25" value="{{ old('income_per_month') }}">
                            @error('income_per_month')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="w-full">
                            <label class="f-secondary c-secondary f-12">Number of Outsourcing Employees</label>
                            <input type="text" name="number_of_outsourcing_emp" placeholder="Type number of outsourcing employees" value="{{ old('number_of_outsourcing_emp') }}">
                            @error('number_of_outsourcing_emp')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="bflex m-b-25">
                        <div class="w-full m-r-25">
                            <label class="f-secondary c-secondary f-12">Start Price Range</label>
                            <input type="text" name="start_price_range" placeholder="Type start price range" value="{{ old('start_price_range') }}">
                            @error('start_price_range')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="w-full">
                            <label class="f-secondary c-secondary f-12">End Price Range</label>
                            <input type="text" name="end_price_range" placeholder="Type end price range" value="{{ old('end_price_range') }}">
                            @error('end_price_range')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group m-b-35">
                        <label class="f-secondary c-secondary f-12">Min. Order</label>
                        <input type="text" name="min_order" placeholder="Type min. order" value="{{ old('min_order') }}">
                        @error('min_order')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="bflex">
                        <a class="btn-tertiary btn-prev">Previous</a>
                        <a class="btn-primary btn-next">Next</a>
                    </div>
                </div>


                <!-- 5 -->
                <div class="form-step">
                    <div class="form-group m-b-25">
                        <label class="f-secondary c-secondary f-12">Gender Category</label>
                        <select name="gender_category">
                            <option value="">Select gender category</option>
                            <option value="man" @if(old('gender_category') == 'man') selected @endif>Man</option>
                            <option value="woman" @if(old('gender_category') == 'woman') selected @endif>Woman</option>
                        </select>
                        @error('gender_category')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group m-b-25">
                        <label class="f-secondary c-secondary f-12">Age Category</label>
                        <select name="age_category">
                            <option value="">Select age category</option>
                            <option value="child" @if(old('age_category') == 'child') selected @endif>Child</option>
                            <option value="youth" @if(old('age_category') == 'youth') selected @endif>Youth</option>
                            <option value="adult" @if(old('age_category') == 'adult') selected @endif>Adult</option>
                        </select>
                        @error('age_category')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="bflex">
                        <div class="form-group w-full m-r-25 m-b-25">
                            <label class="f-secondary c-secondary f-12">Market</label>
                            <select name="market">
                                <option value="">Select market</option>
                                <option value="local" @if(old('market') == 'local') selected @endif>Local</option>
                                <option value="export" @if(old('market') == 'export') selected @endif>Export</option>
                            </select>
                            @error('market')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group w-full m-b-25">
                            <label class="f-secondary c-secondary f-12">Business Type</label>
                            <select name="business_type">
                                <option value="">Select business type</option>
                                <option value="ready_to_wear" @if(old('business_type') == 'ready_to_wear') selected @endif>Ready To Wear</option>
                                <option value="private" @if(old('business_type') == 'private') selected @endif>Private</option>
                            </select>
                            @error('business_type')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group m-b-25">
                        <label class="f-secondary c-secondary f-12">Product Type</label>
                        <select name="product_type">
                            <option value="">Select product type</option>
                            <option value="casual" @if(old('product_type') == 'casual') selected @endif>Casual</option>
                            <option value="party" @if(old('product_type') == 'party') selected @endif>Party</option>
                            <option value="uniform" @if(old('product_type') == 'uniform') selected @endif>Uniform</option>
                            <option value="office" @if(old('product_type') == 'office') selected @endif>Office</option>
                            <option value="muslim" @if(old('product_type') == 'muslim') selected @endif>Muslim</option>
                        </select>
                        @error('product_type')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group m-b-25">
                        <label class="f-secondary c-secondary f-12">Product Character</label>
                        <select name="product_character">
                            <option value="">Select product character</option>
                            <option value="sportive" @if(old('product_character') == 'sportive') selected @endif>Sportive</option>
                            <option value="feminine" @if(old('product_character') == 'feminine') selected @endif>Feminine</option>
                            <option value="ethnic" @if(old('product_character') == 'ethnic') selected @endif>Ethnic</option>
                            <option value="classic" @if(old('product_character') == 'classic') selected @endif>Classic</option>
                            <option value="elegant" @if(old('product_character') == 'elegant') selected @endif>Elegant</option>
                            <option value="contemporary" @if(old('product_character') == 'contemporary') selected @endif>Contemporary</option>
                        </select>
                        @error('product_character')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="bflex">
                        <div class="form-group w-full m-r-25 m-b-25">
                            <label class="f-secondary c-secondary f-12">Recomendation 1</label>
                            <input type="text" name="recomendation_1" placeholder="Type recomendation 1">
                            @error('recomendation_1')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group w-full m-b-25">
                            <label class="f-secondary c-secondary f-12">Recomendation 2</label>
                            <input type="text" name="recomendation_2" placeholder="Type recomendation 2">
                            @error('recomendation_2')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="bflex">
                        <a class="btn-tertiary btn-prev">Previous</a>
                        <a class="btn-primary btn-next">Next</a>
                    </div>
                </div>

                <!-- 6 -->
                <div class="form-step">
                    <div class="m-b-25">
                        <div class="sflex ff-lg-column ai-lg-start">
                            <label for="imgKTP" class="f-14"><span class="c-secondary f-secondary f-12 d-block" style="white-space: nowrap;">Upload photo identification (KTP)</span>
                                <img id="fileKTP" src="{{ asset('/assets') }}/images/default-image.png" alt="" class="d-block m-y-15" style="height: 150px; max-height: 150px; width: 100%; object-fit: cover"/>
                            </label>
                            <input accept="image/*" type="file" name="img_ktp" id="imgKTP" class="f-14 m-l-25 m-lg-l-0 m-t-35 m-lg-t-0"/>
                        </div>
                        <div>
                            @error('img_ktp')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="m-b-25">
                        <div class="sflex ff-lg-column ai-lg-start">
                            <label for="imgPhoto" class="f-14"><span class="c-secondary f-secondary f-12 d-block" style="white-space: nowrap;">Upload a color photo</span>
                                <img id="filePhoto" src="{{ asset('/assets') }}/images/default-image.png" alt="" class="d-block m-y-15" style="height: 150px; max-height: 150px; width: 100%; object-fit: cover"/>
                            </label>
                            <input accept="image/*" type="file" name="img_photo" id="imgPhoto" class="f-14 m-l-25 m-lg-l-0 m-t-35 m-lg-t-0"/>
                        </div>
                        <div>
                            @error('img_photo')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="sflex m-b-35">
                        <input type="checkbox" name="term_condition" id="term_condition" style="width: 20px; cursor: pointer;" required>
                        <p class="f-14 f-lg-14 c-primary mb-0 m-l-10">I agree to the <a class="btn-popup-term-and-condition btn-text-secondary f-14">Terms and Conditions</a></p>
                    </div>
                    <div class="bflex">
                        <a class="btn-tertiary btn-prev">Previous</a>
                        <button type="submit" class="btn-primary">Register</button>
                    </div>
                </div>
            </form>
            <div class="text-center w-full m-t-75">
                <p class="f-14 f-lg-14 c-primary mb-0">Already have an account? <a href="login.php" class="c-secondary">Login</a></p>
            </div>
            <div class="w-full cflex m-t-75">
                <a href="{{ asset('/assets') }}/documents/formulir-pendaftaran-anggota-IFC.doc" class="btn-tertiary f-14" download>
                    <svg class="m-r-2" style="height: 16px;" width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19.3019 13.5962V17.5962C19.3019 18.1266 19.0912 18.6353 18.7161 19.0104C18.341 19.3855 17.8323 19.5962 17.3019 19.5962H3.30188C2.77145 19.5962 2.26274 19.3855 1.88767 19.0104C1.51259 18.6353 1.30188 18.1266 1.30188 17.5962V13.5962" stroke="#DD9243" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M5.30188 8.59619L10.3019 13.5962L15.3019 8.59619" stroke="#DD9243" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M10.3019 13.5962V1.59619" stroke="#DD9243" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    Member Registration Form
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
