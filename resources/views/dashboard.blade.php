<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}" />
    <title>User Profile</title>
</head>

<body>
    <section class="financial-profile">
        <div class="container">
            <!-- header section -->
            <header class="profile-header">
                <h1>Welcome <span style="color: red">{{ $user->firstname }} {{ $user->lastname }}</span></h1>

                <form action="{{ route('user.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn logout-btn">Logout</button>
                </form>
            </header>

            <!-- Main Content -->
            <div class="main-content">
                <!-- Balance Overview -->
                <div class="balance-overview">
                    <h2>Account Balance</h2>
                    <div class="card">
                        <p class="balance"># 12,004.00</p>
                        <p class="bal__refresh">
                            <strong>Last Updated:</strong> Nov 22, 2024
                        </p>
                    </div>
                </div>

                <!-- Profile Details -->

                <div class="profile-details">
                    @if (session('status'))
                        <div class="alert alert-success">{{ session('status') }}</div>
                    @endif

                    <h2>Profile Information</h2>

                    <form class="profile-form" action="{{ route('profile.update') }}" method="POST">
                        @csrf

                        <input type="hidden" name="id" value="{{ $user->id }}">

                        <label for="firstname">First Name</label>
                        <input type="text" id="firstname" name="firstname" value="{{ $user->firstname }}" required />

                        <label for="lastname">Last Name</label>
                        <input type="text" id="lastname" name="lastname" value="{{ $user->lastname }}" required />

                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" value="{{ $user->email }}" required />

                        <label for="phone">Phone</label>
                        <input type="tel" id="phone" name="phone" value="{{ $user->phone }}"
                            placeholder="Enter Phone Number" required />

                        <label for="address">Address</label>
                        <textarea name="address" id="" cols="30" rows="10" placeholder="Enter house address">{{ $user->address }}</textarea>

                        <button type="submit" class="btn save-btn">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
