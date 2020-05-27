<?php


namespace Crawly\InscricaoEstadualLaravel\Tests;

use Crawly\InscricaoEstadualLaravel\InscricaoEstadualValidatorProvider;
use Illuminate\Support\Facades\Validator;
use Orchestra\Testbench\TestCase;

class ValidatorTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();

        $this->app->register(InscricaoEstadualValidatorProvider::class);
    }

    public function testAcValid()
    {
        $inscricaoEstadual = Validator::make(
            ['0108368143106'],
            ['inscricao_estadual_ac']
        );

        $this->assertTrue($inscricaoEstadual->passes());
    }

    public function testAcInvalid1()
    {
        $inscricaoEstadual = Validator::make(
            ['0187634580933'],
            ['inscricao_estadual_ac']
        );

        $this->assertTrue($inscricaoEstadual->fails());
    }

    public function testAcInvalid2()
    {
        $inscricaoEstadual = Validator::make(
            ['a1a2a3a4a5a6a7a8'],
            ['inscricao_estadual_ac']
        );

        $this->assertTrue($inscricaoEstadual->fails());
    }

    public function testAlValid()
    {
        $inscricaoEstadual = Validator::make(
            ['248659758'],
            ['inscricao_estadual_al']
        );

        $this->assertTrue($inscricaoEstadual->passes());
    }

    public function testAlInvalid1()
    {
        $inscricaoEstadual = Validator::make(
            ['248659759'],
            ['inscricao_estadual_al']
        );

        $this->assertTrue($inscricaoEstadual->fails());
    }

    public function testAlInvalid2()
    {
        $inscricaoEstadual = Validator::make(
            ['a1a2a3a4a5a6a7a8'],
            ['inscricao_estadual_al']
        );

        $this->assertTrue($inscricaoEstadual->fails());
    }

    public function testApValid()
    {
        $inscricaoEstadual = Validator::make(
            ['036029572'],
            ['inscricao_estadual_ap']
        );

        $this->assertTrue($inscricaoEstadual->passes());
    }

    public function testApInvalid1()
    {
        $inscricaoEstadual = Validator::make(
            ['036029573'],
            ['inscricao_estadual_ap']
        );

        $this->assertTrue($inscricaoEstadual->fails());
    }

    public function testApInvalid2()
    {
        $inscricaoEstadual = Validator::make(
            ['a1a2a3a4a5a6a7a8'],
            ['inscricao_estadual_ap']
        );

        $this->assertTrue($inscricaoEstadual->fails());
    }

    public function testAmValid()
    {
        $inscricaoEstadual = Validator::make(
            ['036029572'],
            ['inscricao_estadual_am']
        );

        $this->assertTrue($inscricaoEstadual->passes());
    }

    public function testAmInvalid1()
    {
        $inscricaoEstadual = Validator::make(
            ['036029573'],
            ['inscricao_estadual_am']
        );

        $this->assertTrue($inscricaoEstadual->fails());
    }

    public function testAmInvalid2()
    {
        $inscricaoEstadual = Validator::make(
            ['a1a2a3a4a5a6a7a8'],
            ['inscricao_estadual_am']
        );

        $this->assertTrue($inscricaoEstadual->fails());
    }

    public function testBaValid()
    {
        $inscricaoEstadual = Validator::make(
            ['12345663'],
            ['inscricao_estadual_ba']
        );

        $this->assertTrue($inscricaoEstadual->passes());
    }

    public function testBaInvalid1()
    {
        $inscricaoEstadual = Validator::make(
            ['12345636'],
            ['inscricao_estadual_ba']
        );

        $this->assertTrue($inscricaoEstadual->fails());
    }

    public function testBaInvalid2()
    {
        $inscricaoEstadual = Validator::make(
            ['a1a2a3a4a5a6a7a8'],
            ['inscricao_estadual_ba']
        );

        $this->assertTrue($inscricaoEstadual->fails());
    }

    public function testCeValid()
    {
        $inscricaoEstadual = Validator::make(
            ['853511942'],
            ['inscricao_estadual_ce']
        );

        $this->assertTrue($inscricaoEstadual->passes());
    }

    public function testCeInvalid1()
    {
        $inscricaoEstadual = Validator::make(
            ['853511943'],
            ['inscricao_estadual_ce']
        );

        $this->assertTrue($inscricaoEstadual->fails());
    }

    public function testCeInvalid2()
    {
        $inscricaoEstadual = Validator::make(
            ['a1a2a3a4a5a6a7a8'],
            ['inscricao_estadual_ce']
        );

        $this->assertTrue($inscricaoEstadual->fails());
    }

    public function testDfValid()
    {
        $inscricaoEstadual = Validator::make(
            ['0754002000176'],
            ['inscricao_estadual_df']
        );

        $this->assertTrue($inscricaoEstadual->passes());
    }

    public function testDfInvalid1()
    {
        $inscricaoEstadual = Validator::make(
            ['0108368143017'],
            ['inscricao_estadual_df']
        );

        $this->assertTrue($inscricaoEstadual->fails());
    }

    public function testDfInvalid2()
    {
        $inscricaoEstadual = Validator::make(
            ['a1a2a3a4a5a6a7a8'],
            ['inscricao_estadual_df']
        );

        $this->assertTrue($inscricaoEstadual->fails());
    }

    public function testEsValid()
    {
        $inscricaoEstadual = Validator::make(
            ['639191444'],
            ['inscricao_estadual_es']
        );

        $this->assertTrue($inscricaoEstadual->passes());
    }

    public function testEsInvalid1()
    {
        $inscricaoEstadual = Validator::make(
            ['639191445'],
            ['inscricao_estadual_es']
        );

        $this->assertTrue($inscricaoEstadual->fails());
    }

    public function testEsInvalid2()
    {
        $inscricaoEstadual = Validator::make(
            ['a1a2a3a4a5a6a7a8'],
            ['inscricao_estadual_es']
        );

        $this->assertTrue($inscricaoEstadual->fails());
    }

    public function testGoValid()
    {
        $inscricaoEstadual = Validator::make(
            ['109161793'],
            ['inscricao_estadual_go']
        );

        $this->assertTrue($inscricaoEstadual->passes());
    }

    public function testGoInvalid1()
    {
        $inscricaoEstadual = Validator::make(
            ['109161794'],
            ['inscricao_estadual_go']
        );

        $this->assertTrue($inscricaoEstadual->fails());
    }

    public function testGoInvalid2()
    {
        $inscricaoEstadual = Validator::make(
            ['a1a2a3a4a5a6a7a8'],
            ['inscricao_estadual_go']
        );

        $this->assertTrue($inscricaoEstadual->fails());
    }

    public function testMaValid()
    {
        $inscricaoEstadual = Validator::make(
            ['120000008'],
            ['inscricao_estadual_ma']
        );

        $this->assertTrue($inscricaoEstadual->passes());
    }

    public function testMaInvalid1()
    {
        $inscricaoEstadual = Validator::make(
            ['0120000008'],
            ['inscricao_estadual_ma']
        );

        $this->assertTrue($inscricaoEstadual->fails());
    }

    public function testMaInvalid2()
    {
        $inscricaoEstadual = Validator::make(
            ['a1a2a3a4a5a6a7a8'],
            ['inscricao_estadual_ma']
        );

        $this->assertTrue($inscricaoEstadual->fails());
    }

    public function testMtValid()
    {
        $inscricaoEstadual = Validator::make(
            ['00000000000'],
            ['inscricao_estadual_mt']
        );

        $this->assertTrue($inscricaoEstadual->passes());
    }

    public function testMtInvalid1()
    {
        $inscricaoEstadual = Validator::make(
            ['12345678901'],
            ['inscricao_estadual_mt']
        );

        $this->assertTrue($inscricaoEstadual->fails());
    }

    public function testMtInvalid2()
    {
        $inscricaoEstadual = Validator::make(
            ['a1a2a3a4a5a6a7a8'],
            ['inscricao_estadual_mt']
        );

        $this->assertTrue($inscricaoEstadual->fails());
    }

    public function testMsValid()
    {
        $inscricaoEstadual = Validator::make(
            ['280000006'],
            ['inscricao_estadual_ms']
        );

        $this->assertTrue($inscricaoEstadual->passes());
    }

    public function testMsInvalid1()
    {
        $inscricaoEstadual = Validator::make(
            ['0280000006'],
            ['inscricao_estadual_ms']
        );

        $this->assertTrue($inscricaoEstadual->fails());
    }

    public function testMsInvalid2()
    {
        $inscricaoEstadual = Validator::make(
            ['a1a2a3a4a5a6a7a8'],
            ['inscricao_estadual_ms']
        );

        $this->assertTrue($inscricaoEstadual->fails());
    }

    public function testMgValid()
    {
        $inscricaoEstadual = Validator::make(
            ['4333908330177'],
            ['inscricao_estadual_mg']
        );

        $this->assertTrue($inscricaoEstadual->passes());
    }

    public function testMgInvalid1()
    {
        $inscricaoEstadual = Validator::make(
            ['04333908330177'],
            ['inscricao_estadual_mg']
        );

        $this->assertTrue($inscricaoEstadual->fails());
    }

    public function testMgInvalid2()
    {
        $inscricaoEstadual = Validator::make(
            ['a1a2a3a4a5a6a7a8'],
            ['inscricao_estadual_mg']
        );

        $this->assertTrue($inscricaoEstadual->fails());
    }

    public function testPaValid()
    {
        $inscricaoEstadual = Validator::make(
            ['150000006'],
            ['inscricao_estadual_pa']
        );

        $this->assertTrue($inscricaoEstadual->passes());
    }

    public function testPaInvalid1()
    {
        $inscricaoEstadual = Validator::make(
            ['0150000006'],
            ['inscricao_estadual_pa']
        );

        $this->assertTrue($inscricaoEstadual->fails());
    }

    public function testPaInvalid2()
    {
        $inscricaoEstadual = Validator::make(
            ['a1a2a3a4a5a6a7a8'],
            ['inscricao_estadual_pa']
        );

        $this->assertTrue($inscricaoEstadual->fails());
    }

    public function testPbValid()
    {
        $inscricaoEstadual = Validator::make(
            ['853511942'],
            ['inscricao_estadual_pb']
        );

        $this->assertTrue($inscricaoEstadual->passes());
    }

    public function testPbInvalid1()
    {
        $inscricaoEstadual = Validator::make(
            ['853511943'],
            ['inscricao_estadual_pb']
        );

        $this->assertTrue($inscricaoEstadual->fails());
    }

    public function testPbInvalid2()
    {
        $inscricaoEstadual = Validator::make(
            ['a1a2a3a4a5a6a7a8'],
            ['inscricao_estadual_pb']
        );

        $this->assertTrue($inscricaoEstadual->fails());
    }

    public function testPrValid()
    {
        $inscricaoEstadual = Validator::make(
            ['4447953604'],
            ['inscricao_estadual_pr']
        );

        $this->assertTrue($inscricaoEstadual->passes());
    }

    public function testPrInvalid1()
    {
        $inscricaoEstadual = Validator::make(
            ['4447953640'],
            ['inscricao_estadual_pr']
        );

        $this->assertTrue($inscricaoEstadual->fails());
    }

    public function testPrInvalid2()
    {
        $inscricaoEstadual = Validator::make(
            ['a1a2a3a4a5a6a7a8'],
            ['inscricao_estadual_pr']
        );

        $this->assertTrue($inscricaoEstadual->fails());
    }

    public function testPeValid()
    {
        $inscricaoEstadual = Validator::make(
            ['288625706'],
            ['inscricao_estadual_pe']
        );

        $this->assertTrue($inscricaoEstadual->passes());
    }

    public function testPeInvalid1()
    {
        $inscricaoEstadual = Validator::make(
            ['925870101'],
            ['inscricao_estadual_pe']
        );

        $this->assertTrue($inscricaoEstadual->fails());
    }

    public function testPeInvalid2()
    {
        $inscricaoEstadual = Validator::make(
            ['a1a2a3a4a5a6a7a8'],
            ['inscricao_estadual_pe']
        );

        $this->assertTrue($inscricaoEstadual->fails());
    }

    public function testPiValid()
    {
        $inscricaoEstadual = Validator::make(
            ['052364534'],
            ['inscricao_estadual_pi']
        );

        $this->assertTrue($inscricaoEstadual->passes());
    }

    public function testPiInvalid1()
    {
        $inscricaoEstadual = Validator::make(
            ['4324243'],
            ['inscricao_estadual_pi']
        );

        $this->assertTrue($inscricaoEstadual->fails());
    }

    public function testPiInvalid2()
    {
        $inscricaoEstadual = Validator::make(
            ['a1a2a3a4a5a6a7a8'],
            ['inscricao_estadual_pi']
        );

        $this->assertTrue($inscricaoEstadual->fails());
    }

    public function testRjValid()
    {
        $inscricaoEstadual = Validator::make(
            ['62545372'],
            ['inscricao_estadual_rj']
        );

        $this->assertTrue($inscricaoEstadual->passes());
    }

    public function testRjInvalid1()
    {
        $inscricaoEstadual = Validator::make(
            ['20441620'],
            ['inscricao_estadual_rj']
        );

        $this->assertTrue($inscricaoEstadual->fails());
    }

    public function testRjInvalid2()
    {
        $inscricaoEstadual = Validator::make(
            ['a1a2a3a4a5a6a7a8'],
            ['inscricao_estadual_rj']
        );

        $this->assertTrue($inscricaoEstadual->fails());
    }

    public function testRnValid()
    {
        $inscricaoEstadual = Validator::make(
            ['2007693232'],
            ['inscricao_estadual_rn']
        );

        $this->assertTrue($inscricaoEstadual->passes());
    }

    public function testRnInvalid1()
    {
        $inscricaoEstadual = Validator::make(
            ['0203569881'],
            ['inscricao_estadual_rn']
        );

        $this->assertTrue($inscricaoEstadual->fails());
    }

    public function testRnInvalid2()
    {
        $inscricaoEstadual = Validator::make(
            ['a1a2a3a4a5a6a7a8'],
            ['inscricao_estadual_rn']
        );

        $this->assertTrue($inscricaoEstadual->fails());
    }

    public function testRsValid()
    {
        $inscricaoEstadual = Validator::make(
            ['0305169149'],
            ['inscricao_estadual_rs']
        );

        $this->assertTrue($inscricaoEstadual->passes());
    }

    public function testRsInvalid1()
    {
        $inscricaoEstadual = Validator::make(
            ['02007693230'],
            ['inscricao_estadual_rs']
        );

        $this->assertTrue($inscricaoEstadual->fails());
    }

    public function testRsInvalid2()
    {
        $inscricaoEstadual = Validator::make(
            ['a1a2a3a4a5a6a7a8'],
            ['inscricao_estadual_rs']
        );

        $this->assertTrue($inscricaoEstadual->fails());
    }

    public function testRoValid()
    {
        $inscricaoEstadual = Validator::make(
            ['01078042249629'],
            ['inscricao_estadual_ro']
        );

        $this->assertTrue($inscricaoEstadual->passes());
    }

    public function testRoInvalid1()
    {
        $inscricaoEstadual = Validator::make(
            ['001078042249627'],
            ['inscricao_estadual_ro']
        );

        $this->assertTrue($inscricaoEstadual->fails());
    }

    public function testRoInvalid2()
    {
        $inscricaoEstadual = Validator::make(
            ['a1a2a3a4a5a6a7a8'],
            ['inscricao_estadual_ro']
        );

        $this->assertTrue($inscricaoEstadual->fails());
    }

    public function testRrValid()
    {
        $inscricaoEstadual = Validator::make(
            ['240061536'],
            ['inscricao_estadual_rr']
        );

        $this->assertTrue($inscricaoEstadual->passes());
    }

    public function testRrInvalid1()
    {
        $inscricaoEstadual = Validator::make(
            ['024006150'],
            ['inscricao_estadual_rr']
        );

        $this->assertTrue($inscricaoEstadual->fails());
    }

    public function testRrInvalid2()
    {
        $inscricaoEstadual = Validator::make(
            ['a1a2a3a4a5a6a7a8'],
            ['inscricao_estadual_rr']
        );

        $this->assertTrue($inscricaoEstadual->fails());
    }

    public function testScValid()
    {
        $inscricaoEstadual = Validator::make(
            ['330430572'],
            ['inscricao_estadual_sc']
        );

        $this->assertTrue($inscricaoEstadual->passes());
    }

    public function testScInvalid1()
    {
        $inscricaoEstadual = Validator::make(
            ['024006150'],
            ['inscricao_estadual_sc']
        );

        $this->assertTrue($inscricaoEstadual->fails());
    }

    public function testScInvalid2()
    {
        $inscricaoEstadual = Validator::make(
            ['a1a2a3a4a5a6a7a8'],
            ['inscricao_estadual_sc']
        );

        $this->assertTrue($inscricaoEstadual->fails());
    }

    public function testSpValid()
    {
        $inscricaoEstadual = Validator::make(
            ['110042490114'],
            ['inscricao_estadual_sp']
        );

        $this->assertTrue($inscricaoEstadual->passes());
    }

    public function testSpInvalid1()
    {
        $inscricaoEstadual = Validator::make(
            ['1110042494114'],
            ['inscricao_estadual_sp']
        );

        $this->assertTrue($inscricaoEstadual->fails());
    }

    public function testSpInvalid2()
    {
        $inscricaoEstadual = Validator::make(
            ['a1a2a3a4a5a6a7a8'],
            ['inscricao_estadual_sp']
        );

        $this->assertTrue($inscricaoEstadual->fails());
    }

    public function testSeValid()
    {
        $inscricaoEstadual = Validator::make(
            ['017682606'],
            ['inscricao_estadual_se']
        );

        $this->assertTrue($inscricaoEstadual->passes());
    }

    public function testSeInvalid1()
    {
        $inscricaoEstadual = Validator::make(
            ['01027737427'],
            ['inscricao_estadual_se']
        );

        $this->assertTrue($inscricaoEstadual->fails());
    }

    public function testSeInvalid2()
    {
        $inscricaoEstadual = Validator::make(
            ['a1a2a3a4a5a6a7a8'],
            ['inscricao_estadual_se']
        );

        $this->assertTrue($inscricaoEstadual->fails());
    }

    public function testToValid()
    {
        $inscricaoEstadual = Validator::make(
            ['01027737427'],
            ['inscricao_estadual_to']
        );

        $this->assertTrue($inscricaoEstadual->passes());
    }

    public function testToInvalid1()
    {
        $inscricaoEstadual = Validator::make(
            ['01047737427'],
            ['inscricao_estadual_to']
        );

        $this->assertTrue($inscricaoEstadual->fails());
    }

    public function testToInvalid2()
    {
        $inscricaoEstadual = Validator::make(
            ['a1a2a3a4a5a6a7a8'],
            ['inscricao_estadual_to']
        );

        $this->assertTrue($inscricaoEstadual->fails());
    }
}