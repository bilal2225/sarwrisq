@extends('layouts') <!-- Extend your main layout if you have one -->

@section('content')
    <style>
        /* General Styles */
        body {
            background-color: #8B0000; /* Dark Red */
            color: #FFFFFF; /* White */
            font-family: Arial, sans-serif;
        }

        /* Form Container */
        .form-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #F5F5F5; /* Light Gray for form background */
            border: 2px solid #000000; /* Black border */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Shadow effect */
        }

        /* Headings */
        h1, h2 {
            color: #8b0000; /* Gold/Yellow */
            font-weight: bold;
        }

        /* Labels */
        label {
            display: block;
            margin-bottom: 5px;
            color: #8b0000; /* Gold/Yellow */
        }

        /* Input Fields */
        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #CCCCCC; /* Light Gray */
            border-radius: 4px;
            background-color: #F5F5F5; /* Light Gray */
            color: #333333; /* Dark Gray */
        }

        /* Buttons */
        button {
            padding: 10px 20px;
            background-color: #FFD700; /* Gold/Yellow */
            color: #000000; /* Black */
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #FFA500; /* Slightly darker Gold/Yellow */
        }

        /* Signature Field */
        .signature {
            text-align: center;
            margin-top: 20px;
        }
    </style>


    <div class="container">
        <form action="{{ route('mureedain.update', $mureedain->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT') <!-- Use PUT method for updates -->
            <div class="form-container">
                <h1 class="text-center">EDIT BIO DATA FORM (MUREEDAIN)</h1>
                <p class="text-center"><strong>Tehreek Dawat-e-Faqr</strong></p>

                <!-- Paste your picture -->
                <div class="mb-3">
                    <label for="picture" class="form-label">Paste your picture</label>
                    <input type="file" class="form-control" id="picture" name="picture" accept="image/*">
                    @if ($mureedain->picture)
                        <img src="{{ asset($mureedain->picture) }}" alt="Profile Picture" style="max-width: 100px; margin-top: 10px;">
                    @endif
                </div>

                <!-- Name -->
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" value="{{ old('name', $mureedain->name) }}">
                </div>

                <!-- Father's Name -->
                <div class="mb-3">
                    <label for="father_name" class="form-label">Father Name</label>
                    <input type="text" class="form-control" id="father_name" name="father_name" placeholder="Enter your father's name" value="{{ old('father_name', $mureedain->father_name) }}">
                </div>

                <!-- CNIC -->
                <div class="mb-3">
                    <label for="cnic" class="form-label">CNIC#</label>
                    <input type="text" class="form-control" id="cnic" name="cnic" placeholder="Enter your CNIC number" value="{{ old('cnic', $mureedain->cnic) }}">
                </div>

                <!-- Date of Birth -->
                <div class="mb-3">
                    <label for="date_of_birth" class="form-label">Date of Birth</label>
                    <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth', $mureedain->date_of_birth) }}">
                </div>

                <!-- City -->
                <div class="mb-3">
                    <label for="city" class="form-label">City</label>
                    <input type="text" class="form-control" id="city" name="city" placeholder="Enter your city" value="{{ old('city', $mureedain->city) }}">
                </div>

                <!-- Street Number -->
                <div class="mb-3">
                    <label for="street" class="form-label">Street#</label>
                    <input type="text" class="form-control" id="street" name="street" placeholder="Enter your street number" value="{{ old('street', $mureedain->street) }}">
                </div>

                <!-- District -->
                <div class="mb-3">
                    <label for="district" class="form-label">District</label>
                    <input type="text" class="form-control" id="district" name="district" placeholder="Enter your district" value="{{ old('district', $mureedain->district) }}">
                </div>

                <!-- Tehsil -->
                <div class="mb-3">
                    <label for="tehsil" class="form-label">Tehsil</label>
                    <input type="text" class="form-control" id="tehsil" name="tehsil" placeholder="Enter your tehsil" value="{{ old('tehsil', $mureedain->tehsil) }}">
                </div>

                <!-- Country -->
                <div class="mb-3">
                    <label for="country" class="form-label">Country</label>
                    <input type="text" class="form-control" id="country" name="country" placeholder="Enter your country" value="{{ old('country', $mureedain->country) }}">
                </div>

                <!-- Province -->
                <div class="mb-3">
                    <label for="province" class="form-label">Province</label>
                    <input type="text" class="form-control" id="province" name="province" placeholder="Enter your province" value="{{ old('province', $mureedain->province) }}">
                </div>

                <!-- Contact (Primary) -->
                <div class="mb-3">
                    <label for="contact_primary" class="form-label">Contact (Primary)</label>
                    <input type="tel" class="form-control" id="contact_primary" name="contact_primary" placeholder="Enter your primary contact number" value="{{ old('contact_primary', $mureedain->contact_primary) }}">
                </div>

                <!-- Contact (Secondary) -->
                <div class="mb-3">
                    <label for="contact_secondary" class="form-label">Contact (Secondary)</label>
                    <input type="tel" class="form-control" id="contact_secondary" name="contact_secondary" placeholder="Enter your secondary contact number" value="{{ old('contact_secondary', $mureedain->contact_secondary) }}">
                </div>

                <!-- Qualification -->
                <div class="mb-3">
                    <label for="qualification" class="form-label">Qualification</label>
                    <input type="text" class="form-control" id="qualification" name="qualification" placeholder="Enter your qualification" value="{{ old('qualification', $mureedain->qualification) }}">
                </div>

                <!-- Blood Group -->
                <div class="mb-3">
                    <label for="blood_group" class="form-label">Blood Group</label>
                    <input type="text" class="form-control" id="blood_group" name="blood_group" placeholder="Enter your blood group" value="{{ old('blood_group', $mureedain->blood_group) }}">
                </div>

                <!-- Job/Business -->
                <div class="mb-3">
                    <label for="job_business" class="form-label">Job/Business</label>
                    <input type="text" class="form-control" id="job_business" name="job_business" placeholder="Enter your job/business" value="{{ old('job_business', $mureedain->job_business) }}">
                </div>

                <!-- Nature of Job/Business -->
                <div class="mb-3">
                    <label for="nature_of_job_business" class="form-label">Nature of Job/Business</label>
                    <textarea class="form-control" id="nature_of_job_business" name="nature_of_job_business" rows="3" placeholder="Describe the nature of your job/business">{{ old('nature_of_job_business', $mureedain->nature_of_job_business) }}</textarea>
                </div>

                <!-- Bayat Date -->
                <div class="mb-3">
                    <label for="bayat_date" class="form-label">Bayat Date</label>
                    <input type="date" class="form-control" id="bayat_date" name="bayat_date" value="{{ old('bayat_date', $mureedain->bayat_date) }}">
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email address" value="{{ old('email', $mureedain->email) }}">
                </div>

                <!-- Working in which department of TDF -->
                <div class="mb-3">
                    <label for="department_tdf" class="form-label">Working in which department of TDF</label>
                    <input type="text" class="form-control" id="department_tdf" name="department_tdf" placeholder="Enter the department you work in" value="{{ old('department_tdf', $mureedain->department_tdf) }}">
                </div>

                <!-- Bayat By -->
                <div class="mb-3">
                    <label for="bayat_by" class="form-label">Bayat By</label>
                    <input type="text" class="form-control" id="bayat_by" name="bayat_by" placeholder="Enter the name of the person who initiated your bayat" value="{{ old('bayat_by', $mureedain->bayat_by) }}">
                </div>

                <!-- Filled By -->
                <div class="mb-3">
                    <label for="filled_by" class="form-label">Filled By</label>
                    <input type="text" class="form-control" id="filled_by" name="filled_by" placeholder="Enter the name of the person who filled this form" value="{{ old('filled_by', $mureedain->filled_by) }}">
                </div>

                <!-- Signature -->
                <div class="signature mb-3">
                    <label for="signature" class="form-label">Signature</label>
                    <input type="text" class="form-control" id="signature" name="signature" placeholder="Sign here (optional)" value="{{ old('signature', $mureedain->signature) }}">
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary w-100">Update</button>
            </div>
        </form>
    </div>
@endsection