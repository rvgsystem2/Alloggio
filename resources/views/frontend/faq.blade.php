@extends('components.main')

@section('content')
    @include('components.header')

    <section class="relative w-full h-[300px] md:h-[400px]">
        <!-- Background Image with Parallax Effect -->
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat transition-all duration-700 transform hover:scale-105"
            style="background-image: url('{{ asset('asset/images/slide (3).jpg') }}');">
            <!-- Enhanced Gradient Overlay -->
            <div class="absolute inset-0 bg-gradient-to-b from-black/30 to-black/70"></div>
        </div>
    
        <!-- Centered Content with Improved Animation -->
        <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-4">
            <h1 class="text-white text-5xl md:text-6xl lg:text-7xl font-extrabold tracking-widest drop-shadow-2xl text-opacity-90 animate-fade-in">
                <span class="inline-block hover:scale-105 transition-transform duration-300">F</span>
                <span class="inline-block hover:scale-105 transition-transform duration-300">A</span>
                <span class="inline-block hover:scale-105 transition-transform duration-300">Q</span>
            </h1>
            <p class="text-white text-lg md:text-xl max-w-2xl mt-4 opacity-90 animate-fade-in-up">Find answers to your most common questions</p>
        </div>
    </section>

    <div class="container mx-auto px-4 py-16">
        <div class="flex flex-col items-center mb-12">
            <h2 class="text-4xl md:text-5xl font-bold text-center">Frequently Asked Questions</h2>
            <div class="w-24 h-1 bg-black mt-4"></div>
            <p class="text-gray-600 text-center mt-4 max-w-2xl">Browse through our comprehensive FAQ section to find answers to your questions</p>
        </div>
        
        <!-- FAQ Categories -->
        <div class="flex flex-wrap justify-center gap-4 mb-12">
            <button class="px-6 py-2 rounded-full bg-black text-white font-medium hover:bg-gray-800 transition-all">
                All
            </button>
            <button class="px-6 py-2 rounded-full bg-white border border-gray-300 font-medium hover:border-black transition-all">
                General
            </button>
            <button class="px-6 py-2 rounded-full bg-white border border-gray-300 font-medium hover:border-black transition-all">
                Account
            </button>
            <button class="px-6 py-2 rounded-full bg-white border border-gray-300 font-medium hover:border-black transition-all">
                Writing
            </button>
            <button class="px-6 py-2 rounded-full bg-white border border-gray-300 font-medium hover:border-black transition-all">
                Submission
            </button>
        </div>
        
        <!-- FAQ Accordion -->
        <div class="max-w-4xl mx-auto space-y-6">
            <!-- FAQ Item 1 -->
            <div class="border border-gray-200 rounded-xl overflow-hidden">
                <button class="flex justify-between items-center w-full p-6 text-left bg-white hover:bg-gray-50 transition-colors">
                    <span class="text-xl font-bold">How do I create an account?</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 transform transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="p-6 pt-0 border-t border-gray-200">
                    <p class="text-gray-600">To create an account, click on the "Sign Up" button in the top right corner of the homepage. Fill out the registration form with your name, email address, and create a strong password. After submitting, you'll receive a confirmation email. Click the verification link in the email to activate your account.</p>
                </div>
            </div>
            
            <!-- FAQ Item 2 -->
            <div class="border border-gray-200 rounded-xl overflow-hidden">
                <button class="flex justify-between items-center w-full p-6 text-left bg-white hover:bg-gray-50 transition-colors">
                    <span class="text-xl font-bold">How can I submit my own blog post?</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 transform transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="p-6 pt-0 border-t border-gray-200">
                    <p class="text-gray-600">After creating an account and logging in, navigate to your profile dashboard and click on "Submit New Post." Use our intuitive editor to write your content, add images, format text, and categorize your post. Once submitted, our editorial team will review your post within 3-5 business days. You'll receive a notification when your post is approved and published.</p>
                </div>
            </div>
            
            <!-- FAQ Item 3 -->
            <div class="border border-gray-200 rounded-xl overflow-hidden">
                <button class="flex justify-between items-center w-full p-6 text-left bg-white hover:bg-gray-50 transition-colors">
                    <span class="text-xl font-bold">What file formats are accepted for images?</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 transform transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="p-6 pt-0 border-t border-gray-200">
                    <p class="text-gray-600">We accept JPEG, PNG, and WebP image formats. For optimal display quality, we recommend using images with a minimum resolution of 1200x800 pixels. The maximum file size allowed is 5MB per image. Please ensure that you have the proper rights or permissions to use any images you upload to our platform.</p>
                </div>
            </div>
            
            <!-- FAQ Item 4 -->
            <div class="border border-gray-200 rounded-xl overflow-hidden">
                <button class="flex justify-between items-center w-full p-6 text-left bg-white hover:bg-gray-50 transition-colors">
                    <span class="text-xl font-bold">How do I change my account settings?</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 transform transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="p-6 pt-0 border-t border-gray-200">
                    <p class="text-gray-600">Log in to your account and click on your profile picture in the top-right corner to access the dropdown menu. Select "Account Settings" to modify your profile information, update your password, adjust notification preferences, or manage connected social media accounts. Remember to click "Save Changes" after making any modifications.</p>
                </div>
            </div>
            
            <!-- FAQ Item 5 -->
            <div class="border border-gray-200 rounded-xl overflow-hidden">
                <button class="flex justify-between items-center w-full p-6 text-left bg-white hover:bg-gray-50 transition-colors">
                    <span class="text-xl font-bold">What are the content guidelines for blog submissions?</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 transform transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="p-6 pt-0 border-t border-gray-200">
                    <p class="text-gray-600">We welcome original, well-researched content that adds value to our readers. Articles should be at least 800 words, free from grammatical errors, and properly cited where applicable. We don't accept promotional content, hate speech, or plagiarized material. All submissions must adhere to our community guidelines, which you can find in detail on our "Submission Guidelines" page.</p>
                </div>
            </div>
            
            <!-- FAQ Item 6 -->
            <div class="border border-gray-200 rounded-xl overflow-hidden">
                <button class="flex justify-between items-center w-full p-6 text-left bg-white hover:bg-gray-50 transition-colors">
                    <span class="text-xl font-bold">How do I cancel my newsletter subscription?</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 transform transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="p-6 pt-0 border-t border-gray-200">
                    <p class="text-gray-600">You can unsubscribe from our newsletter at any time by clicking the "Unsubscribe" link at the bottom of any newsletter email you receive from us. Alternatively, you can log in to your account, go to "Notification Settings," and toggle off the newsletter subscription option. Changes will take effect immediately, and you'll receive a confirmation email.</p>
                </div>
            </div>
        </div>
        
        <!-- Load More Button -->
        <div class="flex justify-center mt-12">
            <button class="px-8 py-3 border-2 border-black font-bold hover:bg-black hover:text-white transition-colors duration-300 rounded-full flex items-center">
                Load More Questions
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Still Have Questions Section -->
    <section class="bg-gray-100 py-16">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl font-bold mb-4">Still Have Questions?</h2>
                <p class="text-gray-600 mb-8">If you couldn't find the answer you were looking for, feel free to contact us directly</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#" class="px-8 py-3 bg-black text-white font-bold rounded-full hover:bg-gray-800 transition-colors duration-300 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        Contact Support
                    </a>
                    <a href="#" class="px-8 py-3 border-2 border-black font-bold rounded-full hover:bg-black hover:text-white transition-colors duration-300 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                        </svg>
                        Live Chat
                    </a>
                </div>
            </div>
        </div>
    </section>

    @include('components.footer')
@endsection