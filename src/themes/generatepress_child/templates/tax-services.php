<?php
/**
 * Template Name: Tax Services Page
 * 
 * @package GeneratePress Child
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        
        <!-- Hero Section -->
        <section class="onfield-tax-hero full-width-section" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sections/tax-services-bg.webp');">
            <div class="grid-container">
                <div class="hero-content">
                    <h1 class="hero-title">
                        <span class="hero-title-top">세무 걱정 끝,</span><br>
                        <span class="hero-title-bottom"><span class="accent-text">온필드</span>가 해결합니다</span>
                    </h1>
                    <p class="hero-subtitle">15년 경력 전문가가 직접 챙기는 안전한 세무관리</p>
                    <a href="/request-consult" class="hero-cta-button">무료 상담 신청하기</a>
                </div>
            </div>
        </section>

        <!-- Intro Section -->
        <section class="onfield-tax-intro-section full-width-section bg-white">
            <div class="grid-container">
                <p class="intro-text">
                    온필드만의 <span class="accent-color">전문 세무 서비스</span>로<br>
                    세무 부담은 줄이고, 절세 혜택까지 꼼꼼히 챙겨 드려요
                </p>
            </div>
        </section>

        <!-- Stats Section -->
        <section class="onfield-tax-stats-section full-width-section bg-light-gray">
            <div class="grid-container">
                <h2 class="section-title">온필드만의 전문 세무 서비스</h2>
                <p class="section-subtitle">검증된 실적으로 증명하는 전문성</p>
                <p class="section-description">온필드는 단순한 세무 처리를 넘어 기업의 성장과 재무 안정성을 위한 진정한 세무 파트너입니다.</p>
                
                <div class="stats-grid">
                    <div class="stat-item">
                        <div class="stat-number" data-target="15">0</div>
                        <div class="stat-label">년</div>
                        <div class="stat-description">전문가 경력</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number" data-target="200">0</div>
                        <div class="stat-label">+</div>
                        <div class="stat-description">고객사 수</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number" data-target="2500">0</div>
                        <div class="stat-label">만원</div>
                        <div class="stat-description">평균 절세액</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number" data-target="98">0</div>
                        <div class="stat-label">%</div>
                        <div class="stat-description">고객 만족도</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section class="onfield-tax-services-section full-width-section bg-white">
            <div class="grid-container">
                <h2 class="section-title"><span class="text-wrapper">온필드</span> <span class="accent-color">6대 핵심 서비스</span></h2>
                <p class="section-subtitle">전문 분야별 맞춤 솔루션으로 모든 세무 니즈 해결</p>
                
                <div class="services-grid">
                    <!-- Service Card 1 -->
                    <div class="service-card">
                        <h3 class="service-title">세무 기장<br><span class="service-subtitle">정확하고 안전한 장부 관리</span></h3>
                        <p class="service-description">월 15만원부터 시작하는 전문 기장</p>
                        <ul class="service-features">
                            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/solid-circled-check.svg" alt="체크" class="check-icon">개인/법인사업자 맞춤 기장</li>
                            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/solid-circled-check.svg" alt="체크" class="check-icon">실시간 재무 현황 공유</li>
                            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/solid-circled-check.svg" alt="체크" class="check-icon">세무조사 걱정 ZERO</li>
                        </ul>
                    </div>
                    
                    <!-- Service Card 2 -->
                    <div class="service-card">
                        <h3 class="service-title">세무 컨설팅<br><span class="service-subtitle">연간 2,500만원 평균 절세</span></h3>
                        <p class="service-description">합법적 절세 전략으로 세무 부담 최소화</p>
                        <ul class="service-features">
                            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/solid-circled-check.svg" alt="체크" class="check-icon">법인세/소득세/양도소득세 통합 절세</li>
                            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/solid-circled-check.svg" alt="체크" class="check-icon">평균 절세율 35%, 투자 회수 3개월</li>
                            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/solid-circled-check.svg" alt="체크" class="check-icon">R&D 세액공제 성공률 95%</li>
                        </ul>
                    </div>
                    
                    <!-- Service Card 3 -->
                    <div class="service-card">
                        <h3 class="service-title">세무조사 대응<br><span class="service-subtitle">24시간 긴급 대응 시스템</span></h3>
                        <p class="service-description">전문가 직접 동행하는 안전한 대응</p>
                        <ul class="service-features">
                            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/solid-circled-check.svg" alt="체크" class="check-icon">사전 준비부터 현장 동행까지</li>
                            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/solid-circled-check.svg" alt="체크" class="check-icon">의견서 작성, 사후 대응 전략</li>
                            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/solid-circled-check.svg" alt="체크" class="check-icon">세무조사 대응률 100%</li>
                        </ul>
                    </div>
                    
                    <!-- Service Card 4 -->
                    <div class="service-card">
                        <h3 class="service-title">조세 불복<br><span class="service-subtitle">불합리한 과세 적극 대응</span></h3>
                        <p class="service-description">이의신청부터 행정소송까지 완벽 지원</p>
                        <ul class="service-features">
                            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/solid-circled-check.svg" alt="체크" class="check-icon">과세전 적부심사, 이의신청</li>
                            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/solid-circled-check.svg" alt="체크" class="check-icon">심판청구, 행정소송 지원</li>
                            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/solid-circled-check.svg" alt="체크" class="check-icon">불복 성공률 65%</li>
                        </ul>
                    </div>
                    
                    <!-- Service Card 5 -->
                    <div class="service-card">
                        <h3 class="service-title">경리 아웃소싱<br><span class="service-subtitle">복잡한 경리업무 완전 위탁</span></h3>
                        <p class="service-description">월 20만원부터 경리 걱정 끝</p>
                        <ul class="service-features">
                            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/solid-circled-check.svg" alt="체크" class="check-icon">급여계산, 4대보험, 자금관리</li>
                            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/solid-circled-check.svg" alt="체크" class="check-icon">세금계산서 관리, 장부 정리</li>
                            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/solid-circled-check.svg" alt="체크" class="check-icon">업무 효율성 200% 향상</li>
                        </ul>
                    </div>
                    
                    <!-- Service Card 6 -->
                    <div class="service-card">
                        <h3 class="service-title">전문센터<br><span class="service-subtitle">업종별 특화 세무 솔루션</span></h3>
                        <p class="service-description">IT기업, 쇼핑몰, 부동산 전문 서비스</p>
                        <ul class="service-features">
                            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/solid-circled-check.svg" alt="체크" class="check-icon">IT기업: R&D 세액공제 전문</li>
                            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/solid-circled-check.svg" alt="체크" class="check-icon">온라인 쇼핑몰: 전자상거래 세무</li>
                            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/solid-circled-check.svg" alt="체크" class="check-icon">부동산: 임대소득 최적화</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Service Guide Section -->
        <section class="onfield-service-guide-section full-width-section bg-light-gray">
            <div class="grid-container">
                <h2 class="section-title">서비스 선택 가이드</h2>
                <p class="section-subtitle">상황별 최적의 서비스를 찾아보세요</p>
                
                <div class="guide-grid">
                    <!-- Guide Card 1 -->
                    <div class="guide-card">
                        <h3 class="guide-title">세무 업무가 복잡하고 부담스러워요</h3>
                        <h4 class="guide-service">세무 기장 또는 경리 아웃소싱</h4>
                        <ul class="guide-benefits">
                            <li>
                                <span class="check-icon-wrapper">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/circle.svg" alt="원" class="circle-icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/check.svg" alt="체크" class="check-icon-overlay">
                                </span>
                                전문가가 모든 세무 업무 대행
                            </li>
                            <li>
                                <span class="check-icon-wrapper">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/circle.svg" alt="원" class="circle-icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/check.svg" alt="체크" class="check-icon-overlay">
                                </span>
                                실시간 현황 공유로 안심
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Guide Card 2 -->
                    <div class="guide-card">
                        <h3 class="guide-title">세금을 너무 많이 내는 것 같아요</h3>
                        <h4 class="guide-service">세무 컨설팅</h4>
                        <ul class="guide-benefits">
                            <li>
                                <span class="check-icon-wrapper">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/circle.svg" alt="원" class="circle-icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/check.svg" alt="체크" class="check-icon-overlay">
                                </span>
                                무료 세무 진단으로 절세 기회 발굴
                            </li>
                            <li>
                                <span class="check-icon-wrapper">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/circle.svg" alt="원" class="circle-icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/check.svg" alt="체크" class="check-icon-overlay">
                                </span>
                                연간 평균 2,500만원 절세
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Guide Card 3 -->
                    <div class="guide-card">
                        <h3 class="guide-title">세무조사 통지를 받았어요</h3>
                        <h4 class="guide-service">세무조사 대응</h4>
                        <ul class="guide-benefits">
                            <li>
                                <span class="check-icon-wrapper">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/circle.svg" alt="원" class="circle-icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/check.svg" alt="체크" class="check-icon-overlay">
                                </span>
                                24시간 긴급 상담
                            </li>
                            <li>
                                <span class="check-icon-wrapper">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/circle.svg" alt="원" class="circle-icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/check.svg" alt="체크" class="check-icon-overlay">
                                </span>
                                전문가 현장 동행
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Guide Card 4 -->
                    <div class="guide-card">
                        <h3 class="guide-title">정부지원금을 받고 싶어요</h3>
                        <h4 class="guide-service">세무 컨설팅 + 전문센터</h4>
                        <ul class="guide-benefits">
                            <li>
                                <span class="check-icon-wrapper">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/circle.svg" alt="원" class="circle-icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/check.svg" alt="체크" class="check-icon-overlay">
                                </span>
                                맞춤 지원사업 발굴 및 신청 지원
                            </li>
                            <li>
                                <span class="check-icon-wrapper">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/circle.svg" alt="원" class="circle-icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/check.svg" alt="체크" class="check-icon-overlay">
                                </span>
                                평균 확보액 5,000만원
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Guide Card 5 -->
                    <div class="guide-card">
                        <h3 class="guide-title">국세청 처분이 부당해요</h3>
                        <h4 class="guide-service">조세 불복</h4>
                        <ul class="guide-benefits">
                            <li>
                                <span class="check-icon-wrapper">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/circle.svg" alt="원" class="circle-icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/check.svg" alt="체크" class="check-icon-overlay">
                                </span>
                                이의신청부터 행정소송까지
                            </li>
                            <li>
                                <span class="check-icon-wrapper">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/circle.svg" alt="원" class="circle-icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/check.svg" alt="체크" class="check-icon-overlay">
                                </span>
                                불복 성공률 65%
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Guide Card 6 -->
                    <div class="guide-card">
                        <h3 class="guide-title">우리 업종에 특화된 세무 서비스가 필요해요</h3>
                        <h4 class="guide-service">전문센터</h4>
                        <ul class="guide-benefits">
                            <li>
                                <span class="check-icon-wrapper">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/circle.svg" alt="원" class="circle-icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/check.svg" alt="체크" class="check-icon-overlay">
                                </span>
                                업종별 특화 전문가 배정
                            </li>
                            <li>
                                <span class="check-icon-wrapper">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/circle.svg" alt="원" class="circle-icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/check.svg" alt="체크" class="check-icon-overlay">
                                </span>
                                맞춤형 세무 전략 수립
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Process Section -->
        <section class="onfield-process-section full-width-section bg-white">
            <div class="grid-container">
                <h2 class="section-title">온필드 서비스 프로세스</h2>
                <p class="section-subtitle">간단한 4단계로 시작하는 전문 세무 관리</p>
                
                <div class="process-grid">
                    <!-- Process Step 1 -->
                    <div class="process-step">
                        <div class="step-number">1단계</div>
                        <h3 class="step-title">무료 상담</h3>
                        <h4 class="step-subtitle">현재 상황 정확한 진단</h4>
                        <ul class="step-details">
                            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/solid-circled-check.svg" alt="체크" class="check-icon">세무 현황 분석</li>
                            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/solid-circled-check.svg" alt="체크" class="check-icon">문제점 및 개선 기회 발굴</li>
                        </ul>
                    </div>
                    
                    <!-- Process Step 2 -->
                    <div class="process-step">
                        <div class="step-number">2단계</div>
                        <h3 class="step-title">맞춤 솔루션 제안</h3>
                        <h4 class="step-subtitle">최적의 서비스 설계</h4>
                        <ul class="step-details">
                            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/solid-circled-check.svg" alt="체크" class="check-icon">상황별 최적 서비스 추천</li>
                            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/solid-circled-check.svg" alt="체크" class="check-icon">예상 효과 및 비용 제시</li>
                        </ul>
                    </div>
                    
                    <!-- Process Step 3 -->
                    <div class="process-step">
                        <div class="step-number">3단계</div>
                        <h3 class="step-title">전문가 배정</h3>
                        <h4 class="step-subtitle">담당자 지정</h4>
                        <ul class="step-details">
                            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/solid-circled-check.svg" alt="체크" class="check-icon">김성미 세무사 직접 담당</li>
                            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/solid-circled-check.svg" alt="체크" class="check-icon">1:1 전담 관리 시스템</li>
                        </ul>
                    </div>
                    
                    <!-- Process Step 4 -->
                    <div class="process-step">
                        <div class="step-number">4단계</div>
                        <h3 class="step-title">서비스 시작</h3>
                        <h4 class="step-subtitle">실시간 세무 관리</h4>
                        <ul class="step-details">
                            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/solid-circled-check.svg" alt="체크" class="check-icon">카카오톡 실시간 소통</li>
                            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/solid-circled-check.svg" alt="체크" class="check-icon">월별 현황 리포트 제공</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Differentiators Section -->
        <section class="onfield-differentiators-section full-width-section bg-light-gray">
            <div class="grid-container">
                <h2 class="section-title">온필드 차별화 포인트</h2>
                <p class="section-subtitle">왜 200+ 고객사가 온필드를 선택했을까요?</p>
                
                <div class="differentiators-grid">
                    <!-- Differentiator 1 -->
                    <div class="differentiator-card">
                        <h3 class="diff-title">검증된 전문성</h3>
                        <ul class="diff-features">
                            <li>
                                <span class="check-icon-wrapper">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/circle.svg" alt="원" class="circle-icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/check.svg" alt="체크" class="check-icon-overlay">
                                </span>
                                15년 경력 김성미 세무사 직접 담당
                            </li>
                            <li>
                                <span class="check-icon-wrapper">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/circle.svg" alt="원" class="circle-icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/check.svg" alt="체크" class="check-icon-overlay">
                                </span>
                                200+ 고객사 축적된 노하우
                            </li>
                            <li>
                                <span class="check-icon-wrapper">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/circle.svg" alt="원" class="circle-icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/check.svg" alt="체크" class="check-icon-overlay">
                                </span>
                                성공률 95% 검증된 실력
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Differentiator 2 -->
                    <div class="differentiator-card">
                        <h3 class="diff-title">확실한 성과</h3>
                        <ul class="diff-features">
                            <li>
                                <span class="check-icon-wrapper">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/circle.svg" alt="원" class="circle-icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/check.svg" alt="체크" class="check-icon-overlay">
                                </span>
                                평균 절세액 2,500만원 실제 절세 달성
                            </li>
                            <li>
                                <span class="check-icon-wrapper">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/circle.svg" alt="원" class="circle-icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/check.svg" alt="체크" class="check-icon-overlay">
                                </span>
                                투자 회수 3개월 빠른 효과 실현
                            </li>
                            <li>
                                <span class="check-icon-wrapper">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/circle.svg" alt="원" class="circle-icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/check.svg" alt="체크" class="check-icon-overlay">
                                </span>
                                고객 만족도 98% 지속적 만족
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Differentiator 3 -->
                    <div class="differentiator-card">
                        <h3 class="diff-title">전문센터</h3>
                        <ul class="diff-features">
                            <li>
                                <span class="check-icon-wrapper">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/circle.svg" alt="원" class="circle-icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/check.svg" alt="체크" class="check-icon-overlay">
                                </span>
                                카카오톡 실시간 상담 언제든 소통
                            </li>
                            <li>
                                <span class="check-icon-wrapper">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/circle.svg" alt="원" class="circle-icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/check.svg" alt="체크" class="check-icon-overlay">
                                </span>
                                24시간 긴급 지원 위급상황 즉시 대응
                            </li>
                            <li>
                                <span class="check-icon-wrapper">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/circle.svg" alt="원" class="circle-icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/check.svg" alt="체크" class="check-icon-overlay">
                                </span>
                                투명한 프로세스 모든 과정 공개
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Success Stories Section -->
        <section class="onfield-success-section full-width-section bg-white">
            <div class="grid-container">
                <h2 class="section-title">고객 성공 사례</h2>
                <p class="section-subtitle">실제 고객들의 생생한 성과</p>
                
                <div class="success-carousel swiper">
                    <div class="swiper-wrapper">
                        <!-- Success Story 1 -->
                        <div class="swiper-slide">
                            <div class="success-card">
                                <h3 class="success-title">세무 컨설팅으로 연간 3,000만원 절세 성공</h3>
                                <p class="success-subtitle">A제조업체 김○○ 대표</p>
                                <p class="success-description">"법인세 부담이 50% 줄어서 시설 투자에 더 집중할 수 있게 됐습니다"</p>
                            </div>
                        </div>
                        
                        <!-- Success Story 2 -->
                        <div class="swiper-slide">
                            <div class="success-card">
                                <h3 class="success-title">정부지원금 7,000만원 확보</h3>
                                <p class="success-subtitle">B스타트업 이○○ 대표</p>
                                <p class="success-description">"혼자서는 찾을 수 없었던 지원사업을 발굴해주셨어요"</p>
                            </div>
                        </div>
                        
                        <!-- Success Story 3 -->
                        <div class="swiper-slide">
                            <div class="success-card">
                                <h3 class="success-title">세무 업무 부담 완전 해결</h3>
                                <p class="success-subtitle">C쇼핑몰 박○○ 대표</p>
                                <p class="success-description">"매월 복잡했던 세무 업무를 맡기고 본업에만 집중합니다"</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                
                <div class="success-cta">
                    <a href="/success-stories" class="success-more-button">더 많은 성공사례 보기</a>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="onfield-tax-cta-section full-width-section bg-light-gray">
            <div class="grid-container">
                <div class="cta-content">
                    <div class="cta-image">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sections/consult-request-form-cta.webp" alt="세무 상담 신청">
                    </div>
                    <div class="cta-text">
                        <h2 class="cta-title">복잡한 세금, 전문가의 지식으로 명쾌하게</h2>
                        <p class="cta-description">
                            산더미 같은 서류와 어려운 규정들,<br>
                            이제 전문가에게 맡기고 마음 편히 비즈니스에 집중하세요.
                        </p>
                        <a href="/request-consult" class="cta-button">지금 바로 상담 신청하기</a>
                    </div>
                </div>
            </div>
        </section>

    </main>
</div>

<?php
get_footer();