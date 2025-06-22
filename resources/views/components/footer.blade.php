<section class="bg-[#eff4f0] pb-8">
    <div class="container2 pt-5 grid grid-cols-3 gap-20 ">
        <div class="space-y-2 ">
            <div class="flex items-center gap-2">
                <img class="h-10" src="{{ asset(Storage::url($company->logo)) }}" alt="">
                <h5>
                    {{ $company->name }}
                </h5>
            </div>
            <div>
                <p>{{ $company->address }}</p>
            </div>
            <div>
                <h5>
                    We are on
                </h5>
                <div>
                    @foreach ($company->socials as $social)
                        <a href="{{ $social->link }}" target="_blank">
                            {!! $social->icon !!}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="space-y-2 ">

        </div>
        <div class="space-y-2">
            <h5>Contacts</h5>
            <div>
                Email: {{$company->email}}
            </div>
            @foreach ($company->company_contacts as $contact)
                @if ($contact->category == "Phone")
                    <div>
                        {{$contact->name}}: {{$contact->number}}
                    </div>
                @elseif ($contact->category == "Whatsapp")
                    <h5>Whatsapp</h5>
                    <div>
                        {{$contact->name}}: {{$contact->number}}
                    </div>
                @elseif ($contact->category == "Viber")
                    <h5>Viber</h5>
                    <div>
                        {{$contact->name}}: {{$contact->number}}
                    </div>
                @endif
            @endforeach
        </div>

    </div>
    <div class="flex justify-center items-center mt-5">
        <p>© 2025 AccouLigent. All rights reserved.</p>
    </div>
</section>
