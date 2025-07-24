<?php
/**
 * Template Name: About Us Page
 * 
 * @package GeneratePress Child
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        
        <!-- Page Header Section -->
        <section class="onfield-about-header full-width-section" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sections/about-bg.webp');">
            <div class="grid-container">
                <div class="about-header-content">
                    <h1 class="page-title"><span>납세자의 안심</span>을 위한<br><span>세무사의 진심</span></h1>
                    <p class="page-subtitle">15년 경력 세무 전문가가 만든<br>신뢰할 수 있는 세무 파트너</p>
                    <p class="page-description">온필드는 단순한 세무 처리를 넘어 고객의 성장과 성공을 함께하는 진정한 파트너를 지향합니다.</p>
                </div>
            </div>
        </section>

        <!-- 온필드가 걸어온 길 Timeline Section -->
        <section class="onfield-journey-section full-width-section bg-white">
            <div class="grid-container">
                <h2 class="section-title">온필드가 걸어온 길</h2>
                <p class="section-subtitle">2010년 시작부터 현재까지, 고객과 함께 성장해온 15년</p>
                
                <div class="journey-timeline">
                    <div class="timeline-item">
                        <div class="year">2010</div>
                        <div class="milestone">
                            <h4>세무사 사무소 개업</h4>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="year">2015</div>
                        <div class="milestone">
                            <h4>100번째 고객사 달성</h4>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="year">2020</div>
                        <div class="milestone">
                            <h4>GMG 역삼1지점 설립</h4>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="year">2025</div>
                        <div class="milestone">
                            <h4>200+ 고객사 돌파</h4>
                        </div>
                    </div>
                </div>
                <p class="timeline-description">온필드는 단순한 세무 처리를 넘어 기업의 성장과 재무 안정성을 위한 진정한 세무 파트너입니다.</p>
            </div>
        </section>

        <!-- 온필드의 핵심 가치 Section -->
        <section class="onfield-values-section full-width-section bg-white">
            <div class="grid-container">
                <h2 class="section-title">온필드의 핵심 가치</h2>
                <p class="section-subtitle">우리가 추구하는 3가지 핵심 가치</p>
                
                <div class="values-grid">
                    <div class="value-item">
                        <h3>전문성</h3>
                        <h4>깊이 있는 전문 지식</h4>
                        <h5>모든 분야를 다루지 않습니다</h5>
                        <p>15년 경력의 축적된 노하우로 IT기업, 온라인 쇼핑몰, 부동산 등 특정 분야에 집중합니다. 잘 아는 분야만 수임하는 것이 고객에 대한 책임입니다.</p>
                    </div>
                    <div class="value-item">
                        <h3>진정성</h3>
                        <h4>고객의 성공이 우리의 성공</h4>
                        <h5>단순 대행이 아닌 동반 성장</h5>
                        <p>세무 신고만 하는 것이 아니라 고객의 사업이 성장할 수 있도록 절세 전략과 정부지원사업까지 함께 고민합니다.</p>
                    </div>
                    <div class="value-item">
                        <h3>투명성</h3>
                        <h4>숨김없는 정직한 소통</h4>
                        <h5>모든 과정을 투명하게 공개</h5>
                        <p>수임료부터 진행 과정, 결과까지 모든 것을 투명하게 공유합니다. 신뢰는 투명함에서 시작됩니다.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- 대표 세무사 소개 Section -->
        <section class="onfield-representative-section full-width-section bg-light-gray">
            <div class="grid-container">
                <h2 class="section-title">대표 세무사 소개</h2>
                <p class="section-subtitle">온필드를 이끄는 세무 전문가</p>
                
                <div class="representative-content">
                    <div class="representative-image">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sections/tax-accountant-profile.webp" alt="김성미 대표세무사">
                    </div>
                    <div class="representative-info">
                        <h3>김성미 대표세무사</h3>
                        <p class="tagline">15년 경력의 세무 전문가<br>GMG 역삼1지점 대표세무사</p>
                        
                        <div class="credentials">
                            <h4>주요 경력</h4>
                            <ul>
                                <li>세무사컨설팅협동조합 이사</li>
                                <li>한국세무사회 기업진단 감리위원</li>
                                <li>서울지방세무사회 세무조정/성실신고 감리위원</li>
                                <li>한국여성세무사회 이사</li>
                                <li>(주)참약사 자문세무사</li>
                            </ul>
                        </div>
                        
                        <div class="experience">
                            <h4>자문 및 멘토링</h4>
                            <ul>
                                <li>전) 서울창업디딤터 평가위원</li>
                                <li>전) 건국대학교 창업지원단 멘토</li>
                                <li>전) 구리시 청년창업지원센터 멘토</li>
                                <li>전) 모바일택스</li>
                            </ul>
                        </div>
                        
                        <div class="message">
                            <h4>경영 철학</h4>
                            <p class="philosophy-title">"납세자의 안심을 위한 세무사의 진심"<br>
                            고객과의 신뢰를 최우선으로</p>
                            <p>"세무사의 역할은 단순히 세금을 계산하는 것이 아닙니다. 고객이 사업에만 집중할 수 있도록 든든한 울타리가 되어드리는 것, 그것이 제가 추구하는 세무 서비스입니다."</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 온필드만의 차별점 Section -->
        <section class="onfield-differentiators-section full-width-section bg-white">
            <div class="grid-container">
                <h2 class="section-title">온필드만의 차별점</h2>
                <p class="section-subtitle">200개 기업이 온필드를 선택한 이유</p>
                
                <div class="differentiators-grid">
                    <div class="differentiator-card">
                        <h3>전문 분야 집중</h3>
                        <h4>선택과 집중의 전문성</h4>
                        <ul>
                            <li>IT기업, 쇼핑몰, 부동산 특화</li>
                            <li>업종별 전담 팀 운영</li>
                            <li>깊이 있는 산업 이해</li>
                            <li>맞춤형 솔루션 제공</li>
                        </ul>
                    </div>
                    <div class="differentiator-card">
                        <h3>원스톱 토탈 서비스</h3>
                        <h4>세무의 모든 것을 한곳에서</h4>
                        <ul>
                            <li>기장부터 컨설팅까지</li>
                            <li>정부지원사업 연계</li>
                            <li>세무조사 대응 지원</li>
                            <li>경리 아웃소싱 가능</li>
                        </ul>
                    </div>
                    <div class="differentiator-card">
                        <h3>실시간 소통 시스템</h3>
                        <h4>언제 어디서나 연결</h4>
                        <ul>
                            <li>카카오톡 실시간 상담</li>
                            <li>24시간 긴급 대응</li>
                            <li>월별 현황 리포트</li>
                            <li>투명한 진행 상황 공유</li>
                        </ul>
                    </div>
                    <div class="differentiator-card">
                        <h3>성과 중심 접근</h3>
                        <h4>숫자로 증명하는 실력</h4>
                        <ul>
                            <li>평균 절세액 2,500만원</li>
                            <li>고객 만족도 98%</li>
                            <li>재계약률 95%</li>
                            <li>추천 고객 비율 60%</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- 온필드가 제공하는 가치 Section -->
        <section class="onfield-service-value-section full-width-section bg-light-gray">
            <div class="grid-container">
                <h2 class="section-title">온필드가 제공하는 가치</h2>
                <p class="section-subtitle">단순한 세무 서비스를 넘어선 비즈니스 파트너십</p>
                
                <div class="service-value-comparison">
                    <div class="service-value-box general">
                        <h3>일반 세무 서비스</h3>
                        <div class="service-value-list">
                            <ul>
                                <li>단순 세무 신고 대행</li>
                                <li>사후 처리 중심</li>
                                <li>일방적 업무 처리</li>
                                <li>획일적 서비스</li>
                                <li>단기적 관계</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="service-value-box onfield">
                        <h3>온필드 세무 서비스</h3>
                        <div class="service-value-list">
                            <ul>
                                <li>절세 전략 수립 및 실행</li>
                                <li>사전 예방 및 계획</li>
                                <li>쌍방향 소통과 협업</li>
                                <li>업종별 맞춤 솔루션</li>
                                <li>장기적 성장 파트너</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 온필드의 약속 Section -->
        <section class="onfield-promise-section full-width-section bg-white">
            <div class="grid-container">
                <h2 class="section-title">온필드의 약속</h2>
                <p class="section-subtitle">고객님께 드리는 3가지 약속</p>
                
                <div class="promise-grid">
                    <div class="promise-item">
                        <h3>전문성과 정직함</h3>
                        <h4>잘 아는 분야만 정직하게 수임합니다.</h4>
                        <ul>
                            <li>무리한 수임 거절, 전문 분야만 집중</li>
                            <li>모든 비용 사전 고지, 투명한 소통</li>
                            <li>정직한 조언과 지속적 역량 강화</li>
                        </ul>
                    </div>
                    
                    <div class="promise-item">
                        <h3>끝까지 함께하는 책임</h3>
                        <h4>시작부터 끝까지 책임지고 동행합니다.</h4>
                        <ul>
                            <li>세무조사 및 불복 절차까지 완벽 지원</li>
                            <li>지속적 사후 관리와 실시간 대응</li>
                            <li>고객의 성장을 위한 장기적 파트너십</li>
                        </ul>
                    </div>
                    
                    <div class="promise-item">
                        <h3>확실한 성과 창출</h3>
                        <h4>약속한 성과는 반드시 달성합니다</h4>
                        <ul>
                            <li>평균 2,500만원 절세 실현</li>
                            <li>정부지원금 확보 및 업무 효율 개선</li>
                            <li>고객 사업 성장을 위한 맞춤 전략 제공</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- 온필드와 함께하는 기업들 Section -->
        <section class="onfield-clients-section full-width-section bg-light-gray">
            <div class="grid-container">
                <h2 class="section-title">온필드와 함께하는 기업들</h2>
                <p class="section-subtitle">다양한 산업의 200+ 기업이 온필드를 신뢰합니다</p>
                
                <div class="clients-table">
                    <p class="clients-table-title">연매출 규모별 평균 절세 효과</p>
                    <table>
                        <thead>
                            <tr>
                                <th>산업 분야</th>
                                <th>고객사 수</th>
                                <th>대표 고객사</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>IT/스타트업</strong></td>
                                <td>80+</td>
                                <td>소프트웨어 개발, 플랫폼 서비스, 게임</td>
                            </tr>
                            <tr>
                                <td><strong>온라인 쇼핑몰</strong></td>
                                <td>60+</td>
                                <td>패션, 뷰티, 생활용품, 해외직구</td>
                            </tr>
                            <tr>
                                <td><strong>부동산</strong></td>
                                <td>40+</td>
                                <td>임대사업, 부동산 개발, 중개업</td>
                            </tr>
                            <tr>
                                <td><strong>제조/유통</strong></td>
                                <td>30+</td>
                                <td>전자제품, 식품, 의료기기</td>
                            </tr>
                            <tr>
                                <td><strong>서비스업</strong></td>
                                <td>20+</td>
                                <td>교육, 컨설팅, 마케팅 에이전시</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="table-note">*고객사 정보 보호를 위해 구체적인 사명은 공개하지 않습니다.</p>
                </div>
            </div>
        </section>

        <!-- 찾아오시는 길 Section -->
        <section class="onfield-location-section full-width-section bg-white">
            <div class="grid-container">
                <h2 class="section-title">찾아오시는 길</h2>
                <p class="section-subtitle">서울 강남구 역삼동에서 만나요</p>
                
                <div class="location-content">
                    <div class="location-map">
                        <!-- 카카오맵 - 지도퍼가기 -->
                        <div id="daumRoughmapContainer1752394936718" class="root_daum_roughmap root_daum_roughmap_landing"></div>
                    </div>
                    <div class="location-info">
                        <h3>온필드 세무회계 사무소</h3>
                        <h4>GMG 지엠지 세무회계 역삼1지점</h4>
                        
                        <div class="info-group">
                            <strong>주소</strong>
                            <p>서울특별시 강남구 테헤란로34길 32, 1</p>
                        </div>
                        <div class="info-group">
                            <strong>전화</strong>
                            <p>02-2068-3849</p>
                        </div>
                        <div class="info-group">
                            <strong>팩스</strong>
                            <p>0303-3448-0998</p>
                        </div>
                        <div class="info-group">
                            <strong>이메일</strong>
                            <p>smkim@gmg-tax.com</p>
                        </div>
                        
                        <div class="transport-info">
                            <h5>교통편 안내</h5>
                            <ul>
                                <li><strong>지하철</strong>: 2호선 역삼역 3번 출구 도보 5분</li>
                                <li><strong>버스</strong>: 146, 341, 360, 740번</li>
                                <li><strong>주차</strong>: 건물 내 주차장 이용 가능</li>
                            </ul>
                        </div>
                        
                        <div class="hours-info">
                            <h5>운영시간</h5>
                            <ul>
                                <li><strong>평일</strong>: 09:00 ~ 18:00</li>
                                <li><em>※ 토요일, 일요일, 공휴일 휴무 (긴급 상담은 가능)</em></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="onfield-about-cta-section full-width-section bg-light-gray">
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
                        <a href="/request-consult-now" class="cta-button">지금 바로 상담 신청하기</a>
                    </div>
                </div>
            </div>
        </section>

    </main>
</div>

<!-- Kakao Map Script -->
<script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>
<script charset="UTF-8">
    new daum.roughmap.Lander({
        "timestamp" : "1752394936718",
        "key" : "5jmfsp85czt",
        "mapWidth" : "640",
        "mapHeight" : "360"
    }).render();
</script>

<?php
get_footer();