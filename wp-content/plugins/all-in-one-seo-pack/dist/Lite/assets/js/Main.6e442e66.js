import m from"./AdditionalInformation.8c7b4d79.js";import p from"./Category.2727e450.js";import s from"./Features.fd7ceb5f.js";import a from"./Import.eb3aaa1f.js";import c from"./LicenseKey.2bfcd124.js";import l from"./SearchAppearance.f89a83b9.js";import u from"./SmartRecommendations.30f9c836.js";import d from"./Success.0faa4ae8.js";import f from"./Welcome.16704197.js";import{d as e,a as n,b as _}from"./vuex.esm-bundler.8589b2dd.js";import{_ as h,h as S,k as g,o as y}from"./_plugin-vue_export-helper.2d9794a3.js";import"./WpTable.4d19dc46.js";import"./helpers.de7566d0.js";import"./RequiresUpdate.52f5acf2.js";import"./postContent.bb42e0a8.js";import"./index.02a5ed9a.js";import"./isArrayLikeObject.c492f682.js";import"./default-i18n.ab92175e.js";import"./_commonjsHelpers.f84db168.js";import"./Caret.42a820e0.js";import"./cleanForSlug.62b08993.js";import"./constants.7044c894.js";import"./html.14f2a8b9.js";import"./Index.1fd8fc42.js";import"./Image.af73802b.js";import"./MaxCounts.12b45bab.js";import"./SaveChanges.bc66cd69.js";import"./Img.abc640e1.js";import"./Phone.d02b911b.js";import"./preload-helper.b149fa8b.js";import"./RadioToggle.4c888ca1.js";import"./SocialProfiles.9268336a.js";import"./Checkbox.b4e8b6fc.js";import"./Checkmark.c5326878.js";import"./Textarea.33c8fce4.js";import"./index.fd0fcee8.js";import"./SettingsRow.09a16661.js";import"./Row.5e452de4.js";import"./Twitter.fe969f86.js";import"./Plus.303de95b.js";import"./Header.34c3e402.js";import"./Logo.81e1a7f3.js";import"./Steps.0c9c96b9.js";import"./HighlightToggle.9350ac53.js";import"./Radio.4c468d8a.js";import"./HtmlTagsEditor.f7794300.js";import"./Editor.7fd59f57.js";import"./UnfilteredHtml.47ebc566.js";import"./ImageSeo.a59eaef0.js";import"./ProBadge.bcf74c08.js";import"./popup.b60b699f.js";import"./params.597cd0f5.js";import"./GoogleSearchPreview.6684da45.js";import"./PostTypeOptions.176a5c52.js";import"./Tooltip.ae0bcccb.js";import"./Book.c168f1ae.js";import"./VideoCamera.8895b7b5.js";const w={components:{AdditionalInformation:m,Category:p,Features:s,Import:a,LicenseKey:c,SearchAppearance:l,SmartRecommendations:u,Success:d,Welcome:f},computed:{...e("wizard",["shouldShowImportStep"]),...e(["isUnlicensed"]),...n("wizard",["stages"]),...n(["internalOptions"])},methods:{..._("wizard",["setStages","loadState"]),deleteStage(t){const o=[...this.stages],r=o.findIndex(i=>t===i);r!==-1&&o.splice(r,1),this.setStages(o)}},mounted(){if(this.internalOptions.internal.wizard){const t=JSON.parse(this.internalOptions.internal.wizard);delete t.currentStage,delete t.stages,delete t.licenseKey,this.loadState(t)}this.shouldShowImportStep||this.deleteStage("import"),this.isUnlicensed||this.deleteStage("license-key"),this.$isPro&&this.deleteStage("smart-recommendations")}};function x(t,o,r,i,z,$){return y(),S(g(t.$route.name))}const Ot=h(w,[["render",x]]);export{Ot as default};