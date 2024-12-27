@extends('layouts.dashboard_base')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/result-business-plan.css') }}" />
    <style>
        ul li{
            list-style-type:circle
        }
        .styled-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0 10px;
            background-color:var(--backColor-Base-sidebar-base);
            border: 1px solid #afa5c9;
            border-radius: 5px;
        }

        .styled-table th,
        .styled-table td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #afa5c9;
        }

        .styled-table th {
            background-color: var(--backColor-Base-sidebar-base);
            color: var(--Color-Text-sideBar-text-color);
            font-weight: bold;
        }

        .styled-table tbody tr:nth-child(even) {
            background-color: var(--backColor-Base-sidebar-base);
        }

        .styled-table tbody tr:nth-child(odd) {
            background-color: #ddd;
        }
        .dark .styled-table tbody tr:nth-child(odd) {
            background-color: #242435;
        }

        .styled-table td {
            color: var(--Color-Text-sideBar-text-color);
            font-size: 14px;
        }

        .styled-table th {
            font-size: 16px;
            color: var(--Color-Text-sideBar-text-color);
        }

    </style>
@endpush

@section('med_title', 'Make a business plan')

@section('content')


        <div class="box-content">
            @include('parts.med_screen')

            <div class="Genration-content">
                <div class="sm-slidebar">
                    <h2>Sections</h2>
                    <ul class="section-list chat-container">
                        <li class="tab active" data-target="idea-evaluation">
                            Idea Evaluation <i class="fas fa-angle-right"></i>
                        </li>
                        <li class="tab" data-target="business-plan">
                            Business Plan <i class="fas fa-angle-right"></i>
                        </li>
                        <li class="tab" data-target="strategic-plan">
                            Strategic Plan <i class="fas fa-angle-right"></i>
                        </li>
                        <li class="tab" data-target="marketing-strategy">
                            Marketing Strategy <i class="fas fa-angle-right"></i>
                        </li>
                        <li class="tab" data-target="sales-strategy">
                            Sales Strategy <i class="fas fa-angle-right"></i>
                        </li>
                        <li class="tab" data-target="business-model">
                            Business Model Canvas <i class="fas fa-angle-right"></i>
                        </li>
                        <li class="tab" data-target="risk-assessment">
                            Risk Assessment <i class="fas fa-angle-right"></i>
                        </li>
                        <li class="tab" data-target="governance-model">
                            Governance Model <i class="fas fa-angle-right"></i>
                        </li>
                    </ul>

                    <div class="proceed-button">
                        <button class="btn-Presentation">
                            Proceed To Presentation Maker
                        </button>
                    </div>
                </div>

                <div class="box-generate">
                    <!-- شاشة التحميل -->
                    <!-- <div class="loading-screen">
                      <span>Generating Content</span>
                    </div> -->
                    <div id="idea-evaluation" class="contentofbody active">
                        <div class="headOfContent ">
                            <h2>Idea Evaluation</h2>
                        </div>
                        <div class="contentsmall p-3">
                            <div class="paragraph">
                                <div class="titleOfParagraph">
                                    <div>
                                        <li>
                                            Business Idea
                                        </li>
                                        <div class="circle">
                                            <span>9/10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="paragraph-content" id="text-to-edit" contenteditable="false">
                                    Launching a mobile app called "GreenCart" that connects local farmers to urban consumers looking for fresh, organic, and sustainable produce.
                                </div>
                            </div>
                            <div class="paragraph">
                                <div class="titleOfParagraph">
                                    <div>
                                        <li>
                                            Problem Statement
                                        </li>
                                        <div class="circle">
                                            <span>8/10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="paragraph-content" id="text-to-edit" contenteditable="false">
                                    Consumers in urban areas struggle to access fresh, organic produce directly from local farmers. Farmers often lack the platforms or tools to sell their products directly to consumers, leading to wastage and dependence on middlemen.
                                </div>
                            </div>
                            <div class="paragraph">
                                <div class="titleOfParagraph">
                                    <div>
                                        <li>
                                            Market Opportunity
                                        </li>
                                        <div class="circle">
                                            <span>9/10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="paragraph-content" id="text-to-edit" contenteditable="false">
                                    The organic food market is growing at a compound annual growth rate (CAGR) of 10% globally, with increasing demand for transparency in food sourcing. This presents an opportunity to bridge the gap between farmers and consumers through technology.
                                </div>
                            </div>
                            <div class="paragraph">
                                <div class="titleOfParagraph">
                                    <div>
                                        <li>
                                            Unique Value Proposition
                                        </li>
                                        <div class="circle">
                                            <span>10/10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="paragraph-content" id="text-to-edit" contenteditable="false">
                                    GreenCart provides consumers with:
                                    <ul>
                                        <li>Easy access to farm-fresh produce.</li>
                                        <li>Transparency about the origin of their food.</li>
                                        <li>Competitive prices compared to traditional organic stores.</li>
                                    </ul>
                                    For farmers, GreenCart offers:
                                    <ul>
                                        <li>A direct sales channel to urban customers.</li>
                                        <li>Increased profits by eliminating middlemen.</li>
                                        <li>Insights and analytics on consumer preferences.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="paragraph">
                                <div class="titleOfParagraph">
                                    <div>
                                        <li>
                                            Challenges and Risks
                                        </li>
                                        <div class="circle">
                                            <span>7/10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="paragraph-content" id="text-to-edit" contenteditable="false">
                                    <ul>
                                        <li>Convincing farmers to adopt the platform.</li>
                                        <li>Building trust with consumers regarding the quality of produce.</li>
                                        <li>Competition from established grocery delivery platforms.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="paragraph">
                                <div class="titleOfParagraph">
                                    <div>
                                        <li>
                                            Feasibility Analysis
                                        </li>
                                        <div class="circle">
                                            <span>9/10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="paragraph-content" id="text-to-edit" contenteditable="false">
                                    <ul>
                                        <li>Technical Feasibility: With readily available app development technologies, creating an app with features like GPS-based farm mapping, order tracking, and secure payment systems is achievable.</li>
                                        <li>Financial Feasibility: Requires initial investment for app development, marketing, and onboarding farmers. Estimated break-even period: 2 years.</li>
                                        <li>Market Feasibility: A pilot survey conducted in an urban area showed 65% of respondents expressed interest in purchasing fresh produce directly from farmers.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="business-plan" class="contentofbody">
                        <div class="headOfContent">
                            <h2>Business Plan</h2>
                        </div>
                        <div class="contentsmall p-3">
                            <div class="paragraph">
                                <div class="titleOfParagraph">
                                    <div>
                                        <li>
                                            Business Objectives
                                        </li>
                                        <div class="circle">
                                            <span>8/10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="paragraph-content" id="text-to-edit" contenteditable="false">
                                    The business plan for GreenCart outlines the strategy for launching and scaling the mobile app that connects local farmers with urban consumers. The plan includes detailed financial projections, marketing strategies, operational processes, and goals for growth.
                                </div>
                            </div>
                            <div class="paragraph">
                                <div class="titleOfParagraph">
                                    <div>
                                        <li>
                                            Market Research
                                        </li>
                                        <div class="circle">
                                            <span>9/10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="paragraph-content" id="text-to-edit" contenteditable="false">
                                    Extensive market research has been conducted to understand the demand for farm-fresh produce in urban areas, as well as the needs and behaviors of both farmers and consumers. Key findings include:
                                    <ul>
                                        <li>Urban consumers are increasingly looking for healthier, organic food options.</li>
                                        <li>Farmers face challenges in reaching urban markets and often rely on intermediaries, reducing their profit margins.</li>
                                        <li>There is a significant market gap in direct farm-to-consumer platforms, especially those offering organic produce.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="paragraph">
                                <div class="titleOfParagraph">
                                    <div>
                                        <li>
                                            Revenue Model
                                        </li>
                                        <div class="circle">
                                            <span>9/10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="paragraph-content" id="text-to-edit" contenteditable="false">
                                    GreenCart will generate revenue through the following streams:
                                    <ul>
                                        <li><strong>Transaction Fees:</strong> A small fee will be charged on each sale made through the platform, paid by farmers.</li>
                                        <li><strong>Subscription Plans:</strong> Farmers can subscribe to premium plans for enhanced features, such as advanced analytics, priority listings, and more.</li>
                                        <li><strong>Advertising:</strong> GreenCart will allow related businesses (e.g., organic food suppliers, eco-friendly packaging companies) to advertise on the app for a fee.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="paragraph">
                                <div class="titleOfParagraph">
                                    <div>
                                        <li>
                                            Marketing Strategy
                                        </li>
                                        <div class="circle">
                                            <span>8/10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="paragraph-content" id="text-to-edit" contenteditable="false">
                                    The marketing strategy for GreenCart focuses on both farmers and consumers. Key strategies include:
                                    <ul>
                                        <li><strong>Social Media Marketing:</strong> Targeting urban consumers through platforms like Instagram, Facebook, and YouTube with engaging content about farm-fresh produce.</li>
                                        <li><strong>Farmer Partnerships:</strong> Collaborating with local farmers' associations and cooperatives to onboard farmers onto the platform.</li>
                                        <li><strong>Referral Programs:</strong> Offering rewards to users who refer new farmers and customers to the platform.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="paragraph">
                                <div class="titleOfParagraph">
                                    <div>
                                        <li>
                                            Operational Plan
                                        </li>
                                        <div class="circle">
                                            <span>8/10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="paragraph-content" id="text-to-edit" contenteditable="false">
                                    The operational plan for GreenCart includes:
                                    <ul>
                                        <li><strong>App Development:</strong> The initial phase involves the design and development of the GreenCart mobile app, with features like geolocation, secure payment, and order tracking.</li>
                                        <li><strong>Farmer Onboarding:</strong> A team will be responsible for onboarding farmers onto the platform, providing training on how to list their products and manage their accounts.</li>
                                        <li><strong>Customer Support:</strong> A dedicated support team will assist both consumers and farmers with any issues related to orders, payments, or app usage.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="paragraph">
                                <div class="titleOfParagraph">
                                    <div>
                                        <li>
                                            Financial Projections
                                        </li>
                                        <div class="circle">
                                            <span>9/10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="paragraph-content" id="text-to-edit" contenteditable="false">
                                    The financial projections for GreenCart are based on conservative estimates of user acquisition and sales growth:
                                    <ul>
                                        <li><strong>Year 1:</strong> Estimated revenue of $200,000 with 500 farmers onboard and 50,000 active consumers.</li>
                                        <li><strong>Year 2:</strong> Revenue of $600,000 with 1,500 farmers onboard and 150,000 active consumers.</li>
                                        <li><strong>Year 3:</strong> Revenue of $1.5 million with 3,000 farmers onboard and 300,000 active consumers.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="strategic-plan" class="contentofbody">
                        <div class="headOfContent">
                            <h2>Strategic Plan</h2>
                        </div>
                        <div class="contentsmall p-3">
                            <div class="paragraph">
                                <div class="titleOfParagraph">
                                    <div>
                                        <li>
                                            Overview
                                        </li>
                                        <div class="circle">
                                            <span>9/10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="paragraph-content" id="text-to-edit" contenteditable="false">
                                    The strategic plan for GreenCart focuses on long-term growth and sustainability. The plan outlines key initiatives for market penetration, scaling the business, and building a loyal customer base.
                                </div>
                            </div>
                            <div class="paragraph">
                                <div class="titleOfParagraph">
                                    <div>
                                        <li>
                                            Vision for the Future
                                        </li>
                                        <div class="circle">
                                            <span>9/10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="paragraph-content" id="text-to-edit" contenteditable="false">
                                    GreenCart aims to become the leading platform for farm-to-consumer organic produce, empowering farmers and consumers alike by offering a transparent, affordable, and sustainable solution for sourcing fresh food.
                                </div>
                            </div>
                            <div class="paragraph">
                                <div class="titleOfParagraph">
                                    <div>
                                        <li>
                                            Key Strategic Objectives
                                        </li>
                                        <div class="circle">
                                            <span>9/10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="paragraph-content" id="text-to-edit" contenteditable="false">
                                    To achieve this vision, GreenCart has outlined the following key strategic objectives:
                                    <ul>
                                        <li><strong>Market Leadership:</strong> Become the top mobile app for connecting local farmers with urban consumers in the next 3 years.</li>
                                        <li><strong>Farmer Empowerment:</strong> Onboard 5,000 farmers onto the platform by the end of Year 3, providing them with tools to maximize their profits.</li>
                                        <li><strong>Customer Engagement:</strong> Develop a loyal customer base by offering superior service, farm-to-fork transparency, and customer rewards programs.</li>
                                        <li><strong>Scalability:</strong> Expand into new geographic areas within 2 years and diversify into related product categories such as dairy, eggs, and eco-friendly packaging.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="paragraph">
                                <div class="titleOfParagraph">
                                    <div>
                                        <li>
                                            Strategic Initiatives
                                        </li>
                                        <div class="circle">
                                            <span>8/10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="paragraph-content" id="text-to-edit" contenteditable="false">
                                    GreenCart's strategy involves the following initiatives:
                                    <ul>
                                        <li><strong>Brand Awareness Campaigns:</strong> Launch targeted marketing campaigns across social media and traditional channels to raise awareness about the platform and its benefits.</li>
                                        <li><strong>Farmer Onboarding Program:</strong> Build strong partnerships with local farmer cooperatives, agricultural associations, and training programs to ease the onboarding process.</li>
                                        <li><strong>Technology Upgrades:</strong> Continuously enhance the app’s functionality with new features, such as AI-powered recommendations, improved payment systems, and enhanced user experience.</li>
                                        <li><strong>Community Engagement:</strong> Support local communities by sponsoring farmer markets, food education programs, and sustainability initiatives to reinforce GreenCart's commitment to social responsibility.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="paragraph">
                                <div class="titleOfParagraph">
                                    <div>
                                        <li>
                                            Risk Mitigation Strategies
                                        </li>
                                        <div class="circle">
                                            <span>7/10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="paragraph-content" id="text-to-edit" contenteditable="false">
                                    GreenCart recognizes potential risks and has developed the following mitigation strategies:
                                    <ul>
                                        <li><strong>Competition:</strong> Continuously innovate with new features, superior customer service, and targeted marketing to differentiate from competitors.</li>
                                        <li><strong>Farmer Participation:</strong> Provide comprehensive onboarding support, training, and incentives to farmers to ensure their success on the platform.</li>
                                        <li><strong>Economic Volatility:</strong> Diversify revenue streams and maintain flexibility to adjust pricing or operations in response to changes in market conditions.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="paragraph">
                                <div class="titleOfParagraph">
                                    <div>
                                        <li>
                                            Long-term Goals
                                        </li>
                                        <div class="circle">
                                            <span>10/10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="paragraph-content" id="text-to-edit" contenteditable="false">
                                    GreenCart has established long-term goals that will guide the company through its growth and beyond:
                                    <ul>
                                        <li><strong>Global Expansion:</strong> Expand the platform into international markets within 5 years, starting with regions that have high demand for organic food and sustainable practices.</li>
                                        <li><strong>Sustainability Leadership:</strong> Become a leader in promoting sustainable food sourcing by working closely with farmers to implement eco-friendly practices and reduce food waste.</li>
                                        <li><strong>Technological Innovation:</strong> Invest in cutting-edge technologies such as AI, blockchain, and IoT to further improve transparency, traceability, and efficiency within the supply chain.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="marketing-strategy" class="contentofbody">
                        <div class="headOfContent">
                            <h2>Marketing Strategy</h2>
                        </div>
                        <div class="contentsmall p-3">
                            <div class="paragraph">
                                <div class="titleOfParagraph">
                                    <div>
                                        <li>
                                            Overview
                                        </li>
                                        <div class="circle">
                                            <span>9/10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="paragraph-content" id="text-to-edit" contenteditable="false">
                                    The marketing strategy for GreenCart is designed to build brand awareness, drive customer acquisition, and retain loyal users by leveraging a multi-channel approach. The focus is on creating personalized customer experiences, promoting sustainability, and demonstrating the transparency of the supply chain.
                                </div>
                            </div>

                            <div class="paragraph">
                                <div class="titleOfParagraph">
                                    <div>
                                        <li>
                                            Target Audience
                                        </li>
                                        <div class="circle">
                                            <span>10/10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="paragraph-content" id="text-to-edit" contenteditable="false">
                                    GreenCart’s target audience includes:
                                    <ul>
                                        <li><strong>Health-conscious consumers:</strong> Individuals who prefer fresh, organic produce and care about food sustainability.</li>
                                        <li><strong>Environmentally conscious individuals:</strong> Consumers who prioritize reducing their carbon footprint and supporting eco-friendly businesses.</li>
                                        <li><strong>Urban families:</strong> People living in cities who desire the convenience of ordering fresh food online with direct access to local farmers.</li>
                                        <li><strong>Farmers and local food producers:</strong> Small and medium-scale farmers looking for a platform to sell directly to consumers and expand their market reach.</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="paragraph">
                                <div class="titleOfParagraph">
                                    <div>
                                        <li>
                                            Marketing Channels
                                        </li>
                                        <div class="circle">
                                            <span>8/10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="paragraph-content" id="text-to-edit" contenteditable="false">
                                    The marketing strategy utilizes the following key channels:
                                    <ul>
                                        <li><strong>Social Media Marketing:</strong> Leverage platforms like Instagram, Facebook, and Twitter to engage with the audience, showcase local produce, share customer testimonials, and create a community around sustainability.</li>
                                        <li><strong>Influencer Partnerships:</strong> Collaborate with health and sustainability influencers to promote the benefits of farm-to-table solutions and drive organic traffic.</li>
                                        <li><strong>Content Marketing:</strong> Create educational content such as blog posts, videos, and infographics that highlight the importance of supporting local farmers and eating organic.</li>
                                        <li><strong>Email Campaigns:</strong> Send personalized newsletters to customers about new products, special offers, and seasonal discounts to encourage repeat purchases.</li>
                                        <li><strong>SEO & SEM:</strong> Optimize the website and app for search engines to ensure GreenCart ranks highly for relevant search terms related to organic produce and farm-to-consumer food.</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="paragraph">
                                <div class="titleOfParagraph">
                                    <div>
                                        <li>
                                            Customer Acquisition Strategy
                                        </li>
                                        <div class="circle">
                                            <span>9/10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="paragraph-content" id="text-to-edit" contenteditable="false">
                                    To acquire new customers, GreenCart will implement a mix of digital and offline strategies:
                                    <ul>
                                        <li><strong>Referral Program:</strong> Offer existing customers incentives such as discounts or loyalty points for referring new customers to the platform.</li>
                                        <li><strong>Targeted Ads:</strong> Run paid advertising campaigns on social media and Google Ads, targeting health-conscious and eco-friendly consumers in urban areas.</li>
                                        <li><strong>Partnerships:</strong> Establish partnerships with local businesses, organic grocery stores, and farmer markets to cross-promote GreenCart’s services.</li>
                                        <li><strong>Free Trials and Discounts:</strong> Offer discounts on first-time purchases to entice new customers to try out GreenCart’s services.</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="paragraph">
                                <div class="titleOfParagraph">
                                    <div>
                                        <li>
                                            Customer Retention Strategy
                                        </li>
                                        <div class="circle">
                                            <span>9/10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="paragraph-content" id="text-to-edit" contenteditable="false">
                                    Retaining customers is crucial for long-term success. GreenCart will focus on the following strategies:
                                    <ul>
                                        <li><strong>Loyalty Program:</strong> Introduce a rewards program where customers earn points with every purchase, which can be redeemed for discounts or exclusive offers.</li>
                                        <li><strong>Personalized Recommendations:</strong> Use data and AI algorithms to recommend products based on customers’ previous orders, preferences, and seasonal trends.</li>
                                        <li><strong>Subscription Plans:</strong> Offer subscription options for weekly or monthly deliveries of fresh produce at a discounted rate, ensuring regular sales and building customer loyalty.</li>
                                        <li><strong>Customer Support:</strong> Provide excellent customer service via live chat, email, and phone support to resolve any issues and ensure customer satisfaction.</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="paragraph">
                                <div class="titleOfParagraph">
                                    <div>
                                        <li>
                                            Budget and Financial Projections
                                        </li>
                                        <div class="circle">
                                            <span>8/10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="paragraph-content" id="text-to-edit" contenteditable="false">
                                    GreenCart has allocated a portion of its funding for marketing efforts, which will be distributed across different channels to maximize reach and engagement. The marketing budget for the first year is expected to be $100,000, which will cover:
                                    <table class="styled-table">
                                        <thead>
                                        <tr>
                                            <th>Marketing Channel</th>
                                            <th>Budget Allocation</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Social Media Ads</td>
                                            <td>$40,000</td>
                                        </tr>
                                        <tr>
                                            <td>Influencer Partnerships</td>
                                            <td>$15,000</td>
                                        </tr>
                                        <tr>
                                            <td>Content Creation</td>
                                            <td>$10,000</td>
                                        </tr>
                                        <tr>
                                            <td>Email Campaigns</td>
                                            <td>$5,000</td>
                                        </tr>
                                        <tr>
                                            <td>Referral and Loyalty Programs</td>
                                            <td>$10,000</td>
                                        </tr>
                                        <tr>
                                            <td>SEO & SEM</td>
                                            <td>$10,000</td>
                                        </tr>
                                        <tr>
                                            <td>Offline Events and Partnerships</td>
                                            <td>$10,000</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    The financial projections for the marketing efforts suggest an expected ROI of 20% within the first year of operations, with a growth of 30% in the following years.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="sales-strategy" class="contentofbody">
                        <div class="headOfContent">
                            <h2>Sales Strategy</h2>
                        </div>
                        <div class="contentsmall p-3">
                            <div class="paragraph">
                                <div class="titleOfParagraph">
                                    <div>
                                        <li>
                                            Overview
                                        </li>
                                        <div class="circle">
                                            <span>8/10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="paragraph-content" id="text-to-edit" contenteditable="false">
                                    GreenCart's sales strategy focuses on leveraging both online and offline channels to increase its customer base and achieve its revenue targets. The strategy is based on building strong relationships with customers through personalized services, competitive pricing, and customer loyalty programs.
                                </div>
                                <div class="paragraph-content">
                                    <ul>
                                        <li>Develop a robust online platform for easy access to product listings and order placement.</li>
                                        <li>Offer promotions and discounts to attract new customers and retain existing ones.</li>
                                        <li>Utilize referral programs to encourage word-of-mouth marketing.</li>
                                        <li>Implement partnerships with local farms and vendors to ensure fresh produce availability and exclusivity.</li>
                                        <li>Focus on building a strong social media presence to increase brand visibility and engage with customers directly.</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="paragraph">
                                <div class="titleOfParagraph">
                                    <div>
                                        <li>
                                            Building Strong Customer Relationships
                                        </li>
                                        <div class="circle">
                                            <span>9/10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="paragraph-content" id="text-to-edit" contenteditable="false">
                                    One of the key elements of GreenCart's sales strategy is building and maintaining strong relationships with customers. By offering excellent customer service and personalized recommendations based on their preferences and shopping history, GreenCart aims to foster loyalty and repeat business.
                                </div>
                                <div class="paragraph-content">
                                    <ul>
                                        <li>Develop a customer support team trained to address concerns quickly and efficiently.</li>
                                        <li>Implement a loyalty program offering discounts and rewards to returning customers.</li>
                                        <li>Send personalized follow-up emails after purchases, offering related products or discounts.</li>
                                        <li>Encourage customer feedback and use it to improve services and product offerings.</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="paragraph">
                                <div class="titleOfParagraph">
                                    <div>
                                        <li>
                                            Expansion Through Strategic Partnerships
                                        </li>
                                        <div class="circle">
                                            <span>8/10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="paragraph-content" id="text-to-edit" contenteditable="false">
                                    GreenCart plans to expand its market reach through strategic partnerships with local farms, food producers, and other complementary businesses. These partnerships will allow GreenCart to offer exclusive products, enhance its credibility, and improve access to new markets.
                                </div>
                                <div class="paragraph-content">
                                    <ul>
                                        <li>Collaborate with local farmers to offer organic produce and exclusive items.</li>
                                        <li>Partner with food delivery platforms to expand the delivery options for customers.</li>
                                        <li>Offer co-branded marketing campaigns with partners to reach a wider audience.</li>
                                        <li>Engage with eco-conscious brands and businesses to strengthen the brand’s green credentials.</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="paragraph">
                                <div class="titleOfParagraph">
                                    <div>
                                        <li>
                                            Sales Forecasting and Goals
                                        </li>
                                        <div class="circle">
                                            <span>7/10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="paragraph-content" id="text-to-edit" contenteditable="false">
                                    In order to achieve its revenue targets, GreenCart will rely on sales forecasting to project potential growth and identify areas for improvement. This will involve analyzing past sales data, tracking customer trends, and setting measurable goals to guide the team’s efforts.
                                </div>
                                <div class="paragraph-content">
                                    <ul>
                                        <li>Monitor sales data on a monthly and quarterly basis to adjust marketing and sales strategies.</li>
                                        <li>Set clear sales targets for each product category and individual sales representatives.</li>
                                        <li>Use CRM software to track sales leads and customer interactions for better targeting.</li>
                                        <li>Regularly review and refine pricing strategies to remain competitive in the market.</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="paragraph">
                                <div class="titleOfParagraph">
                                    <div>
                                        <li>
                                            Online Sales Growth
                                        </li>
                                        <div class="circle">
                                            <span>8/10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="paragraph-content" id="text-to-edit" contenteditable="false">
                                    GreenCart will focus heavily on online sales growth as a primary channel. The strategy will include improving the website's user experience, offering incentives for online purchases, and ensuring a seamless shopping experience with fast delivery options.
                                </div>
                                <div class="paragraph-content">
                                    <ul>
                                        <li>Revamp the website to improve navigation and streamline the checkout process.</li>
                                        <li>Offer time-sensitive discounts and free shipping for online orders.</li>
                                        <li>Implement an online referral program that rewards customers for bringing in new shoppers.</li>
                                        <li>Optimize the website for mobile devices to increase accessibility and sales conversions.</li>
                                    </ul>
                                </div>
                            </div>

                     {{--                            <div class="paragraph">--}}
                                       {{--                                <div class="titleOfParagraph">--}}
             {{--                                    <div>--}}
                                  {{--                                        <li>--}}
                                       {{--                                            Sales Performance Visualization--}}
                                          {{--                                        </li>--}}
                                                      {{--                                        <div class="circle">--}}
                            { {--                                            <span>9/10</span>--}}
                                         {{--                                        </div>--}}
                                       {{--                                    </div>--}}
                                     {{--                                </div>--}}
                                           {{--                                <div class="paragraph-content">--}}
                                        {{--                                    <canvas id="chartPie" width="400" height="400"></canvas>--}}
                                {{--                                </div>--}}
                                                       {{--                            </div>--}}

                        </div>
                    </div>
                    <div id="business-model" class="contentofbody ">
                        <div class="headOfContent">
                            <h2>Business Model</h2>
                        </div>
                        <div class="contentsmall p-3">
                            <div class="paragraph">
                                <div class="titleOfParagraph">
                                    <div>
                                        <li>
                                            Business Model Canvas
                                        </li>
                                        <div class="circle">
                                            <span>9/10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="paragraph-content" id="text-to-edit" contenteditable="false">
                                    The Business Model Canvas is a strategic tool used to outline and visualize the key elements of a business model. It provides a comprehensive view of how a company operates, generates revenue, and delivers value to customers. Below is the Business Model Canvas for GreenCart, which focuses on creating a sustainable business while delivering fresh, organic produce to customers.
                                </div>
                            </div>

                            <div class="paragraph">
                                <div class="titleOfParagraph">
                                    <div>
                                        <li>
                                            Key Partners
                                        </li>
                                        <div class="circle">
                                            <span>9/10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="paragraph-content" id="text-to-edit" contenteditable="false">
                                    GreenCart collaborates with various key partners to ensure a steady supply of fresh, organic produce and enhance service delivery. These partnerships will help us scale and reach our customers more effectively.
                                </div>
                                <div class="paragraph-content">
                                    <ul>
                                        <li>Local organic farmers and producers</li>
                                        <li>Food delivery platforms</li>
                                        <li>Packaging and logistics companies</li>
                                        <li>Marketing and advertising partners</li>
                                        <li>Technology and website development partners</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="paragraph">
                                <div class="titleOfParagraph">
                                    <div>
                                        <li>
                                            Key Activities
                                        </li>
                                        <div class="circle">
                                            <span>8/10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="paragraph-content" id="text-to-edit" contenteditable="false">
                                    GreenCart’s key activities are centered around sourcing fresh produce, managing customer relationships, and ensuring timely delivery. Our focus is on providing the best quality products and exceptional service to our customers.
                                </div>
                                <div class="paragraph-content">
                                    <ul>
                                        <li>Sourcing and quality control of organic products</li>
                                        <li>Managing e-commerce website and customer orders</li>
                                        <li>Developing marketing strategies and promotions</li>
                                        <li>Coordinating with partners for delivery and logistics</li>
                                        <li>Maintaining inventory and managing suppliers</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="paragraph">
                                <div class="titleOfParagraph">
                                    <div>
                                        <li>
                                            Key Resources
                                        </li>
                                        <div class="circle">
                                            <span>9/10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="paragraph-content" id="text-to-edit" contenteditable="false">
                                    The key resources for GreenCart include human, financial, physical, and intellectual assets that will enable us to offer a seamless and effective service.
                                </div>
                                <div class="paragraph-content">
                                    <ul>
                                        <li>Experienced team in e-commerce, logistics, and customer service</li>
                                        <li>Investment for scaling and operational costs</li>
                                        <li>Warehouse and storage facilities for organic produce</li>
                                        <li>Technological infrastructure (website, app, CRM system)</li>
                                        <li>Brand reputation and customer trust</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="paragraph">
                                <div class="titleOfParagraph">
                                    <div>
                                        <li>
                                            Value Propositions
                                        </li>
                                        <div class="circle">
                                            <span>10/10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="paragraph-content" id="text-to-edit" contenteditable="false">
                                    GreenCart provides customers with fresh, organic produce directly from local farms at competitive prices. Our focus is on delivering high-quality products with exceptional customer service, making it easy for customers to access healthy food options conveniently.
                                </div>
                                <div class="paragraph-content">
                                    <ul>
                                        <li>Access to farm-fresh, organic produce</li>
                                        <li>Competitive pricing compared to traditional organic stores</li>
                                        <li>Convenient delivery directly to customers' doors</li>
                                        <li>Transparent sourcing and product origin</li>
                                        <li>Strong customer service with personalized support</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="paragraph">
                                <div class="titleOfParagraph">
                                    <div>
                                        <li>
                                            Customer Segments
                                        </li>
                                        <div class="circle">
                                            <span>8/10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="paragraph-content" id="text-to-edit" contenteditable="false">
                                    GreenCart targets health-conscious consumers, families, and eco-conscious individuals who prefer purchasing organic produce. We focus on building relationships with customers who value transparency, convenience, and sustainability.
                                </div>
                                <div class="paragraph-content">
                                    <ul>
                                        <li>Health-conscious individuals and families</li>
                                        <li>Environmentally-conscious consumers</li>
                                        <li>Busy professionals seeking convenience</li>
                                        <li>Organic food enthusiasts</li>
                                        <li>Local communities with a preference for locally sourced produce</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="paragraph">
                                <div class="titleOfParagraph">
                                    <div>
                                        <li>
                                            Channels
                                        </li>
                                        <div class="circle">
                                            <span>9/10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="paragraph-content" id="text-to-edit" contenteditable="false">
                                    GreenCart utilizes a multi-channel approach to reach customers, ensuring accessibility and convenience. We operate primarily through an e-commerce platform and explore additional marketing channels to expand our reach.
                                </div>
                                <div class="paragraph-content">
                                    <ul>
                                        <li>Website and mobile app for online orders</li>
                                        <li>Social media platforms (Instagram, Facebook, Twitter)</li>
                                        <li>Email marketing campaigns</li>
                                        <li>Collaborations with delivery services</li>
                                        <li>Partner websites and organic food-related blogs</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="paragraph">
                                <div class="titleOfParagraph">
                                    <div>
                                        <li>
                                            Customer Relationships
                                        </li>
                                        <div class="circle">
                                            <span>9/10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="paragraph-content" id="text-to-edit" contenteditable="false">
                                    GreenCart's customer relationship strategy revolves around providing exceptional customer service, fostering trust, and creating a personalized shopping experience that keeps customers coming back.
                                </div>
                                <div class="paragraph-content">
                                    <ul>
                                        <li>Personalized product recommendations based on shopping behavior</li>
                                        <li>Loyalty programs for repeat customers</li>
                                        <li>24/7 customer support through live chat, email, and phone</li>
                                        <li>Follow-up emails and surveys to ensure customer satisfaction</li>
                                        <li>Engagement through social media and community events</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="paragraph">
                                <div class="titleOfParagraph">
                                    <div>
                                        <li>
                                            Cost Structure
                                        </li>
                                        <div class="circle">
                                            <span>8/10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="paragraph-content" id="text-to-edit" contenteditable="false">
                                    GreenCart’s cost structure includes the costs associated with sourcing organic products, maintaining the online platform, delivery logistics, and marketing efforts. Managing these costs effectively is key to the company’s profitability.
                                </div>
                                <div class="paragraph-content">
                                    <ul>
                                        <li>Costs of sourcing and purchasing organic products</li>
                                        <li>Technology and website development costs</li>
                                        <li>Logistics and delivery costs</li>
                                        <li>Marketing and advertising expenses</li>
                                        <li>Employee salaries and operational costs</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="paragraph">
                                <div class="titleOfParagraph">
                                    <div>
                                        <li>
                                            Revenue Streams
                                        </li>
                                        <div class="circle">
                                            <span>9/10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="paragraph-content" id="text-to-edit" contenteditable="false">
                                    GreenCart’s revenue is generated from product sales, subscription services, and additional services such as delivery charges and premium memberships. The model is designed to ensure a sustainable and scalable income stream.
                                </div>
                                <div class="paragraph-content">
                                    <ul>
                                        <li>Revenue from product sales (fresh produce)</li>
                                        <li>Subscription fees for regular deliveries</li>
                                        <li>Premium membership fees for exclusive discounts</li>
                                        <li>Delivery charges for certain locations</li>
                                        <li>Revenue from affiliate marketing and partnerships</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Insert Table for a quick overview of the Business Model -->
                            <table class="styled-table">
                                <thead>
                                <tr>
                                    <th>Key Element</th>
                                    <th>Description</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Key Partners</td>
                                    <td>Local organic farms, delivery platforms, tech partners</td>
                                </tr>
                                <tr>
                                    <td>Key Activities</td>
                                    <td>Sourcing, managing e-commerce, delivery coordination</td>
                                </tr>
                                <tr>
                                    <td>Key Resources</td>
                                    <td>Team, investment, facilities, technology, brand reputation</td>
                                </tr>
                                <tr>
                                    <td>Value Propositions</td>
                                    <td>Fresh organic produce, competitive pricing, transparency</td>
                                </tr>
                                <tr>
                                    <td>Customer Segments</td>
                                    <td>Health-conscious, environmentally aware individuals</td>
                                </tr>
                                <tr>
                                    <td>Channels</td>
                                    <td>Website, app, social media, email marketing</td>
                                </tr>
                                <tr>
                                    <td>Customer Relationships</td>
                                    <td>Personalized support, loyalty programs, social engagement</td>
                                </tr>
                                <tr>
                                    <td>Cost Structure</td>
                                    <td>Product sourcing, technology, logistics, salaries</td>
                                </tr>
                                <tr>
                                    <td>Revenue Streams</td>
                                    <td>Product sales, subscription fees, delivery charges</td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>

                    <div id="risk-assessment" class="contentofbody ">
                        <div class="headOfContent">
                            <h2>Risk Assessment</h2>
                        </div>
                        <div class="contentsmall p-3">
                            <div class="paragraph">
                                <div class="titleOfParagraph">
                                    <div>
                                        <li>
                                            Risk Assessment
                                        </li>
                                        <div class="circle">
                                            <span>8/10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="paragraph-content" id="text-to-edit" contenteditable="false">
                                    Risk assessment is an essential component of GreenCart’s strategic planning. By identifying potential risks, we are able to take proactive measures to minimize negative impacts. The primary risks we face include market volatility, supply chain disruptions, regulatory changes, and competition.
                                </div>
                            </div>

                            <div class="paragraph">
                                <div class="titleOfParagraph">
                                    <div>
                                        <li>
                                            Key Risks
                                        </li>
                                        <div class="circle">
                                            <span>9/10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="paragraph-content" id="text-to-edit" contenteditable="false">
                                    GreenCart has identified several key risks that could potentially impact the business operations. These risks need to be carefully managed to maintain the sustainability and profitability of the company.
                                </div>
                                <div class="paragraph-content">
                                    <ul>
                                        <li><strong>Supply Chain Disruptions:</strong> Any disruptions in the supply of organic produce from our partners could lead to stock shortages and delayed deliveries.</li>
                                        <li><strong>Market Volatility:</strong> Fluctuations in the prices of organic products or changes in consumer demand can affect profitability.</li>
                                        <li><strong>Regulatory Changes:</strong> Changes in regulations around food safety, organic certification, and delivery logistics may require operational adjustments.</li>
                                        <li><strong>Competition:</strong> The rise of new competitors in the organic food delivery market could challenge our market share and pricing strategy.</li>
                                        <li><strong>Technological Failures:</strong> A failure in the e-commerce platform or delivery tracking system could disrupt customer experience and sales.</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="paragraph">
                                <div class="titleOfParagraph">
                                    <div>
                                        <li>
                                            Risk Mitigation Strategies
                                        </li>
                                        <div class="circle">
                                            <span>9/10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="paragraph-content" id="text-to-edit" contenteditable="false">
                                    GreenCart has developed risk mitigation strategies for each identified risk to ensure the business remains stable and can continue to grow even in the face of challenges.
                                </div>
                                <div class="paragraph-content">
                                    <ul>
                                        <li><strong>Supply Chain Diversification:</strong> Partnering with multiple local farmers and suppliers will ensure a steady supply of organic produce, minimizing the impact of disruptions.</li>
                                        <li><strong>Dynamic Pricing Strategy:</strong> Monitoring market trends and adjusting pricing models will help GreenCart maintain competitive pricing while managing profit margins.</li>
                                        <li><strong>Regulatory Compliance:</strong> Staying updated with local and international regulations and ensuring compliance with food safety and delivery standards will prevent legal issues.</li>
                                        <li><strong>Competitive Analysis:</strong> Continuous analysis of competitors will help GreenCart differentiate itself through value-added services such as premium memberships, faster delivery, and better customer service.</li>
                                        <li><strong>Technology Investment:</strong> Investing in reliable technology, including secure payment gateways, delivery tracking systems, and website maintenance, will minimize the risk of technological failures.</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="paragraph">
                                <div class="titleOfParagraph">
                                    <div>
                                        <li>
                                            Risk Monitoring and Review
                                        </li>
                                        <div class="circle">
                                            <span>8/10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="paragraph-content" id="text-to-edit" contenteditable="false">
                                    Regular monitoring and review of risk factors are essential for effective risk management. GreenCart will implement a system to track potential risks and assess the effectiveness of mitigation measures. This will allow for adjustments and improvements as necessary.
                                </div>
                                <div class="paragraph-content">
                                    <ul>
                                        <li><strong>Quarterly Risk Assessment Reviews:</strong> A team will conduct reviews every quarter to assess whether the risks have changed or evolved.</li>
                                        <li><strong>Customer Feedback:</strong> Regularly collecting and analyzing customer feedback will help identify service or operational issues that may pose risks.</li>
                                        <li><strong>Supplier Performance Monitoring:</strong> Performance metrics will be set for suppliers, and continuous monitoring will ensure they meet quality standards and delivery timelines.</li>
                                        <li><strong>Technology Audits:</strong> Frequent audits of our technology infrastructure will ensure that potential system failures or security issues are identified and resolved before they disrupt operations.</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="paragraph">
                                <div class="titleOfParagraph">
                                    <div>
                                        <li>
                                            Conclusion
                                        </li>
                                        <div class="circle">
                                            <span>9/10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="paragraph-content" id="text-to-edit" contenteditable="false">
                                    Risk assessment and management are crucial for ensuring GreenCart’s long-term success. By identifying risks early and implementing effective mitigation strategies, GreenCart can navigate challenges and continue to grow in the competitive organic food market.
                                </div>
                            </div>

                        </div>
                    </div>
                    <div id="governance-model" class="contentofbody ">
                        <div class="headOfContent">
                            <h2>Governance Model</h2>
                        </div>
                        <div class="contentsmall p-3">
                            <div class="paragraph">
                                <div class="titleOfParagraph">
                                    <div>
                                        <li>
                                            Governance Model
                                        </li>
                                        <div class="circle">
                                            <span>9/10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="paragraph-content" id="text-to-edit" contenteditable="false">
                                    The governance model of GreenCart ensures transparency, accountability, and efficient decision-making. The company follows a hierarchical structure where strategic decisions are made by the executive team and board, while day-to-day operations are managed by the management team. This model supports the alignment of the company's goals with the interests of its stakeholders, including investors, employees, and customers.
                                </div>
                            </div>

                            <div class="paragraph">
                                <div class="titleOfParagraph">
                                    <div>
                                        <li>
                                            Board of Directors
                                        </li>
                                        <div class="circle">
                                            <span>9/10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="paragraph-content" id="text-to-edit" contenteditable="false">
                                    The Board of Directors plays a crucial role in overseeing GreenCart’s strategic direction and ensuring that the company meets its objectives. The board consists of experienced professionals with backgrounds in business, technology, and sustainability. They provide guidance, approve major decisions, and ensure the business complies with legal and regulatory requirements.
                                </div>
                            </div>

                            <div class="paragraph">
                                <div class="titleOfParagraph">
                                    <div>
                                        <li>
                                            Executive Team
                                        </li>
                                        <div class="circle">
                                            <span>9/10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="paragraph-content" id="text-to-edit" contenteditable="false">
                                    The executive team is responsible for the day-to-day management of the company. The team includes roles such as CEO, CFO, CTO, and other key leaders. They execute the board’s strategies, manage operations, and make decisions that affect the daily running of the business. The executive team also ensures that the company remains aligned with its long-term vision and growth objectives.
                                </div>
                            </div>

                            <div class="paragraph">
                                <div class="titleOfParagraph">
                                    <div>
                                        <li>
                                            Management Team
                                        </li>
                                        <div class="circle">
                                            <span>8/10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="paragraph-content" id="text-to-edit" contenteditable="false">
                                    The management team is composed of department heads who oversee specific business areas, such as operations, marketing, sales, and customer support. They are responsible for implementing policies and procedures, managing teams, and ensuring that departmental goals are met in line with the company’s broader objectives.
                                </div>
                            </div>

                            <div class="paragraph">
                                <div class="titleOfParagraph">
                                    <div>
                                        <li>
                                            Roles and Responsibilities
                                        </li>
                                        <div class="circle">
                                            <span>9/10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="paragraph-content" id="text-to-edit" contenteditable="false">
                                    Clear delineation of roles and responsibilities ensures accountability and improves decision-making efficiency within GreenCart. Each team member, from the board to the management level, has well-defined duties and areas of responsibility to contribute to the overall success of the business.
                                </div>
                                <div class="paragraph-content">
                                    <ul>
                                        <li><strong>Board of Directors:</strong> Provides oversight and strategic direction, approves key decisions, and ensures compliance with laws and regulations.</li>
                                        <li><strong>CEO:</strong> Responsible for overall leadership and direction, implements board decisions, and manages executive team.</li>
                                        <li><strong>CFO:</strong> Manages the company’s finances, oversees accounting, budgeting, and ensures financial transparency.</li>
                                        <li><strong>CTO:</strong> Oversees the technology infrastructure, manages the tech team, and ensures the platform operates efficiently.</li>
                                        <li><strong>Department Heads:</strong> Manage day-to-day operations in their respective areas, ensuring objectives and key results are met.</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="paragraph">
                                <div class="titleOfParagraph">
                                    <div>
                                        <li>
                                            Communication and Decision-Making Processes
                                        </li>
                                        <div class="circle">
                                            <span>9/10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="paragraph-content" id="text-to-edit" contenteditable="false">
                                    Effective communication is central to GreenCart’s governance model. Regular meetings between the board, executive team, and management ensure transparency and timely decision-making. The company uses a combination of digital tools and regular in-person meetings to keep all members informed and aligned with business objectives.
                                </div>
                            </div>

                            <div class="paragraph">
                                <div class="titleOfParagraph">
                                    <div>
                                        <li>
                                            Accountability and Reporting
                                        </li>
                                        <div class="circle">
                                            <span>8/10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="paragraph-content" id="text-to-edit" contenteditable="false">
                                    GreenCart maintains high standards of accountability through regular reporting. The management team is required to submit detailed performance reports, financial statements, and progress updates. These reports are reviewed by the board to ensure goals are being met and that the business is operating in a sustainable manner.
                                </div>
                            </div>

                            <div class="paragraph">
                                <div class="titleOfParagraph">
                                    <div>
                                        <li>
                                            Conclusion
                                        </li>
                                        <div class="circle">
                                            <span>9/10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="paragraph-content" id="text-to-edit" contenteditable="false">
                                    The governance model at GreenCart ensures that the company operates efficiently and effectively, with clear roles, responsibilities, and communication channels. This structure supports the company’s growth, innovation, and accountability, and allows GreenCart to remain agile in a competitive market.
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="overlay-history"></div>
                </div>
            </div>
        </div>


@endsection
@push('scripts')
    <script src="{{ asset('assets/js/dashboard/business_plan-part2.js') }}"></script>

@endpush
